<?php

return [
    'resource' => [
        'label' => 'Leverancier',
        'plural_label' => 'Leveranciers',
    ],

    'fields' => [
        'name' => 'Naam',
        'document' => 'Registratienummer',
        'role' => 'Rol',
        'risk' => 'Risico',
        'services' => 'Diensten',
        'data_categories' => 'Gedeelde gegevens',
        'country' => 'Land (ISO-code)',
        'transfer_mechanism' => 'Doorgiftemechanisme (art. 33)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Overeenkomst getekend op',
        'dpa_expires_at' => 'Overeenkomst verloopt op',
        'dpa_checklist' => 'De overeenkomst omvat',
        'notes' => 'Notities',
        'issues' => 'Openstaande punten',
        'no_issues' => 'Geen',
        'next_review' => 'Volgende beoordeling',
    ],

    'sections' => [
        'agreement' => 'Verwerkersovereenkomst',
    ],

    'help' => [
        'country' => 'Leveranciers buiten uw land hebben een mechanisme voor internationale doorgifte nodig.',
        'agreement' => 'Verwerkers en gezamenlijke verwerkingsverantwoordelijken moeten met een overeenkomst gebonden zijn (art. 39).',
        'terminate' => 'De leverancier moet daarna de gegevens verwijderen of teruggeven (art. 16).',
    ],

    'filters' => [
        'active' => 'Actief',
    ],

    'roles' => [
        'processor' => 'Verwerker',
        'controller' => 'Zelfstandige verwerkingsverantwoordelijke',
        'joint_controller' => 'Gezamenlijke verwerkingsverantwoordelijke',
    ],

    'risks' => [
        'low' => 'Laag',
        'medium' => 'Gemiddeld',
        'high' => 'Hoog',
    ],

    'mechanisms' => [
        'adequacy' => 'Passend land (art. 33, I)',
        'specific_clauses' => 'Specifieke contractbepalingen (art. 33, II, a)',
        'standard_clauses' => 'Standaardcontractbepalingen (art. 33, II, b)',
        'binding_corporate_rules' => 'Bindende bedrijfsvoorschriften (art. 33, II, c)',
        'seals_certificates' => 'Keurmerken, certificaten en gedragscodes (art. 33, II, d)',
        'international_cooperation' => 'Internationale rechtshulp (art. 33, III)',
        'life_protection' => 'Bescherming van het leven (art. 33, IV)',
        'anpd_authorization' => 'Toestemming van de ANPD (art. 33, V)',
        'international_commitment' => 'Internationale verplichting (art. 33, VI)',
        'public_policy' => 'Overheidsbeleid (art. 33, VII)',
        'specific_consent' => 'Specifieke toestemming (art. 33, VIII)',
        'legal_basis' => 'Wettelijke verplichting, overeenkomst of uitoefening van rechten (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Geen getekende overeenkomst',
        'agreement_expired' => 'Overeenkomst verlopen',
        'agreement_incomplete' => 'Overeenkomst onvolledig',
        'transfer_mechanism_missing' => 'Geen doorgiftemechanisme',
        'review_due' => 'Beoordeling nodig',
        'data_return_pending' => 'Teruggave van gegevens openstaand',
    ],

    'checklist' => [
        'instructions' => 'Verwerkt de gegevens alleen op onze gedocumenteerde instructies (art. 39)',
        'confidentiality' => 'Wie de gegevens verwerkt, heeft geheimhoudingsplicht',
        'security_measures' => 'Technische en organisatorische beveiligingsmaatregelen (art. 46)',
        'sub_processors' => 'Subverwerkers alleen met voorafgaande toestemming en dezelfde verplichtingen',
        'data_subject_rights' => 'Helpt ons verzoeken van betrokkenen te beantwoorden (art. 18)',
        'incident_notification' => 'Meldt beveiligingsincidenten zonder vertraging (art. 48)',
        'international_transfers' => 'Internationale doorgifte alleen met een mechanisme uit art. 33',
        'deletion_on_termination' => 'Verwijdert of geeft de gegevens terug aan het einde van het contract (art. 16)',
        'audits' => 'Staat audits toe en toont naleving aan',
    ],

    'actions' => [
        'review' => 'Markeren als beoordeeld',
        'terminate' => 'Relatie beëindigen',
        'data_returned' => 'Gegevens verwijderd of teruggegeven',
    ],

    'notifications' => [
        'reviewed' => 'Leverancier beoordeeld',
    ],
];
