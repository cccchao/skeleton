<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix'        => 'admin',
    'namespace'     => 'Cccchao\\Admin\\Controllers',
    'as'            => 'admin.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

});
