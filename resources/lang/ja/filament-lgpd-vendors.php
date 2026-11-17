<?php

return [
    'resource' => [
        'label' => '委託先',
        'plural_label' => '委託先',
    ],

    'fields' => [
        'name' => '名称',
        'document' => '登録番号',
        'role' => '役割',
        'risk' => 'リスク',
        'services' => 'サービス',
        'data_categories' => '共有するデータ',
        'country' => '国（ISOコード）',
        'transfer_mechanism' => '移転の根拠（第33条）',
        'contact' => '連絡先',
        'dpa_signed_at' => '契約締結日',
        'dpa_expires_at' => '契約満了日',
        'dpa_checklist' => '契約に含まれる事項',
        'notes' => 'メモ',
        'issues' => '課題',
        'no_issues' => 'なし',
        'next_review' => '次回レビュー',
    ],

    'sections' => [
        'agreement' => 'データ処理契約',
    ],

    'help' => [
        'country' => '国外の委託先には国際移転の根拠が必要です。',
        'agreement' => '処理者と共同管理者は契約で拘束される必要があります（第39条）。',
        'terminate' => '以後、委託先はデータの削除または返却を行う必要があります（第16条）。',
    ],

    'filters' => [
        'active' => '有効',
    ],

    'roles' => [
        'processor' => '処理者',
        'controller' => '独立した管理者',
        'joint_controller' => '共同管理者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'mechanisms' => [
        'adequacy' => '十分な保護水準の国（第33条 I）',
        'specific_clauses' => '個別の契約条項（第33条 II a）',
        'standard_clauses' => '標準契約条項（第33条 II b）',
        'binding_corporate_rules' => '拘束的企業準則（第33条 II c）',
        'seals_certificates' => '認証・シール・行動規範（第33条 II d）',
        'international_cooperation' => '国際的な司法協力（第33条 III）',
        'life_protection' => '生命の保護（第33条 IV）',
        'anpd_authorization' => 'ANPDの許可（第33条 V）',
        'international_commitment' => '国際的な約束（第33条 VI）',
        'public_policy' => '公共政策（第33条 VII）',
        'specific_consent' => '個別の同意（第33条 VIII）',
        'legal_basis' => '法的義務・契約・権利行使（第33条 IX）',
    ],

    'issues' => [
        'agreement_missing' => '署名済みの契約なし',
        'agreement_expired' => '契約期限切れ',
        'agreement_incomplete' => '契約が不完全',
        'transfer_mechanism_missing' => '移転の根拠なし',
        'review_due' => 'レビュー期限',
        'data_return_pending' => 'データ返却待ち',
    ],

    'checklist' => [
        'instructions' => '文書化された当社の指示に基づいてのみデータを処理する（第39条）',
        'confidentiality' => 'データを扱う者は守秘義務を負う',
        'security_measures' => '技術的・管理的な安全管理措置（第46条）',
        'sub_processors' => '再委託は事前承認と同等の義務がある場合のみ',
        'data_subject_rights' => 'データ主体からの請求への対応を支援する（第18条）',
        'incident_notification' => 'セキュリティインシデントを遅滞なく通知する（第48条）',
        'international_transfers' => '国際移転は第33条の根拠がある場合のみ',
        'deletion_on_termination' => '契約終了時にデータを削除または返却する（第16条）',
        'audits' => '監査を受け入れ、遵守を証明する',
    ],

    'actions' => [
        'review' => 'レビュー済みにする',
        'terminate' => '取引を終了',
        'data_returned' => 'データ削除・返却済み',
    ],

    'notifications' => [
        'reviewed' => '委託先をレビューしました',
    ],
];
