<?php
class Database {
      private $password = "";
      private $username = "root";
      private $servername = "localhost";
      private $dbname = "bot";
      //PDO object
      private $stmt;
      private $error;
      
      //connect to the database
      public function __constructor(){
            try {
                  $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
                  // set the PDO error mode to exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                } catch(PDOException $e) {
                  $this->error = $e->getMessage();
                  echo $this->error;
                }
      }
     
      
      //Prepare statement before execution
      public function prepare($sql){
            $this->stmt = $this->prepare($sql);
      }
      //Execute the prepared statement
      public function execute($sql){
            return $this->stmt->execute($sql);
      }
}