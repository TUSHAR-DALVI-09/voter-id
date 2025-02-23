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

            if($name)
            {
                echo'name :-'.$name.' <br>';
            }
            if($id){
                echo'id :-'.$id.' <br>';
            }
            if($age >= 18){
                echo "your allow for vote";
            }else {
                echo"your not allow for vote because your 18 under";
            }
        }
        ?>
    </form>
</body>
</html