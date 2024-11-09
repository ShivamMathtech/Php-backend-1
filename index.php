<?php
$title = "Query string ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
$title;
?>
    </title>
</head>

<body>
    <?php
     //Check if the query string contains data or not
     // Condition Checking for the query Strong
     // Systanx = Formula
     //
     if($_GET['name']){
        // $_GET[]s Super Global Variable
        // echo "Yes" ;
       $name= $_GET['name'];
       $course= $_GET['course'];
  
        //1 Stablish the  Connection for the sending the Data into the database Or Open DB Connection
       // mysqli_connect("hostname" ,"MySql_Username","My_sqlPassword","DatabaseName")
      $conn= mysqli_connect("localhost","root","","mydatabase_db");
      //2 Build the Query
      // sql query
      // INSERT INTO tabel_name(column1,column2) VALUES  
      $sql ="INSERT INTO teacher_tbl(teacher_name,teacher_subject)VALUES('$name','$course')";
   
      // 3 Execute the SQL query
      mysqli_query($conn,$sql);
       
       //4 Display the result
       echo "Data Inserted successfully";
       //5 CLose DB Connection

       mysqli_close($conn);
     }else{
      echo "No" ;
     }
    ?>
</body>

</html>