<?php
class DataBase {
    public $connection; 
    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=php;user=root;charset=utf8mb4";

        $this ->connection = new PDO($dsn);
    }

    public function query($quary){
        
        $statment = $this->connection->prepare($quary);
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_ASSOC);

    }
}