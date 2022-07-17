<?php
include "database.php";
include "index.php";

 //get user message through ajax
 $text;
$getting = new Database();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $text = htmlspecialchars($_POST["text"]);
      if(empty($text)){
            return "empty";
      } else{
            return $text;
      }
}

 
 //checking user query to database query
 $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$text%'";
 $prepare_q = $getting->prepare($check_data);
 $run_query = $getting->execute($prepare_q);
 $rowCount = $run_query->rowCount();
 
 //if user query mathced to database query we'll show the reply otherwise
 if($rowCount > 0){
      $fetch_data = $run_query->fetch(PDO::FETCH_ASSOC);
      $replay = $fetch_data['replies'];
      echo $replay;
 }else{
      echo "I don't understand you";
 }