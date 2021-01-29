<?php

return [

    'error' => [
        'message' => 'Valami gond van a letöltéseddel. Kérlek próbálkozz később, vagy írj a <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a> címre.',
        'title' => 'Uppsz!',
    ],
    'subject' => 'Innen töltheted le a kért anyagot',
    'success' => [
        'message' => 'Siker! A letöltésed hamarosan elindul. Ha mégsem, írj nekünk a következő email címre: <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
        'title' => 'Szuper vagy!',
    ],

];
