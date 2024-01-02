<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// CMS
$routes->get('cms/login',       'Login::index');
$routes->get('cms/register',    'Register::index');
$routes->get('cms/chartjs',     'Chartjs::index');
$routes->get('cms/dashboard',   'Dashboard::index');

// CMS HOMEPAGE
$routes->get('cms/homepage',                           'Homepage::index');
$routes->get('cms/homepage/upload',                    'Homepage::upload');
$routes->post('cms/homepage/update/(:num)',            'Homepage::update/$1');
$routes->post('cms/homepage/upload/save',              'Homepage::save');
$routes->post('cms/homepage/update/save',              'Homepage::save');
$routes->post('cms/homepage/delete/(:num)',            'Homepage::delete/$1');
$routes->post('cms/homepage/update_status/(:num)',     'Homepage::update_status/$1');

// CMS ABOUT
$routes->get('cms/about',                          'About::index');
$routes->get('cms/about/upload',                   'About::upload');
$routes->post('cms/about/update/(:num)',           'About::update/$1');
$routes->post('cms/about/upload/save',             'About::save');
$routes->post('cms/about/update/save',             'About::save');
$routes->post('cms/about/delete/(:num)',           'About::delete/$1');
$routes->post('cms/about/update_status/(:num)',    'About::update_status/$1');

// CMS CTA
$routes->get('cms/cta',             'CTA::index');
$routes->post('cms/cta/save',       'CTA::save');

// CMS ACARA       
$routes->get('cms/acara',                          'Acara::index');
$routes->get('cms/acara/upload',                   'Acara::upload');
$routes->post('cms/acara/upload/save',             'Acara::save');
$routes->post('cms/acara/update/(:num)',           'Acara::update/$1');
$routes->post('cms/acara/update/save',             'Acara::save');
$routes->post('cms/acara/delete/(:num)',           'Acara::delete/$1');
$routes->post('cms/acara/update_status/(:num)',    'Acara::update_status/$1');


// CMS USERLIST
$routes->get('cms/userlist/',           'Userlist::index');
$routes->get('cms/userlist/(:num)',     'Userlist::detail/$1');
$routes->post('cms/userlist/(:num)',    'Userlist::delete/$1');

// CMS CONTACT
$routes->get('cms/contact',                     'Contact::index');
$routes->post('cms/contact/update/save',        'Contact::save');
$routes->post('cms/contact/save2',              'Contact::save2');
$routes->post('cms/contact/delete/(:num)',      'Contact::delete/$1');

// CMS LEASING
$routes->get('cms/leasing',                 'Leasing::index');
$routes->post('cms/leasing/delete/(:num)',  'Leasing::delete/$1');

// CMS NEWS 
$routes->get('cms/news',                 'News::index');
$routes->post('cms/news/delete/(:num)',  'News::delete/$1');

// WEB
$routes->get('/',                   'Home::index');
$routes->get('cta/click/(:num)',    'CTA::click/$1');
$routes->get('/acara',              'Home::acara');
$routes->get('/acara/(:any)',       'Home::detail/$1');
$routes->get('/contact',            'Home::contact');
$routes->post('contact/save',       'Contact::save');
$routes->post('news/save',          'News::save');
$routes->get('/about',              'Home::about');
$routes->get('/leasing',            'Home::leasing');
$routes->post('leasing/save',       'Leasing::save');