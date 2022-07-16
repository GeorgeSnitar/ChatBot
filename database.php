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
      public function connect(){
            try {
                  $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
                  // set the PDO error mode to exception
                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
                } catch(PDOException $e) {
                  $this->error = $e->getMessage();
                  echo $this->error;
                }
      }
     

    
      //Execute the prepared statement
      public function execute($sql){
            return execute($sql);
      }
}