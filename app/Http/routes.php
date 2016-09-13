<?php

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

$app->get('/', 'IndexController@getIndex');
$app->get('/hundredjumps/latest', 'IndexController@getHundredJumpsLatest');
$app->get('/hundredjumps/latest/etc2', 'IndexController@getHundredJumpsLatestETC2');
$app->get('/hundredjumps/latest/atc', 'IndexController@getHundredJumpsLatestATC');
