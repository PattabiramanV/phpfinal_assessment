<?php 



error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../model/Connectdb.php';
require './StudentCrud.php';
// echo "pattabi";

$config=require '../config.php';
$db=new Database($config);

$student=new Student($db);



    $craeteStudent=$student->getSearchData($_GET['search']);

 echo json_encode($craeteStudent);
