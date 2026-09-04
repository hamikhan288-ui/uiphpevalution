<?php 
include 'db.php';
if($_SERVER['REQUEST_METHOD']==='POST'){
$fname=$_POST['name'];
$user=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['number'];
$pass=$password_hash($_POST[password].PASSWORD_DEFAULT);
$mysql=$conn->prepare("insert into user values(?,?,?,?,?)");
$sql=bind_param('sssis',$fname,$user,$email,$phone,$pass);
if($sql->execute()){
    header('Location:login.php');
    echo 'data is inserted';
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Fullname:
        <input type="text" name="name" id="">
        Username:
        <input type="text" name="username" id="">
        Email:
        <input type="email" name="email" id="">
        Phone No.
        <input type="number" name="number" id="">
        Password:
        <input type="password" name="password" id="">
        <button type="submit"></button>
    </form>

</body>

</html>