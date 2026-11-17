<?php

return [
    'resource' => [
        'label' => 'Yetkazib beruvchi',
        'plural_label' => 'Yetkazib beruvchilar',
    ],

    'fields' => [
        'name' => 'Nomi',
        'document' => 'Ro\'yxatdan o\'tish raqami',
        'role' => 'Rol',
        'risk' => 'Xavf',
        'services' => 'Xizmatlar',
        'data_categories' => 'Ulashilgan ma\'lumotlar',
        'country' => 'Mamlakat (ISO kodi)',
        'transfer_mechanism' => 'Uzatish mexanizmi (33-modda)',
        'contact' => 'Aloqa',
        'dpa_signed_at' => 'Shartnoma imzolangan sana',
        'dpa_expires_at' => 'Shartnoma tugash sanasi',
        'dpa_checklist' => 'Shartnoma o\'z ichiga oladi',
        'notes' => 'Izohlar',
        'issues' => 'Muammolar',
        'no_issues' => 'Yo\'q',
        'next_review' => 'Keyingi tekshiruv',
    ],

    'sections' => [
        'agreement' => 'Ma\'lumotlarga ishlov berish shartnomasi',
    ],

    'help' => [
        'country' => 'Mamlakatingizdan tashqaridagi yetkazib beruvchilarga xalqaro uzatish mexanizmi kerak.',
        'agreement' => 'Ishlov beruvchilar va qo\'shma nazoratchilar shartnoma bilan bog\'langan bo\'lishi kerak (39-modda).',
        'terminate' => 'Shundan so\'ng yetkazib beruvchi ma\'lumotlarni o\'chirishi yoki qaytarishi kerak (16-modda).',
    ],

    'filters' => [
        'active' => 'Faol',
    ],

    'roles' => [
        'processor' => 'Ishlov beruvchi',
        'controller' => 'Mustaqil nazoratchi',
        'joint_controller' => 'Qo\'shma nazoratchi',
    ],

    'risks' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'mechanisms' => [
        'adequacy' => 'Yetarli himoyaga ega mamlakat (33-modda, I)',
        'specific_clauses' => 'Maxsus shartnoma bandlari (33-modda, II, a)',
        'standard_clauses' => 'Standart shartnoma bandlari (33-modda, II, b)',
        'binding_corporate_rules' => 'Majburiy korporativ qoidalar (33-modda, II, c)',
        'seals_certificates' => 'Muhrlar, sertifikatlar va xulq-atvor kodekslari (33-modda, II, d)',
        'international_cooperation' => 'Xalqaro huquqiy hamkorlik (33-modda, III)',
        'life_protection' => 'Hayotni himoya qilish (33-modda, IV)',
        'anpd_authorization' => 'ANPD ruxsati (33-modda, V)',
        'international_commitment' => 'Xalqaro majburiyat (33-modda, VI)',
        'public_policy' => 'Davlat siyosati (33-modda, VII)',
        'specific_consent' => 'Maxsus rozilik (33-modda, VIII)',
        'legal_basis' => 'Qonuniy majburiyat, shartnoma yoki huquqlarni amalga oshirish (33-modda, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Imzolangan shartnoma yo\'q',
        'agreement_expired' => 'Shartnoma muddati tugagan',
        'agreement_incomplete' => 'Shartnoma to\'liq emas',
        'transfer_mechanism_missing' => 'Uzatish mexanizmi yo\'q',
        'review_due' => 'Tekshiruv vaqti keldi',
        'data_return_pending' => 'Ma\'lumotlarni qaytarish kutilmoqda',
    ],

    'checklist' => [
        'instructions' => 'Ma\'lumotlarga faqat hujjatlashtirilgan ko\'rsatmalarimiz bo\'yicha ishlov beradi (39-modda)',
        'confidentiality' => 'Ma\'lumotlar bilan ishlovchilar maxfiylikka majbur',
        'security_measures' => 'Texnik va ma\'muriy xavfsizlik choralari (46-modda)',
        'sub_processors' => 'Quyi ishlov beruvchilar faqat oldindan ruxsat va bir xil majburiyatlar bilan',
        'data_subject_rights' => 'Ma\'lumot subyektlarining so\'rovlariga javob berishda yordam beradi (18-modda)',
        'incident_notification' => 'Xavfsizlik hodisalari haqida kechiktirmay xabar beradi (48-modda)',
        'international_transfers' => 'Xalqaro uzatishlar faqat 33-modda mexanizmi bilan',
        'deletion_on_termination' => 'Shartnoma tugaganda ma\'lumotlarni o\'chiradi yoki qaytaradi (16-modda)',
        'audits' => 'Auditlarga ruxsat beradi va muvofiqlikni isbotlaydi',
    ],

    'actions' => [
        'review' => 'Tekshirilgan deb belgilash',
        'terminate' => 'Hamkorlikni tugatish',
        'data_returned' => 'Ma\'lumotlar o\'chirildi yoki qaytarildi',
    ],

    'notifications' => [
        'reviewed' => 'Yetkazib beruvchi tekshirildi',
    ],
];
