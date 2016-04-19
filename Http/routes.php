<?php

use NoahBuscher\Macaw\Macaw as Route;

Route::get('', '\App\Http\Controllers\HomeController@index');

// hello world Route demo
Route::get('/hello-world', function(){
    echo 'Hello World!';
});

Route::dispatch();