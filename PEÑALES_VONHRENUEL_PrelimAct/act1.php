
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <link rel="stylesheet" href="act1.css">
</head>
<body>
    <h1>Bautista, Fernando Jose R.</h1>
    <!-- form start -->
    <form action="" method="post">
        <h2>Registration Form</h2>
        <input type="text" name="name" id="name" placeholder="Fullname" required/><br />
        <input type="number" name="age" id="age" placeholder="Age" required/><br />
        <label>Sex: </label>
        <input type="radio" name="sex" id="male" value="Male" required/><label>Male</label>
        <input type="radio" name="sex" id="female" value="Female"  required/><label>Female</label><br />
        <select name="program" required>
            <option selected disabled value="">Please select program...</option>
            <option value="BSIT">BSIT</option>
            <option value="BSA">BSA</option>
            <option value="BSCE">BSCE</option>
        </select>
        <input type="submit" value="Register" id="submit">
    </form>
    <!-- end of form and start of table -->
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Program</th>
            <th>Action</th>
        </tr>
        <tr>
            <!-- table content based on the given data from the form -->
            <?php
                //check if all data is set
                if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['sex']) && isset($_POST['program'])){
                    ?>
                        <td><?=ucwords($_POST['name'])?></td> <!-- ucwords() to uppercase first letter of every word-->
                        <td><?=$_POST['age']?></td>
                        <td><?=$_POST['sex']?></td>
                        <td><?=$_POST['program']?></td>
                        <td>
                            <button>Edit</button>
                            <button>Delete</button>
                        </td>
                    <?php
                    //check if all data is not empty
  
                }else{
                    ?>
                        <td colspan="5">No Record/s</td>
                    <?php
                }
            ?>
        </tr>

    </table>
</body>
</html>