<?php
    require_once('conn.php');

    $stmt = $mysqli->prepare("SELECT * FROM tbl_info");
    if(!$stmt){
        echo "No Statement";
    }

    $stmt->execute(); //check if may makukuha o wala
    
    $result = $stmt->get_result(); //storing the executed data in the variable

    if($result->num_rows > 0){
        //may laman
        while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?=$row['info_id']?></td>
                    <td><?=$row['name']?></td>
                    <td><?=$row['age']?></td>
                    <td><button>EDIT</button><button>DELETE</button></td>
                </tr>
            <?php
        }

    }else{
        //walang laman

        ?>

        <tr>
            <td colspan = "4" id = "no-record-msg"> <center>NO RECORD FOUND</center></td>
        </tr>
       
        <?php
    }


?>