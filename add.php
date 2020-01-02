<?php
require_once("connection.php");
session_start();
$query="select * from cart";
$result=  mysqli_query($con, $query);
if($result)
{
    while($data=mysqli_fetch_assoc($result)){
       $q="insert into pcart values('".$_SESSION['email']."','".$_POST['image']."','".$data['items']."','".$data['price']."')";
       $r=mysqli_query($con,$q);
    }
    $qr="delete from cart";
    $re=mysqli_query($con,$qr);
    echo("inserted");
    header("location:index2.php");
}else{
    echo("wrong");
    header("location:cart.php");
}

?>