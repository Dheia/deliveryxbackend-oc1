<?php

return [
    'plugin'          => [
        'name'          => 'GeoLocaleSwitcher',
        'description'   => 'Change language depending on visitor location',
        'settings_desc' => 'Enable or disable features of GeoLocaleSwitcher',
    ],
    'settings'        => [
        'enabled'      => 'Enable GeoLocale Redirect',
        'enabled_desc' => 'If enabled, visitor will be automatically redirected to proper language',
    ],
    'component'       => [
        'title'                => 'County & Language',
        'description'          => 'Displays visitor countries and current locale',
        'langpage_title'       => 'Change Locale Page',
        'langpage_description' => 'Page with LocalePicker',
    ],
    'geocomponent'    => [
        'description'          => 'Displays detected Country, City and selected Locale',
        'langpage_description' => 'Website to show after clicking the link',
        'langpage_title'       => 'Language page',
        'title'                => 'Show GeoLocale',
    ],
    'localecomponent' => [
        'description' => 'Display languages available for detected country',
        'title'       => 'Country Languages',
    ],
    'permissions'     => [
        'geolocaleswitcher' => 'GeoLocaleSwitcher Settings',
        'tab'               => 'GeoLocaleSwitcher',
    ],
];