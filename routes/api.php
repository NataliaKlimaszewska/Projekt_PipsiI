<?php
use App\Http\Controllers\Api\ConverterController;

Route::prefix('converter')->group(function () {

    Route::post('/mass', [ConverterController::class, 'convertMass']);


    Route::post('/volume-to-weight', [ConverterController::class, 'volumeToWeight']);


    Route::get('/options', [ConverterController::class, 'conversionOptions']);
});
