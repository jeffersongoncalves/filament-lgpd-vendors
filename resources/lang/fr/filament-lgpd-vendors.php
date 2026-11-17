<?php

return [
    'resource' => [
        'label' => 'Prestataire',
        'plural_label' => 'Prestataires',
    ],

    'fields' => [
        'name' => 'Nom',
        'document' => 'Numéro d\'immatriculation',
        'role' => 'Rôle',
        'risk' => 'Risque',
        'services' => 'Services',
        'data_categories' => 'Données partagées',
        'country' => 'Pays (code ISO)',
        'transfer_mechanism' => 'Mécanisme de transfert (art. 33)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Contrat signé le',
        'dpa_expires_at' => 'Contrat expire le',
        'dpa_checklist' => 'Le contrat couvre',
        'notes' => 'Notes',
        'issues' => 'Points en suspens',
        'no_issues' => 'Aucun',
        'next_review' => 'Prochaine revue',
    ],

    'sections' => [
        'agreement' => 'Contrat de traitement des données',
    ],

    'help' => [
        'country' => 'Les prestataires hors de votre pays ont besoin d\'un mécanisme de transfert international.',
        'agreement' => 'Les sous-traitants et responsables conjoints doivent être liés par un contrat (art. 39).',
        'terminate' => 'Le prestataire devra alors supprimer ou restituer les données (art. 16).',
    ],

    'filters' => [
        'active' => 'Actifs',
    ],

    'roles' => [
        'processor' => 'Sous-traitant',
        'controller' => 'Responsable indépendant',
        'joint_controller' => 'Responsable conjoint',
    ],

    'risks' => [
        'low' => 'Faible',
        'medium' => 'Moyen',
        'high' => 'Élevé',
    ],

    'mechanisms' => [
        'adequacy' => 'Pays adéquat (art. 33, I)',
        'specific_clauses' => 'Clauses contractuelles spécifiques (art. 33, II, a)',
        'standard_clauses' => 'Clauses contractuelles types (art. 33, II, b)',
        'binding_corporate_rules' => 'Règles d\'entreprise contraignantes (art. 33, II, c)',
        'seals_certificates' => 'Labels, certifications et codes de conduite (art. 33, II, d)',
        'international_cooperation' => 'Coopération juridique internationale (art. 33, III)',
        'life_protection' => 'Protection de la vie (art. 33, IV)',
        'anpd_authorization' => 'Autorisation de l\'ANPD (art. 33, V)',
        'international_commitment' => 'Engagement international (art. 33, VI)',
        'public_policy' => 'Politique publique (art. 33, VII)',
        'specific_consent' => 'Consentement spécifique (art. 33, VIII)',
        'legal_basis' => 'Obligation légale, contrat ou exercice de droits (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Aucun contrat signé',
        'agreement_expired' => 'Contrat expiré',
        'agreement_incomplete' => 'Contrat incomplet',
        'transfer_mechanism_missing' => 'Aucun mécanisme de transfert',
        'review_due' => 'Revue à faire',
        'data_return_pending' => 'Restitution des données en attente',
    ],

    'checklist' => [
        'instructions' => 'Traite les données uniquement sur nos instructions documentées (art. 39)',
        'confidentiality' => 'Les personnes qui traitent les données sont tenues à la confidentialité',
        'security_measures' => 'Mesures de sécurité techniques et organisationnelles (art. 46)',
        'sub_processors' => 'Sous-traitants ultérieurs seulement avec autorisation préalable et les mêmes obligations',
        'data_subject_rights' => 'Nous aide à répondre aux demandes des personnes concernées (art. 18)',
        'incident_notification' => 'Nous notifie les incidents de sécurité sans délai (art. 48)',
        'international_transfers' => 'Transferts internationaux uniquement avec un mécanisme de l\'art. 33',
        'deletion_on_termination' => 'Supprime ou restitue les données à la fin du contrat (art. 16)',
        'audits' => 'Autorise les audits et prouve sa conformité',
    ],

    'actions' => [
        'review' => 'Marquer comme revu',
        'terminate' => 'Mettre fin à la relation',
        'data_returned' => 'Données supprimées ou restituées',
    ],

    'notifications' => [
        'reviewed' => 'Prestataire revu',
    ],
];
