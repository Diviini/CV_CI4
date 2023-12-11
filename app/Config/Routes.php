<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/'        , 'Home::index'         );
$routes->get ('/projets', 'ProjetList::index'   );
$routes->get ('/moi'    , 'Moi::index'          );
$routes->get ('/exp-pro', 'Experience::index'  );

$routes->get ('/contact' , 'Contact::index'  );
$routes->post('/Contact/contactMail', 'Contact::contactMail');

$routes->get('/projets/(:num)' , 'Projet::index/$1');
