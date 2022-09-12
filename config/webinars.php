<?php

return [
    'design-sprint' => [
        'duration' => 240,
        'next' => env('WEBINAR_DESIGN_SPRINT_NEXT', null),
        'spots' => 10,
        'slug' => null,
    ],
    'digital-product-development' => [
        'duration' => 90,
        'next' => env('WEBINAR_DIGITAL_PRODUCT_DEVELOPMENT_NEXT', null),
        'spots' => 10,
        'slug' => null,
    ],
    'validation' => [
        'duration' => 90,
        'next' => env('WEBINAR_VALIDATION_NEXT', null),
        'spots' => 10,
        'slug' => '9-out-of-10-products-fail-heres-how-to-ensure-yours-doesnt',
    ],
];
