<?php

include "db.php";

if($_SERVER['REQUEST_METHOD']==="POST"){
    $name=$_POST["name"];
    $password=$_POST["password"];

    $sql=$conn->prepare("select * from user where name=? and pass=?");
    $sql->bind_param("si",$name,$password);

    if($sql->execute()){
        header ("location:home.php");
    }
}

?>






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form methode='post'>
        Username:
        <input type="text" name="name" id="" require>
        Password:
        <input type="password" name="password" id="" require>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>

    </form>

</body>

</html>