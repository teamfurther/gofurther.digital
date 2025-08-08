<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'en'], function (): void {
    Route::redirect('solutions/chronos-cms', '/en/services/web-development', 301);
    Route::redirect('solutions/mobile-apps', '/en/services/mobile-apps', 301);
    Route::redirect('solutions/mvp-development', '/en/services/no-code-and-low-code-development', 301);
    Route::redirect('solutions/ecommerce-development', '/en/services/ecommerce-development', 301);
    Route::redirect('solutions/{any}', '/en/services', 301)->where('any', '.*');
});

Route::group(['prefix' => 'hu'], function (): void {
    Route::redirect('megoldasaink/chronos-cms', '/hu/szolgaltatasok/webfejlesztes', 301);
    Route::redirect('megoldasaink/mobilapplikacio', '/hu/szolgaltatasok/applikacio-fejlesztes', 301);
    Route::redirect('megoldasaink/mvp-fejlesztes', '/hu/szolgaltatasok/no-code-es-low-code-fejlesztes', 301);
    Route::redirect('megoldasaink/webaruhaz', '/hu/szolgaltatasok/webshop-fejlesztes', 301);
    Route::redirect('megoldasaink/{any}', '/hu/szolgaltatasok', 301)->where('any', '.*');
});

Route::redirect('/media/further-booklet-0417-web-en.pdf', '/media/further-booklet-0821-web-en.pdf', 301);
