<?php

use Illuminate\Support\Facades\Route;
//calculator untuk menghidung one reps max untuk dips//
Route::get('/', function () {
    return view('welcome');
    $weight = request('weight', '');
    $reps = request('reps', '');
    $bodyweight = request('bodyweight', '');
    $hasilORM = null;
});
