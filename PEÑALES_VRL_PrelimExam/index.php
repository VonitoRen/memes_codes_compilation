<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div id = "container">
    <form action="#" method = "POST">
        <h1>LOGIN FORM</h1>

        <?php
            if (!empty($_POST['username']) && !empty($_POST['password'])) {
                if ($_POST['username'] == "admin" && $_POST['password'] == "admin"){
                    echo "<p class = test >Welcome User!</p>" ; 
                }else{
                    echo "<p class = validate-text>Incorrect username or password!</p>";
                }
            } 
        ?>


        <input type="text" name="username" class = "uname" placeholder = "Username" required>  <br>
        <input type="password" name="password" class = "pword" placeholder = "Password" required> <br>
        <button class = "btn-submit">LOGIN</button> <br>

    </form>
    </div>

</body>
</html>