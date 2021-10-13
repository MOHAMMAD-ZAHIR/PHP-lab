<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password = $_POST['password'];
        if(strlen($name)<8){
            echo "Enter more than 8 character";
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>