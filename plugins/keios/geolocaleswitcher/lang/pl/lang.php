<?php

return [
    'plugin' => [
        'name' => 'GeoLocaleSwitcher',
        'description' => 'Zmień język w zależności od lokacji odwiedzającego',
        'settings_desc' => 'Włącz lub wyłącz przekierowania GeoLocale',
    ],
    'settings' => [
        'enabled' => 'Włącz Przekierowanie GeoLocaleSwitcher',
        'enabled_desc' => 'Jeśli włączony, nastąpi automatyczne przekierowanie do wykrytego języka',
    ],
    'component' => [
        'title' => 'Kraj i Język',
        'description' => 'Wyświetla kraj odwiedzjającego i aktywny język',
        'langpage_title' => 'Strona Zmień język',
        'langpage_description' => 'Strona służąca do zmiany języka',
    ],
    'geocomponent' => [
        'description' => 'Pokazuje wykryty kraj i miasto, oraz wybrany język',
        'langpage_description' => 'Strona z wyborem języków wyświetlana po kliknięciu linka z komponentu',
        'langpage_title' => 'Strona wyboru języka',
        'title' => 'Pokaż GeoLocale',
    ],
    'localecomponent' => [
        'description' => 'Wyświetla liste dostępnych języków dla wykrytego kraju.',
        'title' => 'Języki Kraju',
    ],
    'permissions' => [
        'geolocaleswitcher' => 'Ustawienia GeoLocaleSwitcher',
        'tab' => 'GeoLocaleSwitcher',
    ],
];