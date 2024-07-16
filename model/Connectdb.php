<?php



class Database{

    public $connection;

    public function __construct($config){

        try{
   $dsn='mysql:'.http_build_query(['host'=>$config['host'],'dbname'=>$config['dbname']],'',';');

   $this->connection= new PDO($dsn,$config['user'],$config['password']);

// echo "DB Connect sucess";
        }
 catch(PDOExpection $err){
   
    echo "err in connectb filr".$err->getMessage();

 }



}


// public function executeQuery($query){

// echo $query;
//     $result=$this->connection->prepare($query);
//     $result->bindParam(':');
//   $demo=$result->execute();
//  $data=$demo->fetchAll();

//   return  $data;

// }






    }










?>