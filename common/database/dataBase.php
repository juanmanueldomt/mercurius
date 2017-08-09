<?php
/**
 * Created by PhpStorm.
 * User: kronoz
 * Date: 3/08/17
 * Time: 10:31 PM
 */
require_once 'accessData.php';
class dataBase{
    private $connection;
    function __construct(){
        $this->connection = mysqli_connect(accessData::$SERVERNAME,
            accessData::$USERNAME,
            accessData::$PASSWORD,
            accessData::$DBNAME);
        if (mysqli_connect_errno()){
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
    public function getConection(){
        return $this->connection;
    }
}