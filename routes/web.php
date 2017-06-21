<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Routing\Router;
use App\Http\Controllers\{
    UserArea
};

/**
 * @var Router $router
 */

$router->group(['prefix' => 'user'], function (Router $router) {
    $router->get('content', UserArea\ContentsController::class . '@index')->name('user-area.user.content.index');
    $router->get('content/{id}', UserArea\ContentsController::class . '@show')->name('user-area.user.content.show');
});