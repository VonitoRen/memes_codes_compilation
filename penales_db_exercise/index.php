<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            justify-content: center;
            text-align: center;
            background-color: white;
   
        }

        form{
            display: flex;
            justify-content: center;
            text-align: center;
            margin-left:  auto;
            margin-right: auto;
            margin-top: 10%;
            width: 200px;
            flex-direction: column;
            border: 1px solid black;
            padding: 50px;
            gap: .25em;
            background-color: lightblue;
            border-radius: .5em;
            margin-bottom: 5em;
        }

        #submit-btn{
            margin-top: 1em;
            padding: .25em;
        }

        input{
            padding: .5em;
        }

     
        button:hover{
            background-color: pink;
        }

        table{
            padding: .5%;
            border: solid .25em black;
            margin-left:  auto;
            margin-right: auto;
            width: 100%;
            justify-content: center;
            text-align: center;

        }

        th,tr,td{
            border: solid .1em black;
            padding: .3em;
        }

        .no-record-msg{
            color: red;
        }
      
    </style>
    <title>Document</title>
</head>
<body>
    <form id="user_form">
        <input type="text" name="name" id="name" class="name" placeholder="fullname" required>
        <input type="number" name="age" id="age" class="age" placeholder="age" required>
        <button type ="submit" class="submit-btn" id = "submit-btn">Submit</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody id ="display_table">
        <!-- display record --> 
        </tbody>
    </table>
    
    <script src="jquery-3.7.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //elements
            $user_form = $("#user_form");
            $tbl_rec = $("#display_table");
            $name = $("#name");
            $age = $("#age");
            displayRec();
            //functions
            function displayRec(){
                $.post("infotable.php",{rec: 1}, function(rec){
                    $tbl_rec.html(rec);
                });
            }

            //events
            $($user_form).submit(function(e){
                e.preventDefault();

                $.ajax({
                    url: "addinfo.php",
                    type: "POST", 
                    data:{
                        //variables
                        name: $name.val(),
                        age: $age.val()
                    },
                    success:function(){
                        displayRec();
                    },
                    error:function(){}
                });

            });
           
        });

     
    </script>
</body>
</html>