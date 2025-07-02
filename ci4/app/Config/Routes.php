<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

// Route untuk menampilkan artikel berdasarkan slug di frontend (publik)
$routes->get('artikel1/(:any)', 'Artikel::view/$1');

// Grup route admin dengan filter auth
$routes->group('admin', ['filter' => 'auth'], function($routes) {
    $routes->get('artikel', 'Artikel::admin_index');
    $routes->match(['get', 'post'], 'artikel/add', 'Artikel::add');
    $routes->match(['get', 'post'], 'artikel/edit/(:any)', 'Artikel::edit/$1');
    $routes->get('artikel/delete/(:any)', 'Artikel::delete/$1');
    $routes->get('artikel/toggle_status/(:any)', 'Artikel::toggle_status/$1');
});

// Tambahan route untuk AjaxController
$routes->get('ajax', 'AjaxController::index');
$routes->get('ajax/getData', 'AjaxController::getData');
$routes->get('ajax/getArtikel/(:num)', 'AjaxController::getArtikelById/$1');  
$routes->post('ajax/create', 'AjaxController::create');
$routes->post('ajax/update/(:num)', 'AjaxController::update/$1');
$routes->delete('ajax/delete/(:num)', 'AjaxController::delete/$1');

// Resource untuk Post Controller
$routes->resource('post');