<?php

use App\Http\Controllers\WebinarController;
use Illuminate\Support\Facades\Route;

Route::group(['name' => 'api.'], function (): void {
    Route::group(['middleware' => ['auth:api']], function (): void {
        //
    });

    Route::post('webinar/confirm', [WebinarController::class, 'confirm'])->name('webinar.confirm');
});
