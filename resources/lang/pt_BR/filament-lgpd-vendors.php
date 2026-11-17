<?php

return [
    'resource' => [
        'label' => 'Fornecedor',
        'plural_label' => 'Fornecedores',
    ],

    'fields' => [
        'name' => 'Nome',
        'document' => 'CNPJ / registro',
        'role' => 'Papel',
        'risk' => 'Risco',
        'services' => 'Serviços',
        'data_categories' => 'Dados compartilhados',
        'country' => 'País (código ISO)',
        'transfer_mechanism' => 'Mecanismo de transferência (art. 33)',
        'contact' => 'Contato',
        'dpa_signed_at' => 'Contrato assinado em',
        'dpa_expires_at' => 'Contrato vence em',
        'dpa_checklist' => 'O contrato cobre',
        'notes' => 'Observações',
        'issues' => 'Pendências',
        'no_issues' => 'Nenhuma',
        'next_review' => 'Próxima revisão',
    ],

    'sections' => [
        'agreement' => 'Contrato de tratamento de dados',
    ],

    'help' => [
        'country' => 'Fornecedores fora do seu país precisam de um mecanismo de transferência internacional.',
        'agreement' => 'Operadores e controladores conjuntos devem estar vinculados por contrato (art. 39).',
        'terminate' => 'O fornecedor passa a dever a eliminação ou devolução dos dados (art. 16).',
    ],

    'filters' => [
        'active' => 'Ativos',
    ],

    'roles' => [
        'processor' => 'Operador',
        'controller' => 'Controlador independente',
        'joint_controller' => 'Controlador conjunto',
    ],

    'risks' => [
        'low' => 'Baixo',
        'medium' => 'Médio',
        'high' => 'Alto',
    ],

    'mechanisms' => [
        'adequacy' => 'País com proteção adequada (art. 33, I)',
        'specific_clauses' => 'Cláusulas contratuais específicas (art. 33, II, a)',
        'standard_clauses' => 'Cláusulas-padrão contratuais (art. 33, II, b)',
        'binding_corporate_rules' => 'Normas corporativas globais (art. 33, II, c)',
        'seals_certificates' => 'Selos, certificados e códigos de conduta (art. 33, II, d)',
        'international_cooperation' => 'Cooperação jurídica internacional (art. 33, III)',
        'life_protection' => 'Proteção da vida (art. 33, IV)',
        'anpd_authorization' => 'Autorização da ANPD (art. 33, V)',
        'international_commitment' => 'Compromisso em acordo internacional (art. 33, VI)',
        'public_policy' => 'Execução de política pública (art. 33, VII)',
        'specific_consent' => 'Consentimento específico (art. 33, VIII)',
        'legal_basis' => 'Obrigação legal, contrato ou exercício de direitos (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Sem contrato assinado',
        'agreement_expired' => 'Contrato vencido',
        'agreement_incomplete' => 'Contrato incompleto',
        'transfer_mechanism_missing' => 'Sem mecanismo de transferência',
        'review_due' => 'Revisão pendente',
        'data_return_pending' => 'Devolução dos dados pendente',
    ],

    'checklist' => [
        'instructions' => 'Trata os dados apenas segundo nossas instruções documentadas (art. 39)',
        'confidentiality' => 'Quem trata os dados está obrigado a sigilo',
        'security_measures' => 'Medidas de segurança técnicas e administrativas (art. 46)',
        'sub_processors' => 'Suboperadores só com autorização prévia e as mesmas obrigações',
        'data_subject_rights' => 'Ajuda a atender as solicitações dos titulares (art. 18)',
        'incident_notification' => 'Comunica incidentes de segurança sem demora (art. 48)',
        'international_transfers' => 'Transferências internacionais só com mecanismo do art. 33',
        'deletion_on_termination' => 'Elimina ou devolve os dados ao fim do contrato (art. 16)',
        'audits' => 'Permite auditorias e comprova a conformidade',
    ],

    'actions' => [
        'review' => 'Marcar como revisado',
        'terminate' => 'Encerrar relação',
        'data_returned' => 'Dados eliminados ou devolvidos',
    ],

    'notifications' => [
        'reviewed' => 'Fornecedor revisado',
    ],
];
