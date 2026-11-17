<?php

return [
    'resource' => [
        'label' => 'Təchizatçı',
        'plural_label' => 'Təchizatçılar',
    ],

    'fields' => [
        'name' => 'Ad',
        'document' => 'Qeydiyyat nömrəsi',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Xidmətlər',
        'data_categories' => 'Paylaşılan məlumatlar',
        'country' => 'Ölkə (ISO kodu)',
        'transfer_mechanism' => 'Ötürmə mexanizmi (mad. 33)',
        'contact' => 'Əlaqə',
        'dpa_signed_at' => 'Müqavilə imzalanıb',
        'dpa_expires_at' => 'Müqavilənin bitmə tarixi',
        'dpa_checklist' => 'Müqavilə əhatə edir',
        'notes' => 'Qeydlər',
        'issues' => 'Problemlər',
        'no_issues' => 'Yoxdur',
        'next_review' => 'Növbəti yoxlama',
    ],

    'sections' => [
        'agreement' => 'Məlumatların emalı müqaviləsi',
    ],

    'help' => [
        'country' => 'Ölkənizdən kənar təchizatçılara beynəlxalq ötürmə mexanizmi lazımdır.',
        'agreement' => 'Emalçılar və birgə nəzarətçilər müqavilə ilə bağlı olmalıdır (mad. 39).',
        'terminate' => 'Bundan sonra təchizatçı məlumatları silməli və ya qaytarmalıdır (mad. 16).',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Emalçı',
        'controller' => 'Müstəqil nəzarətçi',
        'joint_controller' => 'Birgə nəzarətçi',
    ],

    'risks' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'mechanisms' => [
        'adequacy' => 'Adekvat ölkə (mad. 33, I)',
        'specific_clauses' => 'Xüsusi müqavilə bəndləri (mad. 33, II, a)',
        'standard_clauses' => 'Standart müqavilə bəndləri (mad. 33, II, b)',
        'binding_corporate_rules' => 'Məcburi korporativ qaydalar (mad. 33, II, c)',
        'seals_certificates' => 'Möhürlər, sertifikatlar və davranış kodeksləri (mad. 33, II, d)',
        'international_cooperation' => 'Beynəlxalq hüquqi əməkdaşlıq (mad. 33, III)',
        'life_protection' => 'Həyatın qorunması (mad. 33, IV)',
        'anpd_authorization' => 'ANPD icazəsi (mad. 33, V)',
        'international_commitment' => 'Beynəlxalq öhdəlik (mad. 33, VI)',
        'public_policy' => 'Dövlət siyasəti (mad. 33, VII)',
        'specific_consent' => 'Xüsusi razılıq (mad. 33, VIII)',
        'legal_basis' => 'Hüquqi öhdəlik, müqavilə və ya hüquqların həyata keçirilməsi (mad. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalanmış müqavilə yoxdur',
        'agreement_expired' => 'Müqavilənin vaxtı keçib',
        'agreement_incomplete' => 'Müqavilə natamamdır',
        'transfer_mechanism_missing' => 'Ötürmə mexanizmi yoxdur',
        'review_due' => 'Yoxlama vaxtı çatıb',
        'data_return_pending' => 'Məlumatların qaytarılması gözlənilir',
    ],

    'checklist' => [
        'instructions' => 'Məlumatları yalnız sənədləşdirilmiş təlimatlarımızla emal edir (mad. 39)',
        'confidentiality' => 'Məlumatlarla işləyən şəxslər məxfiliyə bağlıdır',
        'security_measures' => 'Texniki və inzibati təhlükəsizlik tədbirləri (mad. 46)',
        'sub_processors' => 'Alt emalçılar yalnız əvvəlcədən icazə və eyni öhdəliklərlə',
        'data_subject_rights' => 'Məlumat subyektlərinin müraciətlərinə cavab verməkdə kömək edir (mad. 18)',
        'incident_notification' => 'Təhlükəsizlik insidentlərini gecikmədən bildirir (mad. 48)',
        'international_transfers' => 'Beynəlxalq ötürmələr yalnız mad. 33 mexanizmi ilə',
        'deletion_on_termination' => 'Müqavilə bitəndə məlumatları silir və ya qaytarır (mad. 16)',
        'audits' => 'Auditlərə icazə verir və uyğunluğu sübut edir',
    ],

    'actions' => [
        'review' => 'Yoxlanılmış kimi qeyd et',
        'terminate' => 'Əlaqəni bitir',
        'data_returned' => 'Məlumatlar silindi və ya qaytarıldı',
    ],

    'notifications' => [
        'reviewed' => 'Təchizatçı yoxlanıldı',
    ],
];
