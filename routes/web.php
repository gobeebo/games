<?php

use Illuminate\Support\Facades\Route;
use Beebo\SocketIO\Socket;

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

Route::get('/', function () {
    return view('index');
});

Socket::route('/app/chat', \App\Sockets\Servers\Chat::class);