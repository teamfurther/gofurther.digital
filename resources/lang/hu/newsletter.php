<?php

return [

    'error' => [
        'message' => 'Valami hiba csúszott a gépezetbe. Kérlek próbálkozz később, vagy írj a <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a> címre.',
        'title' => 'Uppsz!',
    ],
    'success' => [
        'message' => 'Siker! Hamarosan kapod a friss és ropogós tartalmakat a fiókodba. Addig is, böngészd az <a href="' . localizedRoute('newsletter') . '">archívumot</a>.',
        'title' => 'Szuper vagy!',
    ],

];
