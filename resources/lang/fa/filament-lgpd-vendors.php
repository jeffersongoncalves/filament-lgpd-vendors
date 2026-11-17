<?php

return [
    'resource' => [
        'label' => 'تأمین‌کننده',
        'plural_label' => 'تأمین‌کنندگان',
    ],

    'fields' => [
        'name' => 'نام',
        'document' => 'شماره ثبت',
        'role' => 'نقش',
        'risk' => 'ریسک',
        'services' => 'خدمات',
        'data_categories' => 'داده‌های به‌اشتراک‌گذاشته',
        'country' => 'کشور (کد ISO)',
        'transfer_mechanism' => 'سازوکار انتقال (ماده ۳۳)',
        'contact' => 'تماس',
        'dpa_signed_at' => 'تاریخ امضای قرارداد',
        'dpa_expires_at' => 'تاریخ انقضای قرارداد',
        'dpa_checklist' => 'قرارداد شامل این موارد است',
        'notes' => 'یادداشت‌ها',
        'issues' => 'مشکلات',
        'no_issues' => 'هیچ',
        'next_review' => 'بازبینی بعدی',
    ],

    'sections' => [
        'agreement' => 'قرارداد پردازش داده',
    ],

    'help' => [
        'country' => 'تأمین‌کنندگان خارج از کشور شما به سازوکار انتقال بین‌المللی نیاز دارند.',
        'agreement' => 'پردازشگران و کنترل‌کنندگان مشترک باید با قرارداد متعهد شوند (ماده ۳۹).',
        'terminate' => 'پس از آن تأمین‌کننده باید داده‌ها را حذف یا بازگرداند (ماده ۱۶).',
    ],

    'filters' => [
        'active' => 'فعال',
    ],

    'roles' => [
        'processor' => 'پردازشگر',
        'controller' => 'کنترل‌کننده مستقل',
        'joint_controller' => 'کنترل‌کننده مشترک',
    ],

    'risks' => [
        'low' => 'کم',
        'medium' => 'متوسط',
        'high' => 'زیاد',
    ],

    'mechanisms' => [
        'adequacy' => 'کشور با حفاظت کافی (ماده ۳۳، I)',
        'specific_clauses' => 'بندهای قراردادی خاص (ماده ۳۳، II، a)',
        'standard_clauses' => 'بندهای قراردادی استاندارد (ماده ۳۳، II، b)',
        'binding_corporate_rules' => 'قواعد الزام‌آور شرکتی (ماده ۳۳، II، c)',
        'seals_certificates' => 'مهرها، گواهی‌ها و آیین‌نامه‌های رفتاری (ماده ۳۳، II، d)',
        'international_cooperation' => 'همکاری حقوقی بین‌المللی (ماده ۳۳، III)',
        'life_protection' => 'حفاظت از جان (ماده ۳۳، IV)',
        'anpd_authorization' => 'مجوز ANPD (ماده ۳۳، V)',
        'international_commitment' => 'تعهد بین‌المللی (ماده ۳۳، VI)',
        'public_policy' => 'سیاست عمومی (ماده ۳۳، VII)',
        'specific_consent' => 'رضایت خاص (ماده ۳۳، VIII)',
        'legal_basis' => 'تعهد قانونی، قرارداد یا اعمال حقوق (ماده ۳۳، IX)',
    ],

    'issues' => [
        'agreement_missing' => 'قرارداد امضاشده‌ای وجود ندارد',
        'agreement_expired' => 'قرارداد منقضی شده',
        'agreement_incomplete' => 'قرارداد ناقص است',
        'transfer_mechanism_missing' => 'سازوکار انتقال ندارد',
        'review_due' => 'زمان بازبینی رسیده',
        'data_return_pending' => 'بازگرداندن داده‌ها در انتظار است',
    ],

    'checklist' => [
        'instructions' => 'داده‌ها را فقط طبق دستورالعمل‌های مستند ما پردازش می‌کند (ماده ۳۹)',
        'confidentiality' => 'افرادی که با داده‌ها کار می‌کنند متعهد به محرمانگی‌اند',
        'security_measures' => 'اقدامات امنیتی فنی و اداری (ماده ۴۶)',
        'sub_processors' => 'پردازشگران فرعی فقط با مجوز قبلی و همان تعهدات',
        'data_subject_rights' => 'در پاسخ به درخواست‌های صاحبان داده به ما کمک می‌کند (ماده ۱۸)',
        'incident_notification' => 'حوادث امنیتی را بدون تأخیر به ما اطلاع می‌دهد (ماده ۴۸)',
        'international_transfers' => 'انتقال بین‌المللی فقط با سازوکار ماده ۳۳',
        'deletion_on_termination' => 'در پایان قرارداد داده‌ها را حذف یا بازمی‌گرداند (ماده ۱۶)',
        'audits' => 'اجازه حسابرسی می‌دهد و انطباق را اثبات می‌کند',
    ],

    'actions' => [
        'review' => 'علامت‌گذاری به‌عنوان بازبینی‌شده',
        'terminate' => 'پایان همکاری',
        'data_returned' => 'داده‌ها حذف یا بازگردانده شد',
    ],

    'notifications' => [
        'reviewed' => 'تأمین‌کننده بازبینی شد',
    ],
];
