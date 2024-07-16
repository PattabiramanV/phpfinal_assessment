<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
</head>
<body>



    <?php require "./view/html/Studentform.php" ?>
    <?php require "./view/html/studentdata.php" ?>
    <?php require "./view/html/studentDataTable.php" ?>
    <?php require "./controller/edidata.php" ;?>


    <?php 

// $config=require './config.php';
// require './model/Connectdb.php';
// require './controller/StudentCrud.php';

// $db=new Database($config);
// $student=new Student($db);
// $editStudent=$student->getDataById($_GET['edit_id']);

// print_r($_SERVER['REQUEST_URI']=='/');
// print_r($_SERVER);
// if($_SERVER['REQUEST_METHOD']=='PUT'){
// echo "put";
//     // $sql="INSERT INTO students (name,email,admission,student_id) VALUES (:name,:email,:admission,:student_id)";
// //    $craeteStudent=$db->executeQuery( "SELECT * FROM students ");
// if($_GET['id']){
// $craeteStudent=$student->getData($_GET['id']);

//  echo json_encode($craeteStudent);
// }

// }

//  echo json_encode($craeteStudent);


?>
    <script src="./view/Js/index.js"></script>
</body>
</html>