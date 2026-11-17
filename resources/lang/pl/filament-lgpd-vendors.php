<?php

return [
    'resource' => [
        'label' => 'Dostawca',
        'plural_label' => 'Dostawcy',
    ],

    'fields' => [
        'name' => 'Nazwa',
        'document' => 'Numer rejestrowy',
        'role' => 'Rola',
        'risk' => 'Ryzyko',
        'services' => 'Usługi',
        'data_categories' => 'Udostępniane dane',
        'country' => 'Kraj (kod ISO)',
        'transfer_mechanism' => 'Mechanizm przekazywania (art. 33)',
        'contact' => 'Kontakt',
        'dpa_signed_at' => 'Umowa podpisana',
        'dpa_expires_at' => 'Umowa wygasa',
        'dpa_checklist' => 'Umowa obejmuje',
        'notes' => 'Notatki',
        'issues' => 'Braki',
        'no_issues' => 'Brak',
        'next_review' => 'Następny przegląd',
    ],

    'sections' => [
        'agreement' => 'Umowa powierzenia przetwarzania danych',
    ],

    'help' => [
        'country' => 'Dostawcy spoza Twojego kraju wymagają mechanizmu przekazywania międzynarodowego.',
        'agreement' => 'Podmioty przetwarzające i współadministratorzy muszą być związani umową (art. 39).',
        'terminate' => 'Dostawca będzie musiał wtedy usunąć lub zwrócić dane (art. 16).',
    ],

    'filters' => [
        'active' => 'Aktywni',
    ],

    'roles' => [
        'processor' => 'Podmiot przetwarzający',
        'controller' => 'Niezależny administrator',
        'joint_controller' => 'Współadministrator',
    ],

    'risks' => [
        'low' => 'Niskie',
        'medium' => 'Średnie',
        'high' => 'Wysokie',
    ],

    'mechanisms' => [
        'adequacy' => 'Kraj o odpowiednim poziomie ochrony (art. 33, I)',
        'specific_clauses' => 'Szczególne klauzule umowne (art. 33, II, a)',
        'standard_clauses' => 'Standardowe klauzule umowne (art. 33, II, b)',
        'binding_corporate_rules' => 'Wiążące reguły korporacyjne (art. 33, II, c)',
        'seals_certificates' => 'Pieczęcie, certyfikaty i kodeksy postępowania (art. 33, II, d)',
        'international_cooperation' => 'Międzynarodowa współpraca prawna (art. 33, III)',
        'life_protection' => 'Ochrona życia (art. 33, IV)',
        'anpd_authorization' => 'Zezwolenie ANPD (art. 33, V)',
        'international_commitment' => 'Zobowiązanie międzynarodowe (art. 33, VI)',
        'public_policy' => 'Polityka publiczna (art. 33, VII)',
        'specific_consent' => 'Szczególna zgoda (art. 33, VIII)',
        'legal_basis' => 'Obowiązek prawny, umowa lub wykonywanie praw (art. 33, IX)',
    ],

    'issues' => [
        'agreement_missing' => 'Brak podpisanej umowy',
        'agreement_expired' => 'Umowa wygasła',
        'agreement_incomplete' => 'Umowa niekompletna',
        'transfer_mechanism_missing' => 'Brak mechanizmu przekazywania',
        'review_due' => 'Wymagany przegląd',
        'data_return_pending' => 'Oczekuje na zwrot danych',
    ],

    'checklist' => [
        'instructions' => 'Przetwarza dane wyłącznie na nasze udokumentowane polecenie (art. 39)',
        'confidentiality' => 'Osoby przetwarzające dane są zobowiązane do poufności',
        'security_measures' => 'Techniczne i organizacyjne środki bezpieczeństwa (art. 46)',
        'sub_processors' => 'Podprocesorzy tylko za uprzednią zgodą i z tymi samymi obowiązkami',
        'data_subject_rights' => 'Pomaga nam odpowiadać na żądania osób, których dane dotyczą (art. 18)',
        'incident_notification' => 'Niezwłocznie zgłasza nam incydenty bezpieczeństwa (art. 48)',
        'international_transfers' => 'Przekazywanie międzynarodowe tylko z mechanizmem z art. 33',
        'deletion_on_termination' => 'Usuwa lub zwraca dane po zakończeniu umowy (art. 16)',
        'audits' => 'Umożliwia audyty i wykazuje zgodność',
    ],

    'actions' => [
        'review' => 'Oznacz jako sprawdzony',
        'terminate' => 'Zakończ współpracę',
        'data_returned' => 'Dane usunięte lub zwrócone',
    ],

    'notifications' => [
        'reviewed' => 'Dostawca sprawdzony',
    ],
];
