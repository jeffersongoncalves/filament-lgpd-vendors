<?php

return [
    'resource' => [
        'label' => 'विक्रेता',
        'plural_label' => 'विक्रेता',
    ],

    'fields' => [
        'name' => 'नाम',
        'document' => 'पंजीकरण संख्या',
        'role' => 'भूमिका',
        'risk' => 'जोखिम',
        'services' => 'सेवाएँ',
        'data_categories' => 'साझा किया गया डेटा',
        'country' => 'देश (ISO कोड)',
        'transfer_mechanism' => 'हस्तांतरण तंत्र (अनु. 33)',
        'contact' => 'संपर्क',
        'dpa_signed_at' => 'समझौते पर हस्ताक्षर',
        'dpa_expires_at' => 'समझौते की समाप्ति',
        'dpa_checklist' => 'समझौते में शामिल है',
        'notes' => 'टिप्पणियाँ',
        'issues' => 'समस्याएँ',
        'no_issues' => 'कोई नहीं',
        'next_review' => 'अगली समीक्षा',
    ],

    'sections' => [
        'agreement' => 'डेटा प्रोसेसिंग समझौता',
    ],

    'help' => [
        'country' => 'आपके देश से बाहर के विक्रेताओं को अंतरराष्ट्रीय हस्तांतरण तंत्र चाहिए।',
        'agreement' => 'प्रोसेसर और संयुक्त नियंत्रक समझौते से बंधे होने चाहिए (अनु. 39)।',
        'terminate' => 'इसके बाद विक्रेता को डेटा हटाना या लौटाना होगा (अनु. 16)।',
    ],

    'filters' => [
        'active' => 'सक्रिय',
    ],

    'roles' => [
        'processor' => 'प्रोसेसर',
        'controller' => 'स्वतंत्र नियंत्रक',
        'joint_controller' => 'संयुक्त नियंत्रक',
    ],

    'risks' => [
        'low' => 'कम',
        'medium' => 'मध्यम',
        'high' => 'उच्च',
    ],

    'mechanisms' => [
        'adequacy' => 'पर्याप्त संरक्षण वाला देश (अनु. 33, I)',
        'specific_clauses' => 'विशिष्ट संविदात्मक खंड (अनु. 33, II, a)',
        'standard_clauses' => 'मानक संविदात्मक खंड (अनु. 33, II, b)',
        'binding_corporate_rules' => 'बाध्यकारी कॉर्पोरेट नियम (अनु. 33, II, c)',
        'seals_certificates' => 'मुहरें, प्रमाणपत्र और आचार संहिताएँ (अनु. 33, II, d)',
        'international_cooperation' => 'अंतरराष्ट्रीय कानूनी सहयोग (अनु. 33, III)',
        'life_protection' => 'जीवन की रक्षा (अनु. 33, IV)',
        'anpd_authorization' => 'ANPD की अनुमति (अनु. 33, V)',
        'international_commitment' => 'अंतरराष्ट्रीय प्रतिबद्धता (अनु. 33, VI)',
        'public_policy' => 'सार्वजनिक नीति (अनु. 33, VII)',
        'specific_consent' => 'विशिष्ट सहमति (अनु. 33, VIII)',
        'legal_basis' => 'कानूनी दायित्व, अनुबंध या अधिकारों का प्रयोग (अनु. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'कोई हस्ताक्षरित समझौता नहीं',
        'agreement_expired' => 'समझौता समाप्त',
        'agreement_incomplete' => 'समझौता अधूरा',
        'transfer_mechanism_missing' => 'कोई हस्तांतरण तंत्र नहीं',
        'review_due' => 'समीक्षा बकाया',
        'data_return_pending' => 'डेटा वापसी लंबित',
    ],

    'checklist' => [
        'instructions' => 'डेटा को केवल हमारे प्रलेखित निर्देशों पर प्रोसेस करता है (अनु. 39)',
        'confidentiality' => 'डेटा संभालने वाले लोग गोपनीयता से बंधे हैं',
        'security_measures' => 'तकनीकी और प्रशासनिक सुरक्षा उपाय (अनु. 46)',
        'sub_processors' => 'सब-प्रोसेसर केवल पूर्व अनुमति और समान दायित्वों के साथ',
        'data_subject_rights' => 'डेटा विषयों के अनुरोधों का उत्तर देने में मदद करता है (अनु. 18)',
        'incident_notification' => 'सुरक्षा घटनाओं की सूचना बिना देरी के देता है (अनु. 48)',
        'international_transfers' => 'अंतरराष्ट्रीय हस्तांतरण केवल अनु. 33 के तंत्र से',
        'deletion_on_termination' => 'अनुबंध समाप्त होने पर डेटा हटाता या लौटाता है (अनु. 16)',
        'audits' => 'ऑडिट की अनुमति देता है और अनुपालन सिद्ध करता है',
    ],

    'actions' => [
        'review' => 'समीक्षित चिह्नित करें',
        'terminate' => 'संबंध समाप्त करें',
        'data_returned' => 'डेटा हटाया या लौटाया गया',
    ],

    'notifications' => [
        'reviewed' => 'विक्रेता की समीक्षा हो गई',
    ],
];
