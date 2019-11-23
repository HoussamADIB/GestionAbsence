<?php
class Db {

    private $host = "127.0.0.1";
    private $username  = "root";
    private  $password = "";
    private $database = "gab";
    protected $_query;
    public $db;

    public  function __construct ($host = null,$username = null ,$password = null ,$database = null ) {

        if ($host != null){
            $this->host     = $host;
            $this->username	= $username;
            $this->password	= $password;
            $this->database	= $database;
        }
        try{
            $this->db = new PDO("mysql:host=".$this->host .";dbname=".$this->database, $this->username, $this->password,
                array (
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                )
            );
        }catch(PDOException $e){
            echo ($e->getMessage());
        }

    }

}
