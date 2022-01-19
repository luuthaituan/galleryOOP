<?php
require_once("new_config.php");
class Database {

    public $connection;

    function __construct() //tu dong goi toi function khi tao 1 doi tuong  tu 1 lop
    {
        $this->open_db_connection();
    }

    public function open_db_connection(){
        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); //dung $this-> de ko can dau $ khi goi toi $connection
        if(mysqli_connect_errno()){
            die ("Database connection failed" . mysqli_error());
        }
    }

    public function query($sql){
        //truy van
        $result = mysqli_query($this->connection, $sql);
        if(!$result){
            die ("Query failed");
        }

    }

//khoi tao ket noi
}
$database = new Database();



?>