<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('news', static function ($routes) {
    $routes->get('/', 'News::index');
    $routes->get('new', 'News::new');
    $routes->post('/', 'News::create');
    $routes->get('edit/(:segment)', 'News::edit/$1');
    $routes->put('(:segment)', 'News::update/$1');
    $routes->get('(:segment)', 'News::show/$1');
    $routes->delete('(:segment)', 'News::delete/$1');
});

$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);