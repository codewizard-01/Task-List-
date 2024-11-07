<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("index", [
        "name"=>"Esmatullah",
    ]);
});

Route::get("/{variable}", function ($variable) {
    return view("index", [
        "name"=>$variable,
    ]);
});

Route::get("/hello", function() {
    return "Hello from here!";
});

Route::get("/hello/{name}", function($name) {
    return "Greetings to my best friend ". $name . "!";
}); 

Route::fallback(function() {
    return "Hey don't worry! I got you.";
});

Route::get("/{work}", function($url) {
    return "your site is ". $url;
});