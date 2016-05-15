<?php

Route::get('/', 'FrontController@index');
Route::get('admin', 'FrontController@admin');

//Rutas Usuarios
//redireccionar a la pagina perfil
Route::get('usuario/perfil', ['as' => 'usuario.perfil', 'uses' => 'UsuarioController@mostrarPerfil']);
Route::post('tutorial/log', ['as' => 'usuario.log', 'uses' => 'UsuarioController@log']);
Route::resource('usuario', 'UsuarioController');
Route::get('tutorial/logout', ['as' => 'usuario.logout', 'uses' => 'UsuarioController@logOut']);

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
Route::get('video/tutorialVideo/{tutorial_id}', ['as' => 'video.tutorialVideo', 'uses' => 'VideoController@videosPorTutorial']);
Route::resource('video', 'VideoController');
