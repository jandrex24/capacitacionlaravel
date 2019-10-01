<?php

//rutas resource va a tener 
Route::resource('categories','Catalogs\CategoryController');
Route::resource('registers','Maintainer\ManteinerController');
Route::resource('articles','Catalogs\ArticleController');