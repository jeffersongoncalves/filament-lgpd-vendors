<?php

return [
    'resource' => [
        'label' => 'Dienstleister',
        'plural_label' => 'Dienstleister',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registernummer',
        'role' => 'Rolle',
        'risk' => 'Risiko',
        'services' => 'Leistungen',
        'data_categories' => 'Geteilte Daten',
        'country' => 'Land (ISO-Code)',
        'transfer_mechanism' => 'Übermittlungsmechanismus (Art. 33)',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Vertrag unterzeichnet am',
        'dpa_expires_at' => 'Vertrag läuft ab am',
        'dpa_checklist' => 'Der Vertrag umfasst',
        'notes' => 'Notizen',
        'issues' => 'Mängel',
        'no_issues' => 'Keine',
        'next_review' => 'Nächste Prüfung',
    ],

    'sections' => [
        'agreement' => 'Auftragsverarbeitungsvertrag',
    ],

    'help' => [
        'country' => 'Dienstleister außerhalb Ihres Landes benötigen einen Mechanismus für internationale Übermittlungen.',
        'agreement' => 'Auftragsverarbeiter und gemeinsam Verantwortliche müssen vertraglich gebunden sein (Art. 39).',
        'terminate' => 'Der Dienstleister muss die Daten danach löschen oder zurückgeben (Art. 16).',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Auftragsverarbeiter',
        'controller' => 'Eigenständiger Verantwortlicher',
        'joint_controller' => 'Gemeinsam Verantwortlicher',
    ],

    'risks' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
    ],

    'mechanisms' => [
        'adequacy' => 'Angemessenes Land (Art. 33, I)',
        'specific_clauses' => 'Spezifische Vertragsklauseln (Art. 33, II, a)',
        'standard_clauses' => 'Standardvertragsklauseln (Art. 33, II, b)',
        'binding_corporate_rules' => 'Verbindliche interne Datenschutzvorschriften (Art. 33, II, c)',
        'seals_certificates' => 'Siegel, Zertifikate und Verhaltensregeln (Art. 33, II, d)',
        'international_cooperation' => 'Internationale Rechtshilfe (Art. 33, III)',
        'life_protection' => 'Schutz des Lebens (Art. 33, IV)',
        'anpd_authorization' => 'Genehmigung der ANPD (Art. 33, V)',
        'international_commitment' => 'Internationale Verpflichtung (Art. 33, VI)',
        'public_policy' => 'Öffentliche Politik (Art. 33, VII)',
        'specific_consent' => 'Spezifische Einwilligung (Art. 33, VIII)',
        'legal_basis' => 'Rechtliche Verpflichtung, Vertrag oder Rechtsausübung (Art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Kein unterzeichneter Vertrag',
        'agreement_expired' => 'Vertrag abgelaufen',
        'agreement_incomplete' => 'Vertrag unvollständig',
        'transfer_mechanism_missing' => 'Kein Übermittlungsmechanismus',
        'review_due' => 'Prüfung fällig',
        'data_return_pending' => 'Datenrückgabe ausstehend',
    ],

    'checklist' => [
        'instructions' => 'Verarbeitet die Daten nur auf unsere dokumentierte Weisung (Art. 39)',
        'confidentiality' => 'Personen mit Datenzugriff sind zur Vertraulichkeit verpflichtet',
        'security_measures' => 'Technische und organisatorische Sicherheitsmaßnahmen (Art. 46)',
        'sub_processors' => 'Unterauftragsverarbeiter nur mit vorheriger Genehmigung und gleichen Pflichten',
        'data_subject_rights' => 'Unterstützt uns bei Anfragen betroffener Personen (Art. 18)',
        'incident_notification' => 'Meldet uns Sicherheitsvorfälle unverzüglich (Art. 48)',
        'international_transfers' => 'Internationale Übermittlungen nur mit einem Mechanismus nach Art. 33',
        'deletion_on_termination' => 'Löscht oder gibt die Daten bei Vertragsende zurück (Art. 16)',
        'audits' => 'Ermöglicht Audits und weist die Einhaltung nach',
    ],

    'actions' => [
        'review' => 'Als geprüft markieren',
        'terminate' => 'Beziehung beenden',
        'data_returned' => 'Daten gelöscht oder zurückgegeben',
    ],

    'notifications' => [
        'reviewed' => 'Dienstleister geprüft',
    ],
];
