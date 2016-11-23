<?php

namespace Core\Routing;

use Exception;

class Router
{
    // Atributo que vai guardar todas as rotas do sistema
    private $url;
    protected static $routes = [];
    protected $routeGroup;
    private $controllerPath = "/../app/controllers";
    private $namespace = "App\\Controllers\\";

    /** Infos da rota atual */
    private $currentUri;
    private $currentAction;
    private $currentController;

    /**
     * construtor faz a leitura das rotas e url requisitada
     * Router constructor.
     */
    public function __construct()
    {
        $this->setUrl($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->discoverGroup( $this->url );
        $this->loadRouter();
        $this->verifyIfRoutesHasUrl($this->url);
    }

    public function discoverGroup($url)
    {
        $parts = explode('/', $url);
        if ( $parts[1] == 'api') :
            return $this->routeGroup = 'api';
        endif;

        return $this->routeGroup = 'web';
    }

    // Inicializa as rotas do sistema e atribui o valor ao atributo da classe (private $routes)
    public function loadRouter()
    {
        if ($this->routeGroup == 'api') :
            self::$routes = require base_path('routes/api.php');
        else:
            // Busca as rotas dentro do arquivo /routes/web.php
            self::$routes = require base_path('routes/web.php');
        endif;

    }

    public function verifyIfRoutesHasUrl($url)
    {
        /**
         * Entra no array de rotas e verifica se a iteração possui a url requisitada
         * Caso sim, retorna a action do controller
         **/
        foreach (self::$routes as $route):
            $this->mapRoute($route);
            if ($route['uri'] == $url) :
                echo $this->runAction($this->namespace, $this->currentController, $this->currentAction);
            endif;
        endforeach;
        /** Se entrar no foreach e não encontrar url valida, retorna erro 404 **/
        return header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found', true, 404);
    }

    public function runAction($namespace, $controller, $action)
    {
        $controllerInstance = $namespace . $controller;
        $controller = new $controllerInstance;

        // Testando se a action existe no controller
        if (!method_exists($controller, $action)):
            // implementar dpeois ===== DISPARAR LOG
            throw new Exception('Action não existe no controller');
        endif;

        return $controller->{$action}();
    }

    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($uri, $path)
    {
        $this->url =  parse_url($uri, $path);
    }

    /**
     * Recebe um array e define a rota, action e controller atual
     * @param array $route
     */
    public function mapRoute(array $route)
    {
        $this->currentUri = $route['uri'];
        // Separando controller e action
        $parts = explode('@', $route['uses']);
        $this->currentController = $parts[0];
        $this->currentAction = $parts[1];
    }

    // Abaixo os getters setters para poder manipular a classe router dinamicamente

    /**
     * @param array $routes
     */
    public static function setRoutes(array $routes)
    {
        self::$routes = $routes;
    }

    /**
     * @return mixed
     */
    public static function getRoutes()
    {
        return self::$routes;
    }


    /**
     * @return mixed
     */
    public function getControllerPath()
    {
        return $this->controllerPath;
    }

    /**
     * @param mixed $controllerPath
     */
    public function setControllerPath($controllerPath)
    {
        $this->controllerPath = $controllerPath;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }


}
