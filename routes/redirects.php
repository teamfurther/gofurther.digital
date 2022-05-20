<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'en'], function (): void {
    Route::redirect('mvp-development', '/en/services', 301);
    Route::redirect('custom-software-development', '/en/services', 301);
    Route::redirect('digital-product-development', '/en/services#digital-product-development', 301);
    Route::redirect('digital-transformation', '/en/services', 301);

    Route::redirect('blog/tagged/start-up', '/en/blog/tagged/startup-and-product-development', 301);
    Route::redirect('blog/tagged/startup', '/en/blog/tagged/startup-and-product-development', 301);

    Route::redirect('projects/brewie-website', '/en/projects', 301);
    Route::redirect('projects/cravcitech-website', '/en/projects', 301);
    Route::redirect('projects/idea-elearning-software', '/en/projects', 301);
    Route::redirect('projects/profnet-elearning-platform', '/en/projects', 301);

    Route::redirect('about', '/en/about-us/team', 301);
    Route::redirect('tech-stack', '/en/about-us#tech-stack', 301);
    Route::redirect('about/team', '/en/about-us', 301);
});

Route::group(['prefix' => 'hu'], function (): void {
    Route::redirect('mvp-fejlesztes', '/hu/szolgaltatasok', 301);
    Route::redirect('digitalis-termekfejlesztes', '/hu/szolgaltatasok#digitalis-termekfejlesztes', 301);
    Route::redirect('digitalis-transzformacio', '/hu/szolgaltatasok', 301);
    Route::redirect('egyedi-szoftverfejlesztes', '/hu/szolgaltatasok', 301);

    Route::redirect('blog/cimkek/start-up', '/hu/blog/cimkek/startup-es-termekfejlesztes', 301);
    Route::redirect('blog/cimkek/startup', '/hu/blog/cimkek/startup-es-termekfejlesztes', 301);

    Route::redirect('projektek/brewie-weboldal', '/hu/projektek', 301);
    Route::redirect('projektek/cravcitech-weboldal.blade.php', '/hu/projects', 301);
    Route::redirect('projektek/idea-elearning-szoftver', '/hu/projektek', 301);
    Route::redirect('projektek/profnet-elearning-platform', '/hu/projektek', 301);

    Route::redirect('eszkoztar', '/hu/rolunk#eszkoztar', 301);
    Route::redirect('rolunk/csapatunk', '/hu/rolunk', 301);
});
