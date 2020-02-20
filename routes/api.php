<?php


Auth::routes();

Route::post('notifications', 'API\ApiPagSeguroController@request');


