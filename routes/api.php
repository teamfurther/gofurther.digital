<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:api'], 'name' => 'api.'], function (): void {
    //
});
