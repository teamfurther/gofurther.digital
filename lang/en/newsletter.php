<?php

return [

    'error' => [
        'message' => 'Something went wrong with your subscription. Please try again later or write us at <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
        'title' => 'Uh-oh!',
    ],
    'success' => [
        'message' => 'Success! Soon we\'ll deliver fresh content right to your inbox. Until then, browse our <a href="' . localizedRoute('newsletter') . '">archives</a>.',
        'title' => 'You\'re awesome!',
    ],

];
