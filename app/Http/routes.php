<?php

Route::get('/', 'PagesController@index');

Route::get('/juridico', 'PagesController@juridico');

Route::get('/empleadas-hogar', 'PagesController@empleadas_hogar');

Route::get('/herencia', 'PagesController@herencia');

Route::get('/contacto', 'PagesController@contacto');

Route::get('/terms-and-conditions', 'PagesController@terms_and_conditions');

Route::get('/legal', 'PagesController@legal');


Route::group(['prefix' => 'empresas'], function () {
  Route::get('autonomos', 'BusinessController@autonomos');
  Route::get('sociedades', 'BusinessController@sociedades');
  Route::get('laboral', 'BusinessController@laboral');
  Route::get('otras-organizaciones', 'BusinessController@otras_organizaciones');
});

Route::group(['prefix' => 'traficos'], function () {
  Route::get('transferencia-de-vehiculos', 'TrafficsController@transferencia_de_vehiculos');
  Route::get('informe-trafico', 'TrafficsController@informe_trafico');
  Route::get('otras-gestiones', 'TrafficsController@otras_gestiones');
  Route::get('documentacion', 'TrafficsController@documentacion');
});

Route::group(['prefix' => 'tramites'], function () {
  Route::get('alquiler-ivima', 'ProceduresController@alquiler_ivima');
  Route::get('informe-trafico', 'ProceduresController@certificados');
  Route::get('creacion-web', 'ProceduresController@creacion_web');
  Route::get('creacion-marcas', 'ProceduresController@creacion_marcas');
});