<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Dashboard::index');
// app/Config/Routes.php

// // Role routes
// $routes->get('/role', 'RoleController::index');
// $routes->get('/role/create', 'RoleController::create');
// $routes->post('/role/create', 'RoleController::create');
// $routes->get('/role/edit/(:num)', 'RoleController::edit/$1');
// $routes->post('/role/edit/(:num)', 'RoleController::edit/$1');
// $routes->post('/role/delete/(:num)', 'RoleController::delete/$1');

// User routes
$routes->get('/user', 'UserController::index');
$routes->get('/user/create', 'UserController::create');
$routes->post('/user/create', 'UserController::create');
$routes->get('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/edit/(:num)', 'UserController::edit/$1');
$routes->get('/user/delete/(:num)', 'UserController::delete/$1');

//BBM Routes
$routes->get('/bbm', 'BbmController::index', ['filter' => 'role:admin']); // Menampilkan semua data bbm
$routes->get('/bbm/create', 'BbmController::create', ['filter' => 'role:admin']); // Form untuk menambah data bbm
$routes->post('/bbm/create', 'BbmController::create', ['filter' => 'role:admin']); // Menyimpan data bbm baru
$routes->get('/bbm/edit/(:num)', 'BbmController::edit/$1', ['filter' => 'role:admin']); // Form untuk mengedit data bbm
$routes->post('/bbm/update/(:num)', 'BbmController::edit/$1', ['filter' => 'role:admin']); // Menyimpan perubahan pada data bbm
$routes->get('/bbm/delete/(:num)', 'BbmController::delete/$1', ['filter' => 'role:admin']); // Konfirmasi penghapusan data bbm

//Nama Pelaksana routes
$routes->get('/nama_pelaksana', 'NamaPelaksanaController::index', ['filter' => 'role:admin']);
$routes->get('/nama_pelaksana/create', 'NamaPelaksanaController::create', ['filter' => 'role:admin']);
$routes->post('/nama_pelaksana/create', 'NamaPelaksanaController::create', ['filter' => 'role:admin']);
$routes->get('/nama_pelaksana/edit/(:num)', 'NamaPelaksanaController::edit/$1', ['filter' => 'role:admin']);
$routes->post('/nama_pelaksana/edit/(:num)', 'NamaPelaksanaController::edit/$1', ['filter' => 'role:admin']);
$routes->post('/nama_pelaksana/delete/(:num)', 'NamaPelaksanaController::delete/$1', ['filter' => 'role:admin']);

//Laporan Perdin
$routes->get('/laporan', 'LaporanPerjalananDinasController::index');
$routes->get('/laporan/create/(:num)', 'LaporanPerjalananDinasController::create/$1');
$routes->post('/laporan/create', 'LaporanPerjalananDinasController::create');
$routes->get('/laporan/edit/(:num)', 'LaporanPerjalananDinasController::edit/$1');
$routes->post('/laporan/edit/(:num)', 'LaporanPerjalananDinasController::edit/$1');

$routes->get('/laporan/editLaporan/(:num)', 'LaporanPerjalananDinasController::editLaporan/$1');
$routes->post('/laporan/editLaporan/(:num)', 'LaporanPerjalananDinasController::editLaporan/$1');

$routes->get('/laporan/konfirmasi/(:num)', 'LaporanPerjalananDinasController::konfirmasi/$1');
$routes->post('/laporan/konfirmasi/(:num)', 'LaporanPerjalananDinasController::konfirmasi/$1');
$routes->get('/laporan/delete/(:num)', 'LaporanPerjalananDinasController::delete/$1');

//Perjalanan Dinas
$routes->group('perjalanan_dinas', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'PerjalananDinasController::index');
    $routes->get('create', 'PerjalananDinasController::create');
    $routes->post('create', 'PerjalananDinasController::create');
    $routes->get('edit/(:num)', 'PerjalananDinasController::edit/$1');
    $routes->post('edit/(:num)', 'PerjalananDinasController::edit/$1');
    $routes->get('konfirmasi/(:num)', 'PerjalananDinasController::konfirmasi/$1');
    $routes->post('konfirmasi/(:num)', 'PerjalananDinasController::konfirmasi/$1');
    $routes->get('delete/(:num)', 'PerjalananDinasController::delete/$1');
});

//Bagian DPRD
$routes->group('bagian_dprd', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'BagianDPRDController::index', ['filter' => 'role:admin']);
    $routes->get('create', 'BagianDPRDController::create', ['filter' => 'role:admin']);
    $routes->post('create', 'BagianDPRDController::create', ['filter' => 'role:admin']);
    $routes->get('edit/(:num)', 'BagianDPRDController::edit/$1', ['filter' => 'role:admin']);
    $routes->post('edit/(:num)', 'BagianDPRDController::edit/$1', ['filter' => 'role:admin']);
    $routes->get('delete/(:num)', 'BagianDPRDController::delete/$1', ['filter' => 'role:admin']);
});

//Pengiriman Uang
$routes->group('pengiriman_uang', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'PengirimanUangController::index', ['filter' => 'role:admin']);
    $routes->get('create', 'PengirimanUangController::create', ['filter' => 'role:admin']);
    $routes->post('create', 'PengirimanUangController::create', ['filter' => 'role:admin']);
    $routes->get('edit/(:num)', 'PengirimanUangController::edit/$1', ['filter' => 'role:admin']);
    $routes->post('edit/(:num)', 'PengirimanUangController::edit/$1', ['filter' => 'role:admin']);
    $routes->get('delete/(:num)', 'PengirimanUangController::delete/$1', ['filter' => 'role:admin']);
    // Tambahkan rute lainnya seperti edit, delete, dll.
});

//Kas
$routes->group('kas', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'KasController::index');
});

//rincian perdin
$routes->group('rincian_perdin', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'RincianPerdinController::index');
    $routes->get('create/(:num)', 'RincianPerdinController::create/$1');
    $routes->post('create', 'RincianPerdinController::create');
    $routes->get('pdf/(:num)/(:num)', 'RincianPerdinController::pdf/$1/$2');
    $routes->get('pdfsingle/(:num)/(:num)', 'RincianPerdinController::pdfsingle/$1/$2');
});

//settings
$routes->group('settings', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('/', 'SettingsController::index');
    $routes->post('edit/(:num)', 'SettingsController::edit/$1');
});

