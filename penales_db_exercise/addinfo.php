<?php 
    if(isset($_POST['name'])){
        require('conn.php');
        $stmt = $mysqli->prepare("INSERT INTO tbl_info (name, age) VALUES (?,?)");

        if (!$stmt){
            echo "no statement prepared";
        }

        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "$name.$age";
        
        $stmt->bind_param("si", $name, $age);
        //s - string
        //i - integer
        //d - double
        //b - binary


        if($stmt->execute()){
            echo "Successfully executed";
        }else{
            echo "What's wrong with you";
        }
        
        $stmt->close();
        $mysqli->close();
    }
?>