<?php

return [
    'resource' => [
        'label' => 'Vendor',
        'plural_label' => 'Vendors',
    ],

    'fields' => [
        'name' => 'Name',
        'document' => 'Registration number',
        'role' => 'Role',
        'risk' => 'Risk',
        'services' => 'Services',
        'data_categories' => 'Data shared',
        'country' => 'Country (ISO code)',
        'transfer_mechanism' => 'Transfer mechanism (art. 33)',
        'contact' => 'Contact',
        'dpa_signed_at' => 'Agreement signed on',
        'dpa_expires_at' => 'Agreement expires on',
        'dpa_checklist' => 'The agreement covers',
        'notes' => 'Notes',
        'issues' => 'Issues',
        'no_issues' => 'None',
        'next_review' => 'Next review',
    ],

    'sections' => [
        'agreement' => 'Data processing agreement',
    ],

    'help' => [
        'country' => 'Vendors outside your country need an international transfer mechanism.',
        'agreement' => 'Processors and joint controllers must be bound by an agreement (art. 39).',
        'terminate' => 'The vendor will then owe the deletion or return of the data (art. 16).',
    ],

    'filters' => [
        'active' => 'Active',
    ],

    'roles' => [
        'processor' => 'Processor',
        'controller' => 'Independent controller',
        'joint_controller' => 'Joint controller',
    ],

    'risks' => [
        'low' => 'Low',
        'medium' => 'Medium',
        'high' => 'High',
    ],

    'mechanisms' => [
        'adequacy' => 'Adequate country (art. 33, I)',
        'specific_clauses' => 'Specific contractual clauses (art. 33, II, a)',
        'standard_clauses' => 'Standard contractual clauses (art. 33, II, b)',
        'binding_corporate_rules' => 'Binding corporate rules (art. 33, II, c)',
        'seals_certificates' => 'Seals, certificates and codes of conduct (art. 33, II, d)',
        'international_cooperation' => 'International legal cooperation (art. 33, III)',
        'life_protection' => 'Protection of life (art. 33, IV)',
        'anpd_authorization' => 'ANPD authorization (art. 33, V)',
        'international_commitment' => 'International commitment (art. 33, VI)',
        'public_policy' => 'Public policy (art. 33, VII)',
        'specific_consent' => 'Specific consent (art. 33, VIII)',
        'legal_basis' => 'Legal obligation, contract or exercise of rights (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'No signed agreement',
        'agreement_expired' => 'Agreement expired',
        'agreement_incomplete' => 'Agreement incomplete',
        'transfer_mechanism_missing' => 'No transfer mechanism',
        'review_due' => 'Review due',
        'data_return_pending' => 'Data return pending',
    ],

    'checklist' => [
        'instructions' => 'Processes the data only on our documented instructions (art. 39)',
        'confidentiality' => 'People who handle the data are bound to confidentiality',
        'security_measures' => 'Technical and administrative security measures (art. 46)',
        'sub_processors' => 'Sub-processors only with prior authorization and the same obligations',
        'data_subject_rights' => 'Helps us answer data subject requests (art. 18)',
        'incident_notification' => 'Notifies us of security incidents without delay (art. 48)',
        'international_transfers' => 'International transfers only under an art. 33 mechanism',
        'deletion_on_termination' => 'Deletes or returns the data when the contract ends (art. 16)',
        'audits' => 'Allows audits and provides proof of compliance',
    ],

    'actions' => [
        'review' => 'Mark as reviewed',
        'terminate' => 'End relationship',
        'data_returned' => 'Data deleted or returned',
    ],

    'notifications' => [
        'reviewed' => 'Vendor reviewed',
    ],
];
