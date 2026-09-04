<?php
$server="localhost";
$username="root";
$password="";
$dbname="ui";
$conn=new mysqli($server,$username,$password,$dbname);
if (!$conn){
    echo("not connected");
}

?>