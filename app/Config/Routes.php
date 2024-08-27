<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//DASHBOARD/HOMEPAGE
$routes->setDefaultController('Home');
$routes->get('/', 'Home::index');
$routes->get('/Berita', 'News::index');
$routes->get('/Berita/(:segment)', 'News::show/$1');
$routes->get('/Berita/(:segment)/Tag', 'News::tag/$1'); 
$routes->get('Berita/(:segment)/preview', 'News::preview/$1');
$routes->get('/Artikel', 'Article::index');
$routes->get('/Artikel/(:segment)', 'Article::show/$1');
$routes->get('/Artikel/(:segment)/Tag', 'Article::tag/$1'); 
$routes->get('Artikel/(:segment)/preview', 'Article::preview/$1');
$routes->get('/Ebook', 'Ebook::index');
$routes->get('/Naskah/Digital', 'Digital::index');
$routes->get('/Naskah/Digital/(:segment)', 'Digital::show/$1');
$routes->get('/Kamus/Jawi', 'Jawi::index');
$routes->get('/Kamus/Jawi/(:segment)', 'Jawi::show');
$routes->get('/Kamus/AksaraUlu', 'Aksaraulu::index');
$routes->get('/Kamus/AksaraUlu/(:segment)', 'AksaraUlu::show');
$routes->get('/Penelitian', 'Peneliti::index');
$routes->get('/Gallery/Video', 'Video::index');
$routes->get('/Gallery/Foto', 'Foto::index');
$routes->get('/Live', 'Live::index');
$routes->get('/Hubungi Kami', 'Contact::index');

$routes->get('/Files/(:segment)', 'Fileshow::index/$1');
$routes->get('/Files/generate/(:segment)', 'Fileshow::generate/$1');

//ADMIN PAGE
$routes->get('/admin', 'Dashboard::index', ['filter' => 'authFilter']);
$routes->get('/admin/register', 'Register::index', ['filter' => 'guestFilter']);
$routes->post('/admin/register', 'Register::register', ['filter' => 'guestFilter']);
$routes->get('/admin/login', 'Login::index', ['filter' => 'guestFilter']);
$routes->post('/admin/login', 'Login::authenticate', ['filter' => 'guestFilter']);
$routes->get('/admin/logout', 'Login::logout', ['filter' => 'authFilter']);

$routes->setAutoRoute(false);