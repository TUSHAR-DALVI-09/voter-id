<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    h1{
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 20px;
        margin-top: 10px;
        text-decoration:underline;
    }
    .container{
        display: grid;
        width: 400px;
        height: 500px;
        background-color:beige;
        justify-content: center;
        align-content: center;
        gap: 10px;
        border-radius: 30px;
        
    }

    .tag{
        font-weight: 700;
        font-size: 20px;
        text-align: center;
        position: relative;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    input{
        margin: 5px;
        padding: 3px;
        display: grid;
        width: 250px;
        font-size: medium;
        border: none;
        border-radius: 5px;
    }
    .btn {
        background-color: black;
        color: white;
        padding: 7px;
        cursor: pointer;
    }
    .btn:hover{
        background-color: #252727;
    }

    h2{
        display: flex;
        justify-content: center;
        text-align: center;
        margin-top: 20px;
        padding: 5px;
        text-decoration:none;
        font-size: 20px;
        background-color: beige;
        border-radius: 10px;
        border: 2px solid black;
    } 

    /* h3{
        justify-content: center;
        text-align: center;
        font-size: 20px;
        margin-top: 20px;
        padding: 5px;
        text-decoration: none;
        background-color: beige;
        border-radius: 10px;
        color: red;
        border: 2px solid;
    }  */

    </style>
</head>
<body>
    <form method="POST">
        <div class="container">
            <hr><h1>Voting Page</h1>
        <div class="tag">YOUR NAME: <input type="text" name="a" required></div><br>
        <div class="tag">YOUR ID: <input type="number" name="b" required></div><br>
        <div class="tag">YOUR AGE: <input type="number" name="c" required></div><br>
            <input class="btn" type="submit" name="submit" value="Submit"><br><hr>
        </div>
        <?php
        if (isset($_POST['submit'])){
            $name = $_POST['a'];
            $id = $_POST['b'];
            $age = $_POST['c'];

                echo'<h2>Name is:-'.$name.' </h2>';

                echo'<h2>Your id:-'.$id.'</h2>';

            if($age >= 18){
                echo "<h2>your allow for vote</h2>";

            }else {
                // echo"<h3>Your Not Allow For Vote Because Your 18 under</h3>";
                function function_alert($message) {

                    // Display the alert box 
                    echo "<script>alert('$message');</script>";
                }
                
                // Function call
                function_alert("your not allow for vote because your 18 under");
            }
        }
        ?>
    </form>
</body>
</html>