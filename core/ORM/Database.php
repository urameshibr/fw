<?php

namespace ORM;

class Database
{
    private $host;
    private $dbName;
    private $username;
    private $password;

    /**
     * Database constructor.
     * @param $host
     * @param $dbName
     * @param $username
     * @param $password
     */
    public function __construct($host, $dbName, $username, $password)
    {
        $this->host = $host;
        $this->dbName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->dbname;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


}