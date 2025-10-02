<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signUp', 'Users::signUp');
$routes->get('/moodBoard', 'Users::moodBoard');
$routes->get('/roadMap', 'Users::roadMap');
