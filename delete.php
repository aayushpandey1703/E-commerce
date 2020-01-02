<?php

 require_once("connection.php");
 session_start();
 $query="select * from cart";
 $result=mysqli_query($con,$query);
 while($data=mysqli_fetch_assoc($result))
 {
     if($data['id']==$_GET['id']){
         $q="delete from cart where id='".$_GET['id']."'";
         $r=  mysqli_query($con, $q);
         header("location:cart.php");
     }
 }
?>