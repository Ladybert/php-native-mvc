<?php

// Routes
$routes = [];

$routes['/home'] = 'HomeController@index';
$routes['/about'] = 'AboutController@index';
$routes['/about/page'] = 'AboutController@page';

$routes['/magang/index'] = 'MagangController@index';
$routes['/magang/detail/{id}'] = 'MagangController@detail';
$routes['/magang/save'] = 'MagangController@save';
$routes['/magang/edit/{id}'] = 'MagangController@edit';
$routes['/magang/update'] = 'MagangController@update';
$routes['/magang/delete/{id}'] = 'MagangController@delete';

// Routes for Kelas
$routes['/kelas'] = 'KelasController@index';
$routes['/kelas/add'] = 'KelasController@add';
$routes['/kelas/save'] = 'KelasController@save';
$routes['/kelas/detail/{id}'] = 'KelasController@detail';
$routes['/kelas/edit/{id}'] = 'KelasController@edit';
$routes['/kelas/update'] = 'KelasController@update';
$routes['/kelas/delete/{id}'] = 'KelasController@delete';

//Routes for DTP 
$routes['/dtp'] = 'DtpController@index';
$routes['/dtp/add'] = 'DtpController@add';
$routes['/dtp/save'] = 'DtpController@save';
$routes['/dtp/detail/{id}'] = 'DtpController@detail';
$routes['/dtp/edit/{id}'] = 'DtpController@edit';
$routes['/dtp/update'] = 'DtpController@update';
$routes['/dtp/delete/{id}'] = 'DtpController@delete';