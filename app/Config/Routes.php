<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->setAutoRoute(false);

//HOMEPAGE
$routes->get('/', 'Home::index');

//Hanya Untuk User dan Admin [harus login]
$routes->get('/mahasiswa', 'Dashboard::index', ['filter' => 'role:admin, user']); //User View
$routes->get('/User', 'Dashboard::index', ['filter' => 'role:admin, user']); //User View
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']); //Dashboard Admin View
$routes->get('/Admin', 'Admin::index', ['filter' => 'role:admin']); //Dashboard Admin View

// UNTUK INPUT DATA POINT
$routes->get('/mahasiswa/data-minus', 'Dashboard::dataMinus', ['filter' => 'role:user, admin']); //Dataminus point
$routes->post('/mahasiswa/data-minus', 'Dashboard::saveData');
$routes->get('/mahasiswa/input-data', 'Dashboard::inputData', ['filter' => 'role:user, admin']); //Dataplus Point
$routes->post('/mahasiswa/input-data', 'Dashboard::saveData');

//tampilkan point
$routes->get('/User/(:segment)', 'Dashboard::poin/$1', ['filter' => 'role:user, admin']);

//kategori pelanggaran
//$routes->get('/admin/kategori', 'Admin::kategori', ['filter' => 'role:admin']);

//HANYA UNTUK USER
$routes->get('/mahasiswa/profilku', 'Dashboard::profil', ['filter' => 'role:user']);

//Fungsi Hapus data
$routes->get('/data/delete/(:num)', 'Dashboard::delete/$1');

//Fungsi Edit Point
$routes->get('/data/edit/(:num)', 'Dashboard::edit/$1');
$routes->post('/data/update', 'Dashboard::update');

//Hanya Untuk Admin fungsi Konfirmasi
$routes->get('/data/setuju/(:segment)', 'Admin::setuju/$1', ['filter' => 'role:admin']); //Dataplus Point
$routes->get('/data/tolak/(:segment)', 'Admin::tolak/$1', ['filter' => 'role:admin']);
$routes->get('/data/konfirmasi/(:segment)', 'Admin::konfirmasi/$1', ['filter' => 'role:admin']);

//Tanggal
// $routes->get('sales', 'SalesController::index');
