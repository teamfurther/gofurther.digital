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

    'prices' => [
        'design-sprint' => [
            'default' => '3990',
            'payment_url' => 'https://book.stripe.com/fZe5ny8Zxgxe10I7su',
            'promo' => [
                'name' => 'Online Special',
                'price' => '2990',
            ]
        ],
        'discovery' => [
            'default' => '1990',
            'payment_url' => 'https://book.stripe.com/fZe17i0t194M7p66op',
            'promo' => [
                'name' => 'Online Special',
                'price' => '1390',
            ]
        ],
        'ui-design' => [
            'default' => '3490',
            'promo' => [
                'name' => 'Online Special',
                'price' => '2490',
            ],
            'spots' => 2,
        ],
        'ui-design-duo' => [
            'default' => '4490',
        ],
        'ui-design-trial' => [
            'default' => '750',
        ],
        'ux-audit' => [
            'default' => '1490',
            'payment_url' => 'https://book.stripe.com/3cs4jua3B0yg5gY144',
            'promo' => [
//                'name' => 'Online Special',
//                'price' => '990',
                'name' => 'WebSummit2024',
                'price' => '490',
            ],
        ],
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
        'company_age' => 11,
        'countries' => 11,
        'projects' => 185,
    ]

];
