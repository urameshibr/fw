<?php
/**
 * Array contendo as rotas que fazem parte da API do sistema
 * uri = url requisitada, deve começar com /
 * name = alias para rota, atraves do name é possivel enconrar a uri, controller e action da rota
 * uses = há uma separação entre o @, antes do @ é definido o controller que será usado,
 * após o @ é definido a action do controller
 * Nota: as uri devem começar sempre com /api
 */
return [
    ['uri' => '/api/action1',   'name' => 'api',       'uses' => 'Api\ApiController@action1',    'type' => 'GET'],
    ['uri' => '/api/action2',   'name' => 'api',       'uses' => 'Api\ApiController@action2',    'type' => 'GET'],
    ['uri' => '/api/action3',   'name' => 'api',       'uses' => 'Api\ApiController@action3',    'type' => 'GET'],
];