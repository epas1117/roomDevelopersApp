<?php

Route::get('/', 'FrontController@index');
Route::get('admin', 'FrontController@admin');
//Rutas Usuarios
Route::resource('usuario', 'UsuarioController');

//Rutas Categorias
Route::resource('categoria', 'CategoriaController');

//Rutas Tutoriales
Route::get('tutorial/filterTitulo', ['as' => 'tutorial.filterTitulo', 'uses' => 'TutorialController@filterTitulo']);
Route::get('tutorial/filterCateg/{categoria_id}', ['as' => 'tutorial.filterCateg', 'uses' => 'TutorialController@filterCategoria']);
Route::resource('tutorial', 'TutorialController');
//Route::get('tutorial/filterCateg/{categoria_id}', 'TutorialController@filterCategoria'); --> Otra forma de crear la ruta

//Rutas Secciones
Route::resource('seccion', 'SeccionController');

//Rutas Videos
