<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): void {
    // this is empty, as lang middleware will take care of redirection
});

/*
 * ENGLISH
 */
Route::group(['as' => 'en.', 'namespace' => 'EN', 'prefix' => 'en'], function (): void {
    Route::view('/', 'en.pages.home')->name('home');
    Route::view('about', 'en.pages.about')->name('about');
    Route::view('coming-soon', 'en.pages.coming-soon')->name('coming-soon');
    Route::view('cookies-policy', 'en.pages.cookies')->name('cookies');
    Route::view('privacy-policy', 'en.pages.privacy')->name('privacy');
    Route::view('tech-stack', 'en.pages.tech-stack')->name('tech-stack');
    Route::view('terms-of-use', 'en.pages.terms')->name('terms');

    Route::view('digital-transformation', 'en.services.digital-transformation')
        ->name('services.digital-transformation');
    Route::view('custom-software-development', 'en.services.custom-development')
        ->name('services.custom-development');
    Route::view('mvp-development', 'en.services.mvp-development')
        ->name('services.mvp-development');

    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/posts/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/tagged/{slug}', [BlogTagsController::class, 'show'])->name('blog.tags.show');

    Route::get('careers', [JobsController::class, 'index'])->name('jobs');
    Route::get('careers/{slug}', [JobsController::class, 'show'])->name('jobs.show');
    Route::post('careers', [JobsController::class, 'send'])->name('jobs.send');

    Route::get('contact', [ContactController::class, 'show'])->name('contact');
    Route::post('contact', [ContactController::class, 'send'])->name('contact.send');

    Route::get('projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('projects/{slug}', [ProjectsController::class, 'show'])->name('projects.show');

    Route::view('solutions', 'en.solutions.index')
        ->name('solutions');
    Route::view('solutions/accounting', 'en.solutions.pages.accounting')
        ->name('solutions.accounting');
    Route::view('solutions/chronos-cms', 'en.solutions.pages.chronos')
        ->name('solutions.chronos');
    Route::view('solutions/communication', 'en.solutions.pages.communication')
        ->name('solutions.communication');
    Route::view('solutions/customer-relationship-management', 'en.solutions.pages.crm')
        ->name('solutions.crm');
    Route::view('solutions/document-management-system', 'en.solutions.pages.dms')
        ->name('solutions.dms');
    Route::view('solutions/ecommerce', 'en.solutions.pages.ecommerce')
        ->name('solutions.ecommerce');
    Route::view('solutions/human-resources', 'en.solutions.pages.hr')
        ->name('solutions.hr');
    Route::view('solutions/knowledge-center', 'en.solutions.pages.wiki')
        ->name('solutions.wiki');
    Route::view('solutions/mobile-apps', 'en.solutions.pages.mobile')
        ->name('solutions.mobile');
    Route::view('solutions/mvp-development', 'en.solutions.pages.mvp')
        ->name('solutions.mvp');
    Route::view('solutions/product-lifecycle-management', 'en.solutions.pages.plm')
        ->name('solutions.plm');
    Route::view('solutions/project-management', 'en.solutions.pages.projects')
        ->name('solutions.projects');
    Route::view('solutions/purchase-and-inventory', 'en.solutions.pages.purchase')
        ->name('solutions.purchase');
    Route::view('solutions/sales', 'en.solutions.pages.sales')
        ->name('solutions.sales');
    Route::view('solutions/time-tracking', 'en.solutions.pages.time-tracking')
        ->name('solutions.time-tracking');
});

/*
 * MAGYAR
 */
Route::group(['as' => 'hu.', 'namespace' => 'HU', 'prefix' => 'hu'], function (): void {
    Route::view('/', 'hu.pages.home')->name('home');
    Route::view('adatvedelmi-szabalyzat', 'hu.pages.privacy')->name('privacy');
    Route::view('cookies-szabalyzat', 'hu.pages.cookies')->name('cookies');
    Route::view('eszkoztar', 'hu.pages.tech-stack')->name('tech-stack');
    Route::view('felhasznalasi-feltetelek', 'hu.pages.terms')->name('terms');
    Route::view('hamarosan', 'hu.pages.coming-soon')->name('coming-soon');
    Route::view('rolunk', 'hu.pages.about')->name('about');

    Route::view('digitalis-transzformacio', 'hu.services.digital-transformation')
        ->name('services.digital-transformation');
    Route::view('egyedi-szoftverfejlesztes', 'hu.services.custom-development')
        ->name('services.custom-development');
    Route::view('mvp-fejlesztes', 'hu.services.mvp-development')
        ->name('services.mvp-development');

    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/cikkek/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/cimkek/{slug}', [BlogTagsController::class, 'show'])->name('blog.tags.show');

    Route::get('kapcsolat', [ContactController::class, 'show'])->name('contact');
    Route::post('kapcsolat', [ContactController::class, 'send'])->name('contact.send');

    Route::get('projektek', [ProjectsController::class, 'index'])->name('projects');
    Route::get('projektek/{slug}', [ProjectsController::class, 'show'])->name('projects.show');

    Route::view('megoldasaink', 'hu.solutions.index')
        ->name('solutions');
    Route::view('megoldasaink/beszerzes-es-leltarozas', 'hu.solutions.pages.purchase')
        ->name('solutions.purchase');
    Route::view('megoldasaink/chronos-cms', 'hu.solutions.pages.chronos')
        ->name('solutions.chronos');
    Route::view('megoldasaink/dokumentumkezeles', 'hu.solutions.pages.dms')
        ->name('solutions.dms');
    Route::view('megoldasaink/ertekesites', 'hu.solutions.pages.sales')
        ->name('solutions.sales');
    Route::view('megoldasaink/human-eroforrasok', 'hu.solutions.pages.hr')
        ->name('solutions.hr');
    Route::view('megoldasaink/idokovetes', 'hu.solutions.pages.time-tracking')
        ->name('solutions.time-tracking');
    Route::view('megoldasaink/kommunikacio', 'hu.solutions.pages.communication')
        ->name('solutions.communication');
    Route::view('megoldasaink/mobilapplikaciok', 'hu.solutions.pages.mobile')
        ->name('solutions.mobile');
    Route::view('megoldasaink/mvp-fejlesztes', 'hu.solutions.pages.mvp')
        ->name('solutions.mvp');
    Route::view('megoldasaink/projektmenedzsment', 'hu.solutions.pages.projects')
        ->name('solutions.projects');
    Route::view('megoldasaink/szamvitel', 'hu.solutions.pages.accounting')
        ->name('solutions.accounting');
    Route::view('megoldasaink/termekeletciklus-kezeles', 'hu.solutions.pages.plm')
        ->name('solutions.plm');
    Route::view('megoldasaink/tudastar', 'hu.solutions.pages.wiki')
        ->name('solutions.wiki');
    Route::view('megoldasaink/ugyfelkapcsolat-kezeles', 'hu.solutions.pages.crm')
        ->name('solutions.crm');
    Route::view('megoldasaink/webaruhaz', 'hu.solutions.pages.ecommerce')
        ->name('solutions.ecommerce');
});
