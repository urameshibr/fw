<?php

namespace App\Controllers\Api;

class ApiController
{

    /**
     * ApiController constructor.
     */
    public function __construct()
    {
    }

    public function action1()
    {
        return http_response_code();
        //$data = 'Teste';
        //return json_encode($data, header('Status: 200'));
    }

    public function action2()
    {
        echo 'Action API2() do Apicontroller foi executada';
    }

    public function action3()
    {
        echo 'Action API3() do Apicontroller foi executada';
    }

}