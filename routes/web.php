<?php

use Illuminate\Support\Facades\Route;
//calculator untuk menghidung one reps max untuk dips//
Route::get('/', function () {
    return view('hitung beban one reps max dips anda cung');
    $weight = request('weight', '');
    $reps = request('reps', '');
    $bodyweight = request('bodyweight', '');
    $hasilORM = null;
    if ($weight && $reps && $bodyweight) {
        $totalBeban = $bodyweight + $weight;
        $hasilORM = $totalBeban * (1 + (0.0333 * $reps));

    }
    return view('hasil', [
        'bodyweight' => $bodyweight,
        'weight' => $weight,
        'reps' => $reps,
        'hasil one reps max' => $hasilORM
    ]);

});
