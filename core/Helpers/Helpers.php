<?php

use Core\View\View;


/**
 * Retorna caminho para pasta RAIZ DO PROJETO
 * @param $filename
 * O parametro é opcional, por padrão não é preciso definir,
 * caso o parametro seja string irá retornar o PATH / parametro
 */
if( ! function_exists('base_path') ) :
    function base_path($filename = null)
    {
        if( is_string($filename) && !is_null($filename) ) :
            return BASE_PATH . $filename;
        else:
            return BASE_PATH;
        endif;
    }
endif;

/**
 * Retorna caminho para pasta VIEWS DO PROJETO
 * @param $filename
 * O parametro é opcional, por padrão não é preciso definir,
 * caso o parametro seja string irá retornar o PATH / parametro
 */
if( ! function_exists('view_path') ) :
    function view_path($filename = null)
    {
        if( is_string($filename) && !is_null($filename) ) :
            return VIEW_PATH . $filename;
        else:
            return VIEW_PATH;
        endif;
    }
endif;

/**
 * Retorna caminho para pasta ROUTES DO PROJETO
 * @param $filename
 * O parametro é opcional, por padrão não é preciso definir,
 * caso o parametro seja string irá retornar o PATH / parametro
 */
if( ! function_exists('route_path') ) :
    function route_path($filename = null)
    {
        if( is_string($filename) && !is_null($filename) ) :
            return ROUTE_PATH . $filename;
        else:
            return ROUTE_PATH;
        endif;
    }
endif;

/**
 * Retorna caminho para pasta APP DO PROJETO
 * @param $filename
 * O parametro é opcional, por padrão não é preciso definir,
 * caso o parametro seja string irá retornar o PATH / parametro
 */
if( ! function_exists('app_path') ) :
    function app_path($filename = null)
    {
        if( is_string($filename) && !is_null($filename) ) :
            return APP_PATH . $filename;
        else:
            return APP_PATH;
        endif;
    }
endif;

/**
 * Retorna caminho para pasta PUBLIC DO PROJETO
 * @param $filename
 * O parametro é opcional, por padrão não é preciso definir,
 * caso o parametro seja string irá retornar o PATH / parametro
 */
if( ! function_exists('public_path') ) :
    function public_path($filename = null)
    {
        if( is_string($filename) && !is_null($filename) ) :
            return PUBLIC_PATH . $filename;
        else:
            return PUBLIC_PATH;
        endif;
    }
endif;

/**
 * Renderiza um arquivo .VIEW com opção de template
 */
if( ! function_exists('view') ) :
    /**
     * @param $view_file
     * @param $data
     * @param $template
     */
    function view($view_file, $data = null, $template = null)
    {
        View::show($view_file, $data, $template);
    }
endif;

/**
 * Renderiza um arqvuio VIEW sem opção de template
 * O path do arquivo é definido internamente
 */
if( ! function_exists('include_view') ) :
    function include_view($filename, $data)
    {
        $filename = View::prepare($filename);
        View::renderFile($filename, $data);
    }
endif;
