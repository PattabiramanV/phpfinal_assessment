<?php

class Student{

    private $db;

    public function __construct($db){

        $this->db=$db->connection;

    }


    public function createData($data) {
        try {
    
            $sql = "INSERT INTO students (name, email, admission, student_id) VALUES (:name, :email, :admission, :student_id)";
            
     
            $bind = $this->db->prepare($sql);
    
  
            $bind->bindParam(':name', $data['name']);
            $bind->bindParam(':email', $data['email']);
            $bind->bindParam(':admission', $data['admission']);
            $bind->bindParam(':student_id', $data['id']);
    
     
            $result = $bind->execute();
    
            if ($result) {  
                return 'New record created successfully';
            } else {
                return 'Failed to create new record';
            }
        } catch (PDOException $e) {
           
            return 'Error: ' . $e->getMessage();
        }
    }
    
    public function getData($id) {
        try {

            $startId =  $id - 10+1;

            $sql = "SELECT * FROM students WHERE id BETWEEN :start_id AND :id";
            
            $bind = $this->db->prepare($sql);
    
            $bind->bindParam(':start_id', $startId);    
            $bind->bindParam(':id', $id);

            $bind->execute();
        
            $result = $bind->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {
            
            return "Error: " . $e->getMessage();
        }
    }
    
public function getSearchData($searchData){

    try {

      

       

    $sql="SELECT * FROM students WHERE student_id LIKE '%$searchData%' OR name LIKE '%$searchData%'";
        
        $bind = $this->db->prepare($sql);



        $bind->execute();
    
        $result = $bind->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    } catch (PDOException $e) {
        
        return "Error: " . $e->getMessage();
    }


}

public function getDataById($id) {
    try {
        // SQL query with a placeholder for the id
        $sql = "SELECT * FROM students WHERE id = :id";
        
        // Prepare the SQL statement
        $stmt = $this->db->prepare($sql);

        // Bind the id parameter
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        // Execute the query
        $stmt->execute();

        // Fetch the result as an associative array
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Return the result
        return $result;
    } catch (PDOException $e) {
        // Handle database errors
        return "Error: " . $e->getMessage();
    }
}

}

?>

