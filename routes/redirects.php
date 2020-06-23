<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'en'], function (): void {
    Route::redirect('projects/brewie-website', '/en/projects', 301);
    Route::redirect('projects/cravcitech-website', '/en/projects', 301);
    Route::redirect('projects/idea-elearning-software', '/en/projects', 301);
    Route::redirect('projects/profnet-elearning-platform', '/en/projects', 301);
});

Route::group(['prefix' => 'hu'], function (): void {
    Route::redirect('projektek/brewie-weboldal', '/hu/projektek', 301);
    Route::redirect('projects/cravcitech-weboldal.blade.php', '/hu/projects', 301);
    Route::redirect('projektek/idea-elearning-szoftver', '/hu/projektek', 301);
    Route::redirect('projektek/profnet-elearning-platform', '/hu/projektek', 301);
});
