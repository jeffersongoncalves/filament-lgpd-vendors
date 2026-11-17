<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'Número de registo',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'data_categories' => 'Dados partilhados',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferência (art. 33)',
        'contact' => 'Contacto',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato expira em',
        'dpa_checklist' => 'O contrato abrange',
        'notes' => 'Notas',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato de tratamento de dados',
    ],

    'help' => [
        'country' => 'Fornecedores fora do seu país precisam de um mecanismo de transferência internacional.',
        'agreement' => 'Subcontratantes e responsáveis conjuntos devem estar vinculados por contrato (art. 39).',
        'terminate' => 'O fornecedor passa a dever apagar ou devolver os dados (art. 16).',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Subcontratante',
        'controller' => 'Responsável independente',
        'joint_controller' => 'Responsável conjunto',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'País com proteção adequada (art. 33, I)',
        'specific_clauses' => 'Cláusulas contratuais específicas (art. 33, II, a)',
        'standard_clauses' => 'Cláusulas contratuais-tipo (art. 33, II, b)',
        'binding_corporate_rules' => 'Regras vinculativas aplicáveis às empresas (art. 33, II, c)',
        'seals_certificates' => 'Selos, certificados e códigos de conduta (art. 33, II, d)',
        'international_cooperation' => 'Cooperação jurídica internacional (art. 33, III)',
        'life_protection' => 'Proteção da vida (art. 33, IV)',
        'anpd_authorization' => 'Autorização da ANPD (art. 33, V)',
        'international_commitment' => 'Compromisso internacional (art. 33, VI)',
        'public_policy' => 'Política pública (art. 33, VII)',
        'specific_consent' => 'Consentimento específico (art. 33, VIII)',
        'legal_basis' => 'Obrigação legal, contrato ou exercício de direitos (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato expirado',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sem mecanismo de transferência',
        'review_due' => 'Revisão em falta',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Trata os dados apenas segundo as nossas instruções documentadas (art. 39)',
        'confidentiality' => 'Quem trata os dados está obrigado a sigilo',
        'security_measures' => 'Medidas de segurança técnicas e organizativas (art. 46)',
        'sub_processors' => 'Subcontratantes ulteriores só com autorização prévia e as mesmas obrigações',
        'data_subject_rights' => 'Ajuda-nos a responder aos pedidos dos titulares (art. 18)',
        'incident_notification' => 'Notifica-nos de incidentes de segurança sem demora (art. 48)',
        'international_transfers' => 'Transferências internacionais só com um mecanismo do art. 33',
        'deletion_on_termination' => 'Apaga ou devolve os dados no fim do contrato (art. 16)',
        'audits' => 'Permite auditorias e comprova a conformidade',
    ],

    'actions' => [
        'review' => 'Marcar como revisto',
        'terminate' => 'Terminar relação',
        'data_returned' => 'Dados apagados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisto',
    ],
];
