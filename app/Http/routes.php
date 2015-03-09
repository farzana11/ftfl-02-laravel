<?php


Route::model('portfolios', 'Portfolio');
Route::model('catagories', 'Catagories');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::bind('portfolios', function($value, $route) {
    return App\Portfolios::wheretitle($value)->first();
});
Route::bind('catagories', function($value, $route) {
    return App\Catagories::wheretitle($value)->first();
});

Route::resource('catagories', 'CatagoriesController');
Route::resource('portfolios', 'PortfoliosController');
Route::resource('catagories.portfolios', 'PortfoliosController');
Route::get('catagory', 'EditdeleteController@index');






