<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Crud::home');
$routes->get('/Crud', 'Crud::home');
$routes->get('/Crud/home', 'Crud::home');
$routes->get('/Crud/about', 'Crud::about');
$routes->get('/Crud/data', 'Crud::data');
//penambahan pencarian
$routes->post('/Crud/data', 'Crud::data');
$routes->get('/Crud/contac', 'Crud::contac');
//proses crud ada di routes ini
$routes->get('/Crud/register', 'Crud::login');
//insert data
$routes->post('/Crud/save', 'Crud::save');
//hapus data
$routes->get('/hapus(:num)', 'Crud::hapus/$1');
//edit data
$routes->get('/ubah(:num)', 'Crud::edit/$1');
//update data
$routes->post('/Crud/update/(:num)', 'Crud::update/$1');
// multipel tabel / join
//$routes->get('/siswa', 'Home::index');


// testing join model
$routes->get('/test', 'Crud::test');
