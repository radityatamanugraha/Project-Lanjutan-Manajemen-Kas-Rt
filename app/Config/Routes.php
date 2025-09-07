<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Tambahkan routing kas RT di bawah ini:
$routes->get('/kas', 'KasController::index');
$routes->get('/kas/tambah', 'KasController::tambah');
$routes->post('/kas/simpan', 'KasController::simpan');
$routes->get('/kas/edit/(:num)', 'KasController::edit/$1');
$routes->post('/kas/update/(:num)', 'KasController::update/$1');
$routes->get('/kas/hapus/(:num)', 'KasController::hapus/$1');
