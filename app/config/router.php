<?php

$router = $di->getRouter();

//route maken voor alle paginas

$router->add(
    '/admin/add-article',
    [
        'controller' => 'AddArticle',
        'action'     => '',
    ]
);

$router->add(
    '/editarticle/{id}',
    [
        'controller' => 'EditArticle',
        'action'     => 'index',
    ]
);
$router->add(
    '/editarticle/save/{id}',
    [
        'controller' => 'EditArticle',
        'action'     => 'save',
    ]
);


$router->add(
    '/delete/{id}',
    [
        'controller' => 'Delete',
        'action'     => 'index',
    ]
);

$router->add(
    '/articles/{id}',
    [
        'controller' => 'Articles',
        'action'     => 'index',
    ]
);

$router->add(
    '/articles/archive',
    [
        'controller' => 'ArticlesArchive',
        'action'     => '',
    ]
);


$router->add(
    '/admin',
    [
        'controller' => 'Admin',
        'action'     => '',
    ]
);



$router->add(
    '/logout',
    [
        'controller' => 'Users',
        'action'     => 'logout',
    ]
);

$router->handle();
