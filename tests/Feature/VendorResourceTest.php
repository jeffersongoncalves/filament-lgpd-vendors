<?php

use JeffersonGoncalves\Filament\LgpdVendors\LgpdVendorsPlugin;
use JeffersonGoncalves\Filament\LgpdVendors\Resources\Vendors\Pages\CreateVendor;
use JeffersonGoncalves\Filament\LgpdVendors\Resources\Vendors\Pages\EditVendor;
use JeffersonGoncalves\Filament\LgpdVendors\Resources\Vendors\Pages\ListVendors;
use JeffersonGoncalves\Filament\LgpdVendors\Resources\Vendors\VendorResource;
use JeffersonGoncalves\Filament\LgpdVendors\Tests\Fixtures\TestUser;
use JeffersonGoncalves\LgpdVendors\Enums\TransferMechanism;
use JeffersonGoncalves\LgpdVendors\Enums\VendorRole;
use JeffersonGoncalves\LgpdVendors\Models\Vendor;
use Livewire\Livewire;

beforeEach(function () {
    $this->actingAs(TestUser::create(['name' => 'DPO', 'email' => 'dpo@example.com']));
});

it('creates a processor abroad with its agreement checklist', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm([
            'name' => 'Stripe',
            'role' => 'processor',
            'risk' => 'high',
            'country' => 'US',
            'transfer_mechanism' => 'standard_clauses',
            'dpa_signed_at' => '2026-01-10',
            'dpa_checklist' => ['instructions', 'audits'],
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Vendor::sole())
        ->role->toBe(VendorRole::Processor)
        ->transfer_mechanism->toBe(TransferMechanism::StandardClauses)
        ->dpa_checklist->toBe(['instructions' => true, 'audits' => true]);
});

it('requires a name and a role', function () {
    Livewire::test(CreateVendor::class)
        ->fillForm(['name' => '', 'role' => null])
        ->call('create')
        ->assertHasFormErrors(['name' => 'required', 'role' => 'required']);
});

it('lists vendors with their issues', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::Processor]);

    Livewire::test(ListVendors::class)
        ->assertCanSeeTableRecords([$vendor])
        ->assertSee('No signed agreement');
});

it('edits the checklist, keeping the stored map', function () {
    $vendor = Vendor::create(['name' => 'Mailer', 'role' => VendorRole::Processor, 'dpa_signed_at' => now(), 'dpa_checklist' => ['instructions' => true]]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])
        ->assertFormSet(['dpa_checklist' => ['instructions']])
        ->fillForm(['dpa_checklist' => ['instructions', 'confidentiality']])
        ->call('save')
        ->assertHasNoFormErrors();

    expect($vendor->fresh()->dpa_checklist)->toBe(['instructions' => true, 'confidentiality' => true]);
});

it('reviews, terminates and confirms the data return', function () {
    $vendor = Vendor::create(['name' => 'Old CRM', 'role' => VendorRole::Controller]);

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('review');
    expect($vendor->fresh()->reviewed_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('terminate');
    expect($vendor->fresh()->terminated_at)->not->toBeNull();

    Livewire::test(EditVendor::class, ['record' => $vendor->getKey()])->callAction('dataReturned');
    expect($vendor->fresh()->issues())->toBe([]);
});

it('applies the fluent plugin options', function () {
    LgpdVendorsPlugin::get()->navigationGroup('LGPD')->slug('suppliers');

    expect(VendorResource::getNavigationGroup())->toBe('LGPD')
        ->and(VendorResource::getSlug())->toBe('suppliers');
});
