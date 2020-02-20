<?php



Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('transactions', 'TransactionController@index');

Route::get('paymentswait',   'PaymentsController@paymentswait');

Route::get('paymentsfinish', 'PaymentsController@paymentsfinish');

Route::get('paymentswork', 'PaymentsController@paymentswork');



Route::get('conciliacao', function() {
    return view('/conciliacao');
})->name('conciliacao')->middleware('auth');

Route::post('uploadxml', 'ConciliacaoController@index');