<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'en'], function (): void {
    Route::redirect('mvp-development', '/en/digital-product-development', 301);

    Route::redirect('projects/brewie-website', '/en/projects', 301);
    Route::redirect('projects/cravcitech-website', '/en/projects', 301);
    Route::redirect('projects/idea-elearning-software', '/en/projects', 301);
    Route::redirect('projects/profnet-elearning-platform', '/en/projects', 301);

    Route::redirect('about', '/en/about-us/team', 301);
    Route::redirect('tech-stack', '/en/about-us/how-we-work#tech-stack', 301);
});

Route::group(['prefix' => 'hu'], function (): void {
    Route::redirect('mvp-fejlesztes', '/hu/digitalis-termekfejlesztes', 301);

    Route::redirect('projektek/brewie-weboldal', '/hu/projektek', 301);
    Route::redirect('projects/cravcitech-weboldal.blade.php', '/hu/projects', 301);
    Route::redirect('projektek/idea-elearning-szoftver', '/hu/projektek', 301);
    Route::redirect('projektek/profnet-elearning-platform', '/hu/projektek', 301);

    Route::redirect('eszkoztar', '/hu/rolunk/hogyan-dolgozunk#eszkoztar', 301);
    Route::redirect('rolunk', '/hu/rolunk/csapatunk', 301);
});
