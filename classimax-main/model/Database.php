<?php

require_once __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../")->load();

class Database {
    private string $host;
    private string $dbname;
    private string $user;
    private string $password = '';

    public function __construct(){
        $this->host = getenv('DB_HOST');
        $this->dbname = getenv('DB_NAME');
        $this->user = getenv('DB_USER');
    }

    public function connect() : object{
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user , $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $th) {
            echo "Error connecting to database: " . $th->getMessage();
        }
    }
}


?>