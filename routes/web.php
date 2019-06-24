<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['lang', 'web']], function () {

    Route::get('/', function () {
        // this is empty, as lang middleware will take care of redirection
    });

    /*
     * ENGLISH
     */
    Route::group(['as' => 'en.', 'namespace' => 'EN', 'prefix' => 'en'], function () {
        Route::get('/', ['uses' => 'PagesController@index', 'as' => 'home']);

        Route::get('about', ['uses' => 'PagesController@about', 'as' => 'about']);
        Route::get('coming-soon', ['uses' => 'PagesController@comingSoon', 'as' => 'coming-soon']);
        Route::get('cookies-policy', ['uses' => 'PagesController@cookies', 'as' => 'cookies']);
        Route::get('custom-software-development', ['uses' => 'PagesController@customDevelopment', 'as' => 'custom-development']);
        Route::get('privacy-policy', ['uses' => 'PagesController@privacy', 'as' => 'privacy']);
        Route::get('terms-of-use', ['uses' => 'PagesController@terms', 'as' => 'terms']);
        Route::get('tech-stack', ['uses' => 'PagesController@techStack', 'as' => 'tech-stack']);

        Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog']);
        Route::get('blog/posts/{slug}', ['uses' => 'BlogController@view', 'as' => 'blog.view']);

        Route::get('careers', ['uses' => 'JobsController@index', 'as' => 'jobs']);
        Route::get('careers/{slug}', ['uses' => 'JobsController@view', 'as' => 'jobs.view']);
        Route::post('careers', ['uses' => 'JobsController@send', 'as' => 'jobs.send']);

        Route::post('contact', ['uses' => 'PagesController@contact', 'as' => 'contact.send']);

        Route::get('projects', ['uses' => 'ProjectsController@index', 'as' => 'projects']);
        Route::get('projects/{slug}', ['uses' => 'ProjectsController@view', 'as' => 'projects.view']);

        Route::get('solutions', ['uses' => 'SolutionsController@index', 'as' => 'solutions']);
        Route::get('solutions/accounting', ['uses' => 'SolutionsController@accounting', 'as' => 'solutions.accounting']);
        Route::get('solutions/chronos-cms', ['uses' => 'SolutionsController@chronos', 'as' => 'solutions.chronos']);
        Route::get('solutions/communication', ['uses' => 'SolutionsController@communication', 'as' => 'solutions.communication']);
        Route::get('solutions/customer-relationship-management', ['uses' => 'SolutionsController@crm', 'as' => 'solutions.crm']);
        Route::get('solutions/document-management-system', ['uses' => 'SolutionsController@dms', 'as' => 'solutions.dms']);
        Route::get('solutions/ecommerce', ['uses' => 'SolutionsController@ecommerce', 'as' => 'solutions.ecommerce']);
        Route::get('solutions/human-resources', ['uses' => 'SolutionsController@hr', 'as' => 'solutions.hr']);
        Route::get('solutions/knowledge-center', ['uses' => 'SolutionsController@wiki', 'as' => 'solutions.wiki']);
        Route::get('solutions/mobile-apps', ['uses' => 'SolutionsController@mobile', 'as' => 'solutions.mobile']);
        Route::get('solutions/mvp-development', ['uses' => 'SolutionsController@mvp', 'as' => 'solutions.mvp']);
        Route::get('solutions/product-lifecycle-management', ['uses' => 'SolutionsController@plm', 'as' => 'solutions.plm']);
        Route::get('solutions/project-management', ['uses' => 'SolutionsController@projects', 'as' => 'solutions.projects']);
        Route::get('solutions/purchase-and-inventory', ['uses' => 'SolutionsController@purchase', 'as' => 'solutions.purchase']);
        Route::get('solutions/sales', ['uses' => 'SolutionsController@sales', 'as' => 'solutions.sales']);
        Route::get('solutions/time-tracking', ['uses' => 'SolutionsController@timeTracking', 'as' => 'solutions.time-tracking']);
    });

    /*
     * MAGYAR
     */
    Route::group(['as' => 'hu.', 'namespace' => 'HU', 'prefix' => 'hu'], function () {
        Route::get('/', ['uses' => 'PagesController@index', 'as' => 'home']);

        Route::get('adatvedelmi-szabalyzat', ['uses' => 'PagesController@privacy', 'as' => 'privacy']);
        Route::get('cookie-szabalyzat', ['uses' => 'PagesController@cookies', 'as' => 'cookies']);
        Route::get('egyedi-szoftverfejlesztes', ['uses' => 'PagesController@customDevelopment', 'as' => 'custom-development']);
        Route::get('eszkoztar', ['uses' => 'PagesController@techStack', 'as' => 'tech-stack']);
        Route::get('felhasznalasi-feltetelek', ['uses' => 'PagesController@terms', 'as' => 'terms']);
        Route::get('hamarosan', ['uses' => 'PagesController@comingSoon', 'as' => 'coming-soon']);
        Route::get('rolunk', ['uses' => 'PagesController@about', 'as' => 'about']);

        Route::get('blog', ['uses' => 'BlogController@index', 'as' => 'blog']);
        Route::get('blog/cikkek/{slug}', ['uses' => 'BlogController@view', 'as' => 'blog.view']);

        Route::post('kapcsolat', ['uses' => 'PagesController@contact', 'as' => 'contact.send']);

        Route::get('projektek', ['uses' => 'ProjectsController@index', 'as' => 'projects']);
        Route::get('projektek/{slug}', ['uses' => 'ProjectsController@view', 'as' => 'projects.view']);

        Route::get('megoldasaink', ['uses' => 'SolutionsController@index', 'as' => 'solutions']);
        Route::get('megoldasaink/beszerzes-es-leltarozas', ['uses' => 'SolutionsController@purchase', 'as' => 'solutions.purchase']);
        Route::get('megoldasaink/chronos-cms', ['uses' => 'SolutionsController@chronos', 'as' => 'solutions.chronos']);
        Route::get('megoldasaink/dokumentumkezeles', ['uses' => 'SolutionsController@dms', 'as' => 'solutions.dms']);
        Route::get('megoldasaink/ertekesites', ['uses' => 'SolutionsController@sales', 'as' => 'solutions.sales']);
        Route::get('megoldasaink/human-eroforrasok', ['uses' => 'SolutionsController@hr', 'as' => 'solutions.hr']);
        Route::get('megoldasaink/idokovetes', ['uses' => 'SolutionsController@timeTracking', 'as' => 'solutions.time-tracking']);
        Route::get('megoldasaink/kommunikacio', ['uses' => 'SolutionsController@communication', 'as' => 'solutions.communication']);
        Route::get('megoldasaink/mobilapplikaciok', ['uses' => 'SolutionsController@mobile', 'as' => 'solutions.mobile']);
        Route::get('megoldasaink/mvp-fejlesztes', ['uses' => 'SolutionsController@mvp', 'as' => 'solutions.mvp']);
        Route::get('megoldasaink/projektmenedzsment', ['uses' => 'SolutionsController@projects', 'as' => 'solutions.projects']);
        Route::get('megoldasaink/szamvitel', ['uses' => 'SolutionsController@accounting', 'as' => 'solutions.accounting']);
        Route::get('megoldasaink/termekeletciklus-kezeles', ['uses' => 'SolutionsController@plm', 'as' => 'solutions.plm']);
        Route::get('megoldasaink/tudastar', ['uses' => 'SolutionsController@wiki', 'as' => 'solutions.wiki']);
        Route::get('megoldasaink/ugyfelkapcsolat-kezeles', ['uses' => 'SolutionsController@crm', 'as' => 'solutions.crm']);
        Route::get('megoldasaink/webaruhaz', ['uses' => 'SolutionsController@ecommerce', 'as' => 'solutions.ecommerce']);
    });

    /*
     * REDIRECTS
     */
    Route::get('testreszabott-vallalatiranyitasi-rendszerek', function () {
        return Redirect::to('/', 302);
    });
});
