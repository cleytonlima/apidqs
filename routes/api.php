<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks","DqsController@index");
Route::post("tasks","DqsController@store");
Route::patch("tasks/{membro}","DqsController@update");
Route::delete("tasks/{membro}","DqsController@destroy");