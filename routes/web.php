<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     // return ["aprendible"=>".com"];
//     // return "Hola";
//     return view('welcome');
// });


//personal-site.com = welcome
//personal-site.com/contacto = contact
//personal-site.com/blog = blog
//personal-site.com/about = about

Route::view('/','welcome');
Route::view('/contacto','contact');
Route::view('/blog','blog');
Route::view('/about','about');


