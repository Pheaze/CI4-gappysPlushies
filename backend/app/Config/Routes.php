<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users/index');
$routes->get('/', 'Users/login');
$routes->get('/', 'Users/signUp');
$routes->get('/', 'Users/moodBoard');
$routes->get('/', 'Users/roadMap');
