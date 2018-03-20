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

Route::get('/', function () { return view('index'); });
Route::get('url_homepage', function(){return view('index');});
Route::get('url_editplaylist', function(){return view('edit-playlist');});
Route::get('url_createplaylist', function(){return view('create-playlist');});
Route::get('url_projectlist', function(){return view('project-list');});
Route::get('url_logooverlay', function(){return view('logo-overlay');});
Route::get('url_playlistmsg', function(){return view('playlist-messages');});