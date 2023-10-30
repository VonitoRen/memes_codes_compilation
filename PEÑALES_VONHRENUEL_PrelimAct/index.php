

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="C:\xampp\htdocs\PEÑALES_VONHRENUEL_PrelimAct\style.css" type="text/css">
    <title>Document</title>

    <style>
        table{
    width: 100%;
    
    }

    table, tr, td, th{
    border: 1px solid lightpink;
    }

    th{
    background-color: pink;
    }

    td{
    text-align: center;
    }

    /*h1{
        color: pink;
    }*/
    #form-div{
        width: 25%;
        height: 150px;
        background: pink;
        padding: .5em;
        margin-bottom: 1em;
    }
    
    .form-control{
        width: 200px;
        border: 0px solid
    }

    #select-bar{
        width: 207px;
        margin: .2em;
    }

    button{
        width: 48.5%;
    }
    </style>
</head>
<body>
    <h1 id = "h1-name">PEÑALES, Vonh Renuel L.</h1>

    <div id = "form-div">
        <form action="#" method = "POST">
            <input type="text" name = "idno" id = "idno" class = "form-control" placeholder = "ID Number" required> <br>
            <input type="text" name = "name" id = "name" class = "form-control" placeholder = "Fullname" required> <br>
            <input type="number" name = "age" id= "age" class = "form-control" Placeholder = "Age" required> <br>
            Sex: <input type="radio" name = "sex" value = "Male" required> Male
            <input type="radio" name = "sex" value = "Female" required> Female <br>
            Program:<Select placeholder = "Program" name="program" class = "form-control" id = "select-bar" required>
            <option value="" disabled selected>Please Select your Program</option>
            <option value="BSIT">BSIT</option>
            <option value="BSA">BSA</option>
            <option value="BSCE">BSCE</option>
            </Select><br>
   

            <input type="submit" value="Submit" action = "#">
            <button type="submit" onclick="submitForm()">Clear</button>
          
          <script>
            function submitForm() {
        // Prevent the default form submission behavior
             event.preventDefault();

        // Your custom logic here (if any)

        // Manually submit the form
            location.reload();
    }
</script>
        </form>
    </div>

    <div id = "table-div">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Sex</th>
                <th>Program</th>
                <th>Action</th>
            </tr>


            <?php
            //function validate(){
 


               if (empty($_POST['name']) == false && empty($_POST['idno']) == false && isset($_POST['sex']) && empty($_POST['age']) == false && isset($_POST['program'])) {
                    $name = $_POST['name'];
                    $idno = $_POST['idno'];
                    $sex = $_POST['sex'];
                    $age = $_POST['age'];
                    $program = $_POST['program'];
                    echo 
                    "<tr>
                    <td>$idno</td>
                    <td>$name</td>
                    <td>$age</td>
                    <td>$sex</td>
                    <td>$program</td>
                    <td><a href = edit.html id = edit-btn>EDIT</a> <a href = delete.html id = dlt-btn>DELETE</a></td>
                </tr>";
                }else{
                  echo 
                    "<tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td> 
                </tr>";
                    


                }
            // }
            

            
?>


        </table>
    </div>


</body>
</html>

