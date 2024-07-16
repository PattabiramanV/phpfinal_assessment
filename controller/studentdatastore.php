<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require '../model/Connectdb.php';
require './StudentCrud.php';
// echo "pattabi";
$config=require '../config.php';
$db=new Database($config);

$student=new Student($db);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $data=json_decode($_GET['q'],true);
    // $sql="INSERT INTO students (name,email,admission,student_id) VALUES (:name,:email,:admission,:student_id)";
//    $craeteStudent=$db->executeQuery( "SELECT * FROM students ");
$craeteStudent=$student->createData($data);

    echo $craeteStudent;
}
// print_r($_SERVER['REQUEST_METHOD']);


if($_SERVER['REQUEST_METHOD']=='GET'){

    // $sql="INSERT INTO students (name,email,admission,student_id) VALUES (:name,:email,:admission,:student_id)";
//    $craeteStudent=$db->executeQuery( "SELECT * FROM students ");
if($_GET['id']){
$craeteStudent=$student->getData($_GET['id']);

 echo json_encode($craeteStudent);
}



}

// echo $_GET['edit_id'];


?>