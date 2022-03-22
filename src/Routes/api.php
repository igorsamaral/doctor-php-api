<?php

use App\Http\Controllers\Api\DoctorController;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::group(['prefix' => '/api'], function() {
    Route::resource('/doctors', DoctorController::class);
});
