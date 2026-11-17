<?php

return [
    'resource' => [
        'label' => 'Proveedor',
        'plural_label' => 'Proveedores',
    ],

    'fields' => [
        'name' => 'Nombre',
        'document' => 'Número de registro',
        'role' => 'Rol',
        'risk' => 'Riesgo',
        'services' => 'Servicios',
        'data_categories' => 'Datos compartidos',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferencia (art. 33)',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato firmado el',
        'dpa_expires_at' => 'Contrato vence el',
        'dpa_checklist' => 'El contrato cubre',
        'notes' => 'Notas',
        'issues' => 'Pendientes',
        'no_issues' => 'Ninguno',
        'next_review' => 'Próxima revisión',
    ],

    'sections' => [
        'agreement' => 'Contrato de tratamiento de datos',
    ],

    'help' => [
        'country' => 'Los proveedores fuera de su país necesitan un mecanismo de transferencia internacional.',
        'agreement' => 'Los encargados y corresponsables deben estar vinculados por un contrato (art. 39).',
        'terminate' => 'El proveedor deberá entonces eliminar o devolver los datos (art. 16).',
    ],

    'filters' => [
        'active' => 'Activos',
    ],

    'roles' => [
        'processor' => 'Encargado',
        'controller' => 'Responsable independiente',
        'joint_controller' => 'Corresponsable',
    ],

    'risks' => [
        'low' => 'Bajo',
        'medium' => 'Medio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'País con protección adecuada (art. 33, I)',
        'specific_clauses' => 'Cláusulas contractuales específicas (art. 33, II, a)',
        'standard_clauses' => 'Cláusulas contractuales tipo (art. 33, II, b)',
        'binding_corporate_rules' => 'Normas corporativas vinculantes (art. 33, II, c)',
        'seals_certificates' => 'Sellos, certificados y códigos de conducta (art. 33, II, d)',
        'international_cooperation' => 'Cooperación jurídica internacional (art. 33, III)',
        'life_protection' => 'Protección de la vida (art. 33, IV)',
        'anpd_authorization' => 'Autorización de la ANPD (art. 33, V)',
        'international_commitment' => 'Compromiso internacional (art. 33, VI)',
        'public_policy' => 'Política pública (art. 33, VII)',
        'specific_consent' => 'Consentimiento específico (art. 33, VIII)',
        'legal_basis' => 'Obligación legal, contrato o ejercicio de derechos (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Sin contrato firmado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sin mecanismo de transferencia',
        'review_due' => 'Revisión pendiente',
        'data_return_pending' => 'Devolución de datos pendiente',
    ],

    'checklist' => [
        'instructions' => 'Trata los datos solo según nuestras instrucciones documentadas (art. 39)',
        'confidentiality' => 'Quienes tratan los datos están obligados a confidencialidad',
        'security_measures' => 'Medidas de seguridad técnicas y administrativas (art. 46)',
        'sub_processors' => 'Subencargados solo con autorización previa y las mismas obligaciones',
        'data_subject_rights' => 'Nos ayuda a atender las solicitudes de los titulares (art. 18)',
        'incident_notification' => 'Nos notifica los incidentes de seguridad sin demora (art. 48)',
        'international_transfers' => 'Transferencias internacionales solo con un mecanismo del art. 33',
        'deletion_on_termination' => 'Elimina o devuelve los datos al terminar el contrato (art. 16)',
        'audits' => 'Permite auditorías y acredita el cumplimiento',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Terminar relación',
        'data_returned' => 'Datos eliminados o devueltos',
    ],

    'notifications' => [
        'reviewed' => 'Proveedor revisado',
    ],
];
