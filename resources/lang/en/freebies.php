<?php

return [

    'error' => [
        'message' => 'Something went wrong with your download. Please try again later or write us at <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
        'title' => 'Uh-oh!',
    ],
    'subject' => 'Here is the link to your download',
    'success' => [
        'message' => 'Success! You should soon get an email with your download link. If not, please write us at <a href="mailto:' . config('mail.to') . '">' . config('mail.to') . '</a>.',
        'title' => 'You\'re awesome!',
    ],

];
