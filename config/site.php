<?php

return [

    'name' => env('APP_NAME', 'Further Digital Solutions'),

    'title' => [
        'en' => 'Digital product development',
        'hu' => 'Testreszabott szoftveres megoldások',
    ],
    'description' => [
        'en' => 'We are a product and software development company specialized in providing bespoke solutions, with over ' . config('site.stats.projects') . ' projects deployed in ' . config('site.stats.countries') . ' countries.',
        'hu' => 'Egyedi szoftveres megoldásokat kínáló fejlesztő cég vagyunk. 2013 óta több tucat sikeres projektet valósítottunk meg boldog ügyfeleinknek, ' . config('site.stats.countries') . ' országban.',
    ],
    'preview_image' => [
        'en' => '/img/facebook-cover.png',
        'hu' => '/img/facebook-cover.png',
    ],

    'company' => [
        'address' => [
            'city' => 'Timisoara',
            'country' => 'Romania',
            'postal_code' => '300667',
            'street_address' => 'Cl. Torontalului 25/A sc. A ap. 6',
        ],
        'name' => 'C4WEB STUDIO SRL',
        'regno' => 'J35/2534/2013',
        'vatno' => 'RO32329797',
    ],

    'contact' => [
        'phone-1' => '+36 70 592 1697',
        'phone-2' => '+40 728 156 333',
        'email' => 'hello@gofurther.digital',
    ],

    'social' => [
        'facebook' => 'https://facebook.com/furtherdigitalsolutions',
        'github' => 'https://github.com/teamfurther',
        'instagram' => 'https://instagram.com/teamFurther',
        'linkedin' => 'https://linkedin.com/company/furtherdigitalsolutions',
        'medium' => 'https://medium.com/@teamFurther',
        'twitter' => 'https://twitter.com/teamFurther',
    ],

    'stats' => [
        'avg_years' => 3.3,
        'clients' => 78,
        'company_age' => 8,
        'countries' => 11,
        'projects' => 185,
    ]

];
