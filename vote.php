<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        enter your name <input type="text" name="a" required><br>
        enter your id <input type="number" name="b" required><br>
        enter your age <input type="number" name="c" required><br>
        <input type="submit" name="submit" value="check"><br><hr>

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
</html>