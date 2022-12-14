<?php


use Cyberbrains\LaravelPaymentPayme\Http\Controller\PaycomController;

Route::group([
    'middleware' => 'web',
    'prefix' => 'paycom',
    'as' => 'paycom.',
    'namespace' => 'Cyberbrains\LaravelPaymentPayme\Http\Controller'
], function () {
    Route::post('pay', [PaycomController::class, 'index'])->name('pay');
});
