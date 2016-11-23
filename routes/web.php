<?php
/**
 * Array contendo as rotas que fazem parte do FRONT CONTROLLER (web) do sistema
 * uri = url requisitada, deve começar com /
 * name = alias para rota, atraves do name é possivel enconrar a uri, controller e action da rota
 * uses = há uma separação entre o @, antes do @ é definido o controller que será usado,
 * após o @ é definido a action do controller
 */
return [
    ['uri' => '/',         'name' => 'index',     'uses' => 'MainController@index',     'ver    b' => 'GET'],
    ['uri' => '/template', 'name' => 'template',  'uses' => 'MainController@template',  'verb' => 'GET'],
    ['uri' => '/customer', 'name' => 'customer.index',  'uses' => 'CustomerController@index',  'verb' => 'GET'],
    ['uri' => '/customer/create', 'name' => 'customer.create',  'uses' => 'CustomerController@create',  'verb' => 'GET'],
];