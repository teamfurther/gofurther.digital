<?php

return [

    'error' => [
        'message' => 'Valami gond van a letöltéseddel. Kérlek próbálkozz később, vagy írj a <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a> címre.',
        'title' => 'Uppsz!',
    ],
    'subject' => 'Innen töltheted le a kért anyagot',
    'success' => [
        'message' => 'Siker! Hamarosan kapsz egy email a letöltési linkkel. Ha mégsem, írj nekünk a következő email címre: <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
        'title' => 'Szuper vagy!',
    ],

];
