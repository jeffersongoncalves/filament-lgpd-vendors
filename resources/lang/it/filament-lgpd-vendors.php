<?php

return [
    'resource' => [
        'label' => 'Fornitore',
        'plural_label' => 'Fornitori',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Numero di registrazione',
        'role' => 'Ruolo',
        'risk' => 'Rischio',
        'services' => 'Servizi',
        'data_categories' => 'Dati condivisi',
        'country' => 'Paese (codice ISO)',
        'transfer_mechanism' => 'Meccanismo di trasferimento (art. 33)',
        'contact' => 'Contatto',
        'dpa_signed_at' => 'Contratto firmato il',
        'dpa_expires_at' => 'Contratto scade il',
        'dpa_checklist' => 'Il contratto copre',
        'notes' => 'Note',
        'issues' => 'Criticità',
        'no_issues' => 'Nessuna',
        'next_review' => 'Prossima revisione',
    ],

    'sections' => [
        'agreement' => 'Contratto di trattamento dei dati',
    ],

    'help' => [
        'country' => 'I fornitori fuori dal tuo paese richiedono un meccanismo di trasferimento internazionale.',
        'agreement' => 'Responsabili e contitolari devono essere vincolati da un contratto (art. 39).',
        'terminate' => 'Il fornitore dovrà quindi cancellare o restituire i dati (art. 16).',
    ],

    'filters' => [
        'active' => 'Attivi',
    ],

    'roles' => [
        'processor' => 'Responsabile del trattamento',
        'controller' => 'Titolare autonomo',
        'joint_controller' => 'Contitolare',
    ],

    'risks' => [
        'low' => 'Basso',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'Paese adeguato (art. 33, I)',
        'specific_clauses' => 'Clausole contrattuali specifiche (art. 33, II, a)',
        'standard_clauses' => 'Clausole contrattuali tipo (art. 33, II, b)',
        'binding_corporate_rules' => 'Norme vincolanti d\'impresa (art. 33, II, c)',
        'seals_certificates' => 'Sigilli, certificazioni e codici di condotta (art. 33, II, d)',
        'international_cooperation' => 'Cooperazione giudiziaria internazionale (art. 33, III)',
        'life_protection' => 'Tutela della vita (art. 33, IV)',
        'anpd_authorization' => 'Autorizzazione dell\'ANPD (art. 33, V)',
        'international_commitment' => 'Impegno internazionale (art. 33, VI)',
        'public_policy' => 'Politica pubblica (art. 33, VII)',
        'specific_consent' => 'Consenso specifico (art. 33, VIII)',
        'legal_basis' => 'Obbligo legale, contratto o esercizio di diritti (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Nessun contratto firmato',
        'agreement_expired' => 'Contratto scaduto',
        'agreement_incomplete' => 'Contratto incompleto',
        'transfer_mechanism_missing' => 'Nessun meccanismo di trasferimento',
        'review_due' => 'Revisione da fare',
        'data_return_pending' => 'Restituzione dei dati in sospeso',
    ],

    'checklist' => [
        'instructions' => 'Tratta i dati solo su nostre istruzioni documentate (art. 39)',
        'confidentiality' => 'Chi tratta i dati è vincolato alla riservatezza',
        'security_measures' => 'Misure di sicurezza tecniche e organizzative (art. 46)',
        'sub_processors' => 'Sub-responsabili solo con autorizzazione preventiva e gli stessi obblighi',
        'data_subject_rights' => 'Ci aiuta a rispondere alle richieste degli interessati (art. 18)',
        'incident_notification' => 'Ci notifica gli incidenti di sicurezza senza ritardo (art. 48)',
        'international_transfers' => 'Trasferimenti internazionali solo con un meccanismo dell\'art. 33',
        'deletion_on_termination' => 'Cancella o restituisce i dati alla fine del contratto (art. 16)',
        'audits' => 'Consente audit e dimostra la conformità',
    ],

    'actions' => [
        'review' => 'Segna come revisionato',
        'terminate' => 'Chiudi il rapporto',
        'data_returned' => 'Dati cancellati o restituiti',
    ],

    'notifications' => [
        'reviewed' => 'Fornitore revisionato',
    ],
];
