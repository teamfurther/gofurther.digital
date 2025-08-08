<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogTagsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FreebiesController;
use App\Http\Controllers\GenerateCoverImageController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PrivateContentController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): void {
    // this is empty, as lang middleware will take care of redirection
});

Route::get('/cover/generate', [GenerateCoverImageController::class, 'generate'])->name('generate-cover');

/*
 * ENGLISH
 */
Route::group(['as' => 'en.', 'namespace' => 'EN', 'prefix' => 'en'], function (): void {
    Route::view('/', 'en.pages.home')->name('home');
    Route::view('coming-soon', 'en.pages.coming-soon')->name('coming-soon');
    Route::view('cookies-policy', 'en.pages.cookies')->name('cookies');
    Route::view('privacy-policy', 'en.pages.privacy')->name('privacy');
    Route::view('terms-of-use', 'en.pages.terms')->name('terms');

    Route::view('about', 'en.about.index')->name('about');
    Route::view('about/remote-culture', 'en.about.remote-culture')->name('about.remote-culture');
    Route::view('about/outsourcing', 'en.about.outsourcing')->name('about.outsourcing');

    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/posts/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/tagged/{slug}', [BlogTagsController::class, 'show'])->name('blog.tags.show');

    Route::get('contact', [ContactController::class, 'show'])->name('contact');
    Route::post('contact', [ContactController::class, 'send'])->name('contact.send');

    Route::get('careers', [JobsController::class, 'index'])->name('jobs');
    Route::get('careers/{slug}', [JobsController::class, 'show'])->name('jobs.show');
    Route::post('careers', [JobsController::class, 'send'])->name('jobs.send');

    Route::view('lean-validation-cheat-sheet', 'en.freebies.lean-validation-cheat-sheet', [
        'freebie' => 'lean-validation-cheat-sheet-en.pdf'
    ])->name('freebies.lean-validation-cheat-sheet');
    Route::view('mvp-pocket-guide', 'en.freebies.mvp-guide', [
        'freebie' => 'mvp-guide-en.pdf'
    ])->name('freebies.mvp-guide');
    Route::view('design-sprint-101', 'en.freebies.design-sprint-101', [
        'freebie' => 'design-sprint-101.pdf'
    ])->name('freebies.design-sprint-101');
    Route::get('freebies', [FreebiesController::class, 'download'])->name('freebies.download');
    Route::post('freebies', [FreebiesController::class, 'get'])->name('freebies.get');

    Route::get('newsletter', [NewsletterController::class, 'index'])->name('newsletter');
    Route::get('newsletter/{year}/{issue}', [NewsletterController::class, 'show'])->name('newsletter.show');
    Route::post('newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
    Route::view('newsletter/why', 'en.newsletter.why')->name('newsletter.why');

    Route::get('private-content', [PrivateContentController::class, 'show'])->name('private-content');
    Route::post('private-content', [PrivateContentController::class, 'verify'])->name('private-content.verify');

    Route::get('projects', [ProjectsController::class, 'index'])->name('projects');
    Route::get('projects/{slug}', [ProjectsController::class, 'show'])->name('projects.show');

    Route::view('services', 'en.services.index')->name('services');
    Route::view('services/design-sprint', 'en.services.design-sprint')
        ->name('services.design-sprint');
    Route::view('services/discovery-workshop', 'en.services.discovery-workshop')
        ->name('services.discovery-workshop');
    Route::view('services/ecommerce-development', 'en.services.ecommerce')
        ->name('services.ecommerce');
    Route::view('services/mobile-app-development', 'en.services.mobile-apps')
        ->name('services.mobile-apps');
    Route::view('services/no-code-and-low-code-development', 'en.services.no-code-low-code')
        ->name('services.no-code-low-code');
    Route::view('services/saas-product-development', 'en.services.saas')
        ->name('services.saas');
    Route::view('services/unlimited-ui-design-subscription', 'en.services.ui-design')
        ->name('services.ui-design');
    Route::view('services/ux-audit', 'en.services.ux-audit')
        ->name('services.ux-audit');
    Route::view('services/web-development', 'en.services.web-development')
        ->name('services.web-development');

    Route::get('9-out-of-10-products-fail-heres-how-to-ensure-yours-doesnt', [
        WebinarController::class, 'show'
    ])->name('webinars.validation');
    Route::post('webinar', [WebinarController::class, 'register'])->name('webinar.register');
});

/*
 * MAGYAR
 */
Route::group(['as' => 'hu.', 'namespace' => 'HU', 'prefix' => 'hu'], function (): void {
    Route::view('/', 'hu.pages.home')->name('home');
    Route::view('adatvedelmi-szabalyzat', 'hu.pages.privacy')->name('privacy');
    Route::view('cookies-szabalyzat', 'hu.pages.cookies')->name('cookies');
    Route::view('felhasznalasi-feltetelek', 'hu.pages.terms')->name('terms');
    Route::view('hamarosan', 'hu.pages.coming-soon')->name('coming-soon');

    Route::view('rolunk', 'hu.about.index')->name('about');
    Route::view('rolunk/remote-kultura', 'hu.about.remote-culture')->name('about.remote-culture');

    Route::get('blog', [BlogController::class, 'index'])->name('blog');
    Route::get('blog/cikkek/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/cimkek/{slug}', [BlogTagsController::class, 'show'])->name('blog.tags.show');

    Route::get('kapcsolat', [ContactController::class, 'show'])->name('contact');
    Route::post('kapcsolat', [ContactController::class, 'send'])->name('contact.send');

    Route::view('a-lean-validacio-lepesei', 'hu.freebies.a-lean-validacio-lepesei', ['freebie' => 'lean-validation-cheat-sheet-hu.pdf'])
        ->name('freebies.lean-validation-cheat-sheet');
    Route::view('mvp-zsebkalauz', 'hu.freebies.mvp-zsebkalauz', ['freebie' => 'mvp-guide-hu.pdf'])
        ->name('freebies.mvp-guide');
    Route::get('ingyenes-anyagok', [FreebiesController::class, 'download'])->name('freebies.download');
    Route::post('ingyenes-anyagok', [FreebiesController::class, 'get'])->name('freebies.get');

    Route::get('hirlevel', [NewsletterController::class, 'index'])->name('newsletter');
    Route::get('hirlevel/{year}/{issue}', [NewsletterController::class, 'show'])->name('newsletter.show');
    Route::post('hirlevel', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
    Route::view('hirlevel/miert', 'hu.newsletter.why')->name('newsletter.why');

    Route::get('zart-tartalom', [PrivateContentController::class, 'show'])->name('private-content');
    Route::post('zart-tartalom', [PrivateContentController::class, 'verify'])->name('private-content.verify');

    Route::get('projektek', [ProjectsController::class, 'index'])->name('projects');
    Route::get('projektek/{slug}', [ProjectsController::class, 'show'])->name('projects.show');

    Route::view('szolgaltatasok', 'hu.services.index')->name('services');
    Route::view('szolgaltatasok/applikacio-fejlesztes', 'hu.services.mobile-apps')
        ->name('services.mobile-apps');
    Route::view('szolgaltatasok/design-sprint', 'hu.services.design-sprint')
        ->name('services.design-sprint');
    Route::view('szolgaltatasok/discovery-workshop', 'hu.services.discovery-workshop')
        ->name('services.discovery-workshop');
    Route::view('szolgaltatasok/no-code-es-low-code-fejlesztes', 'hu.services.no-code-low-code')
        ->name('services.no-code-low-code');
    Route::view('szolgaltatasok/saas-termek-fejlesztes', 'hu.services.saas')
        ->name('services.saas');
    Route::view('szolgaltatasok/ui-design-elofizetes', 'hu.services.ui-design')
        ->name('services.ui-design');
    Route::view('szolgaltatasok/ux-audit', 'hu.services.ux-audit')
        ->name('services.ux-audit');
    Route::view('szolgaltatasok/webfejlesztes', 'hu.services.web-development')
        ->name('services.web-development');
    Route::view('szolgaltatasok/webshop-fejlesztes', 'hu.services.ecommerce')
        ->name('services.ecommerce');
});
