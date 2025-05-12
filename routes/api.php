<?php
use App\Http\Controllers\Api\ConverterController;

Route::prefix('converter')->group(function () {
    // Mass conversion between units
    Route::post('/mass', [ConverterController::class, 'convertMass']);

    // Volume to weight conversion
    Route::post('/volume-to-weight', [ConverterController::class, 'volumeToWeight']);

    // Get conversion options
    Route::get('/options', [ConverterController::class, 'conversionOptions']);
});
