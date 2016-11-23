<?php

namespace Core\View;

abstract class View
{
    private static $data = [];
    private static $render;
    private static $template;

    /**
     * Carrega um arquivo VIEW (filename.view.php)
     * @param      $filename
     * @param      $data
     * @param bool $defaultPath
     */
    public static function show($filename , $data = null, $template = null)
    {
        /**
         * Caso o terceiro parametro $template esteja definido, irá renderiza-lo
         * é possível renderizar uma CHILD VIEW passando-o no primeiro parametro
         * Com o template definido irá enviar a view para dentro do array $data
         * No arquivo view do template dá pra chamar a child view passando a key
         * $data['view']
         * Exemplo: <?php include_view($data['view'])?>
         * Se quiser passar variaveis para a CHIL VIEW, é preciso usar a key
         * $data['data']
         * Exemplo: <?php include_view($data['view'] , $data['data']) ?>
         */
        if( $template ) :
            $template = self::prepare($template);
            $resolvedData = [
                'view' => $filename,
                'data' => $data
            ];
            return self::renderFile($template, $resolvedData);
        endif;

        /**
         * view_path() retorna o valor de \Core\Config\Config::$view_path
         * Você pode encontrar esta function em \Core\Helpers\Helpers.php
         **/
        $file = self::prepare($filename);
        
        return self::renderFile($file);
    }

    /**
     * Retorna o caminho correto do arquivo a ser renderizado
     * @param $filename
     * @return string
     */
    public static function prepare($filename)
    {
        return view_path() . strtolower($filename) . '.view.php';
    }

    /**
     * Renderiza a view caso ela exista
     * @param $file
     * @return void
     */
    public static function renderFile($file, $data = null)
    {
        if( file_exists($file) ) :
            self::$render = $file;
            self::$data = $data;
        else:
            /**
             * Caso o arquivo VIEW nao exista é disparado um erro
             */
            // Fata implementar uma custom exception aqui
            throw new \Exception("View {$file} não encontrada.");
        endif;
        /**
         * Com a VIEW encontrada e os atributos internos preparados ela é renderizada
         */
        include_once(self::$render);
    }

    /**
     * Define que a view atual pode utilizar um template padrão
     * A view ficará dentro deste template
     * @param $filename "Nome do template"
     * @return void
     */
    public static function extends($filename)
    {
        //$file = self::$defaultPath .'partials/'. $filename . '.view.php';
        include ($filename);
    }

}