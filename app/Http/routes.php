<?php

use App\Http\Controllers\ExampleController;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/users', function () {
    return "list of users";
});

$app->get('/tools', function(){
	return "Github";
})

$app->get('/example', 'ExampleController@all');
$app->get('/example/{slug}', 'ExampleController@get');

