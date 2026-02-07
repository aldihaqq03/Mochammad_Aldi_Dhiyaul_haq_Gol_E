<?php

use Illuminate\Support\Facades\Route;
//calculator untuk menghidung one reps max untuk dips//
Route::get('/', function () {
 
    $weight = request('weight', '');
    $reps = request('reps', '');
    $bodyweight = request('bodyweight', '');
    $hasilORM = null;
    //rumus eplay untuk menghitung one reps max//
    if ($weight && $reps && $bodyweight) {
        $totalBeban = $bodyweight + $weight;
        $hasilORM = $totalBeban * (1 + (0.0333 * $reps));
        $hasilORM = $hasilORM-$bodyweight;
    }
    return view('oneRepsMax', [
        'bodyweight' => $bodyweight,
        'weight' => $weight,
        'reps' => $reps,
        'hasilORM'=> $hasilORM
    ]);

});
