<?php

return [
    'resource' => [
        'label' => 'مورّد',
        'plural_label' => 'المورّدون',
    ],

    'fields' => [
        'name' => 'الاسم',
        'document' => 'رقم التسجيل',
        'role' => 'الدور',
        'risk' => 'المخاطر',
        'services' => 'الخدمات',
        'data_categories' => 'البيانات المشتركة',
        'country' => 'الدولة (رمز ISO)',
        'transfer_mechanism' => 'آلية النقل (المادة 33)',
        'contact' => 'جهة الاتصال',
        'dpa_signed_at' => 'تاريخ توقيع الاتفاقية',
        'dpa_expires_at' => 'تاريخ انتهاء الاتفاقية',
        'dpa_checklist' => 'تغطي الاتفاقية',
        'notes' => 'ملاحظات',
        'issues' => 'المشكلات',
        'no_issues' => 'لا شيء',
        'next_review' => 'المراجعة التالية',
    ],

    'sections' => [
        'agreement' => 'اتفاقية معالجة البيانات',
    ],

    'help' => [
        'country' => 'يحتاج المورّدون خارج بلدك إلى آلية نقل دولي.',
        'agreement' => 'يجب أن يرتبط المعالجون والمتحكمون المشتركون باتفاقية (المادة 39).',
        'terminate' => 'سيكون على المورّد بعد ذلك حذف البيانات أو إعادتها (المادة 16).',
    ],

    'filters' => [
        'active' => 'نشط',
    ],

    'roles' => [
        'processor' => 'معالج',
        'controller' => 'متحكم مستقل',
        'joint_controller' => 'متحكم مشترك',
    ],

    'risks' => [
        'low' => 'منخفضة',
        'medium' => 'متوسطة',
        'high' => 'مرتفعة',
    ],

    'mechanisms' => [
        'adequacy' => 'دولة ذات حماية كافية (المادة 33، I)',
        'specific_clauses' => 'بنود تعاقدية خاصة (المادة 33، II، a)',
        'standard_clauses' => 'بنود تعاقدية نموذجية (المادة 33، II، b)',
        'binding_corporate_rules' => 'قواعد مؤسسية ملزمة (المادة 33، II، c)',
        'seals_certificates' => 'أختام وشهادات ومدونات سلوك (المادة 33، II، d)',
        'international_cooperation' => 'تعاون قانوني دولي (المادة 33، III)',
        'life_protection' => 'حماية الحياة (المادة 33، IV)',
        'anpd_authorization' => 'ترخيص من ANPD (المادة 33، V)',
        'international_commitment' => 'التزام دولي (المادة 33، VI)',
        'public_policy' => 'سياسة عامة (المادة 33، VII)',
        'specific_consent' => 'موافقة محددة (المادة 33، VIII)',
        'legal_basis' => 'التزام قانوني أو عقد أو ممارسة حقوق (المادة 33، IX)',
    ],

    'issues' => [
        'agreement_missing' => 'لا توجد اتفاقية موقعة',
        'agreement_expired' => 'انتهت الاتفاقية',
        'agreement_incomplete' => 'الاتفاقية غير مكتملة',
        'transfer_mechanism_missing' => 'لا توجد آلية نقل',
        'review_due' => 'المراجعة مستحقة',
        'data_return_pending' => 'إعادة البيانات معلّقة',
    ],

    'checklist' => [
        'instructions' => 'يعالج البيانات فقط وفق تعليماتنا الموثقة (المادة 39)',
        'confidentiality' => 'الأشخاص الذين يتعاملون مع البيانات ملزمون بالسرية',
        'security_measures' => 'تدابير أمنية تقنية وإدارية (المادة 46)',
        'sub_processors' => 'معالجون فرعيون فقط بإذن مسبق وبالالتزامات نفسها',
        'data_subject_rights' => 'يساعدنا في الرد على طلبات أصحاب البيانات (المادة 18)',
        'incident_notification' => 'يبلغنا بالحوادث الأمنية دون تأخير (المادة 48)',
        'international_transfers' => 'النقل الدولي فقط وفق آلية من المادة 33',
        'deletion_on_termination' => 'يحذف البيانات أو يعيدها عند انتهاء العقد (المادة 16)',
        'audits' => 'يسمح بالتدقيق ويقدم ما يثبت الامتثال',
    ],

    'actions' => [
        'review' => 'تحديد كمراجَع',
        'terminate' => 'إنهاء العلاقة',
        'data_returned' => 'تم حذف البيانات أو إعادتها',
    ],

    'notifications' => [
        'reviewed' => 'تمت مراجعة المورّد',
    ],
];
