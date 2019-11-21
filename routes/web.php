<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('order/{id}', [
    'uses' => 'OrderController@show',
    'as' => 'order.show',
]);
