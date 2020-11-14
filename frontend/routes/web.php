<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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


$router->get('/', function () use ($router) { // wen we open front end t
	return response()->json(["Message" => 'Frontend.']); //this statment will appear
});

$router->group(['prefix' => 'buy'] , function($router){ // to do buy operation put buy then id
	$router->get('{id}','FrontendController@Bookbuy'); // go to bookbuy function on frontendcontroller
});
$router->group(['prefix' => 'lookup'] , function($router){ // to do lookup , put lookup/id 
	$router->get('{id}','FrontendController@BooksLS'); // goes to booksLs function on FrontendController
});

$router->group(['prefix' => 'search'] , function($router){ // to do search,put search/topic 
	$router->get('{topic}','FrontendController@BooksLS'); // goes to booksLs function on FrontendController
});


