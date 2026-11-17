<?php

return [
    'resource' => [
        'label' => 'Tedarikçi',
        'plural_label' => 'Tedarikçiler',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Sicil numarası',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Hizmetler',
        'data_categories' => 'Paylaşılan veriler',
        'country' => 'Ülke (ISO kodu)',
        'transfer_mechanism' => 'Aktarım mekanizması (md. 33)',
        'contact' => 'İletişim',
        'dpa_signed_at' => 'Sözleşme imza tarihi',
        'dpa_expires_at' => 'Sözleşme bitiş tarihi',
        'dpa_checklist' => 'Sözleşme şunları kapsar',
        'notes' => 'Notlar',
        'issues' => 'Eksikler',
        'no_issues' => 'Yok',
        'next_review' => 'Sonraki inceleme',
    ],

    'sections' => [
        'agreement' => 'Veri işleme sözleşmesi',
    ],

    'help' => [
        'country' => 'Ülkeniz dışındaki tedarikçiler için uluslararası aktarım mekanizması gerekir.',
        'agreement' => 'Veri işleyenler ve ortak veri sorumluları sözleşmeyle bağlı olmalıdır (md. 39).',
        'terminate' => 'Tedarikçi bundan sonra verileri silmek veya iade etmek zorundadır (md. 16).',
    ],

    'filters' => [
        'active' => 'Aktif',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'controller' => 'Bağımsız veri sorumlusu',
        'joint_controller' => 'Ortak veri sorumlusu',
    ],

    'risks' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'mechanisms' => [
        'adequacy' => 'Yeterli korumaya sahip ülke (md. 33, I)',
        'specific_clauses' => 'Özel sözleşme maddeleri (md. 33, II, a)',
        'standard_clauses' => 'Standart sözleşme maddeleri (md. 33, II, b)',
        'binding_corporate_rules' => 'Bağlayıcı şirket kuralları (md. 33, II, c)',
        'seals_certificates' => 'Mühürler, sertifikalar ve davranış kuralları (md. 33, II, d)',
        'international_cooperation' => 'Uluslararası hukuki işbirliği (md. 33, III)',
        'life_protection' => 'Hayatın korunması (md. 33, IV)',
        'anpd_authorization' => 'ANPD izni (md. 33, V)',
        'international_commitment' => 'Uluslararası taahhüt (md. 33, VI)',
        'public_policy' => 'Kamu politikası (md. 33, VII)',
        'specific_consent' => 'Özel rıza (md. 33, VIII)',
        'legal_basis' => 'Hukuki yükümlülük, sözleşme veya hakların kullanılması (md. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalı sözleşme yok',
        'agreement_expired' => 'Sözleşmenin süresi doldu',
        'agreement_incomplete' => 'Sözleşme eksik',
        'transfer_mechanism_missing' => 'Aktarım mekanizması yok',
        'review_due' => 'İnceleme zamanı geldi',
        'data_return_pending' => 'Veri iadesi bekleniyor',
    ],

    'checklist' => [
        'instructions' => 'Verileri yalnızca belgelenmiş talimatlarımızla işler (md. 39)',
        'confidentiality' => 'Verileri işleyen kişiler gizlilikle yükümlüdür',
        'security_measures' => 'Teknik ve idari güvenlik önlemleri (md. 46)',
        'sub_processors' => 'Alt işleyenler yalnızca önceden izinle ve aynı yükümlülüklerle',
        'data_subject_rights' => 'İlgili kişi taleplerini yanıtlamamıza yardım eder (md. 18)',
        'incident_notification' => 'Güvenlik olaylarını gecikmeden bildirir (md. 48)',
        'international_transfers' => 'Uluslararası aktarımlar yalnızca md. 33 mekanizmasıyla',
        'deletion_on_termination' => 'Sözleşme bitince verileri siler veya iade eder (md. 16)',
        'audits' => 'Denetimlere izin verir ve uyumu kanıtlar',
    ],

    'actions' => [
        'review' => 'İncelendi olarak işaretle',
        'terminate' => 'İlişkiyi sonlandır',
        'data_returned' => 'Veriler silindi veya iade edildi',
    ],

    'notifications' => [
        'reviewed' => 'Tedarikçi incelendi',
    ],
];
