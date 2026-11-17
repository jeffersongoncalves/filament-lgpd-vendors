<?php

return [
    'resource' => [
        'label' => '供应商',
        'plural_label' => '供应商',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '注册号',
        'role' => '角色',
        'risk' => '风险',
        'services' => '服务',
        'data_categories' => '共享的数据',
        'country' => '国家（ISO 代码）',
        'transfer_mechanism' => '传输机制（第 33 条）',
        'contact' => '联系方式',
        'dpa_signed_at' => '协议签署日期',
        'dpa_expires_at' => '协议到期日期',
        'dpa_checklist' => '协议涵盖',
        'notes' => '备注',
        'issues' => '问题',
        'no_issues' => '无',
        'next_review' => '下次审查',
    ],

    'sections' => [
        'agreement' => '数据处理协议',
    ],

    'help' => [
        'country' => '位于您所在国家之外的供应商需要国际传输机制。',
        'agreement' => '处理者和共同控制者必须受协议约束（第 39 条）。',
        'terminate' => '此后供应商须删除或返还数据（第 16 条）。',
    ],

    'filters' => [
        'active' => '有效',
    ],

    'roles' => [
        'processor' => '处理者',
        'controller' => '独立控制者',
        'joint_controller' => '共同控制者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'mechanisms' => [
        'adequacy' => '具有充分保护的国家（第 33 条 I）',
        'specific_clauses' => '特定合同条款（第 33 条 II a）',
        'standard_clauses' => '标准合同条款（第 33 条 II b）',
        'binding_corporate_rules' => '具约束力的公司规则（第 33 条 II c）',
        'seals_certificates' => '标志、证书和行为准则（第 33 条 II d）',
        'international_cooperation' => '国际司法合作（第 33 条 III）',
        'life_protection' => '保护生命（第 33 条 IV）',
        'anpd_authorization' => 'ANPD 授权（第 33 条 V）',
        'international_commitment' => '国际承诺（第 33 条 VI）',
        'public_policy' => '公共政策（第 33 条 VII）',
        'specific_consent' => '特定同意（第 33 条 VIII）',
        'legal_basis' => '法定义务、合同或行使权利（第 33 条 IX）',
    ],

    'issues' => [
        'agreement_missing' => '无已签署协议',
        'agreement_expired' => '协议已过期',
        'agreement_incomplete' => '协议不完整',
        'transfer_mechanism_missing' => '无传输机制',
        'review_due' => '需要审查',
        'data_return_pending' => '数据返还待处理',
    ],

    'checklist' => [
        'instructions' => '仅按我方书面指示处理数据（第 39 条）',
        'confidentiality' => '处理数据的人员负有保密义务',
        'security_measures' => '技术和管理安全措施（第 46 条）',
        'sub_processors' => '仅在事先授权且承担相同义务时使用分处理者',
        'data_subject_rights' => '协助我方回应数据主体请求（第 18 条）',
        'incident_notification' => '及时通知我方安全事件（第 48 条）',
        'international_transfers' => '仅依据第 33 条机制进行国际传输',
        'deletion_on_termination' => '合同结束时删除或返还数据（第 16 条）',
        'audits' => '允许审计并证明合规',
    ],

    'actions' => [
        'review' => '标记为已审查',
        'terminate' => '终止合作',
        'data_returned' => '数据已删除或返还',
    ],

    'notifications' => [
        'reviewed' => '供应商已审查',
    ],
];
