<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 500px;
           height: 500px;
           border: 5px solid #0000ff;
            background: rgba(0,0,0,0.8);
            border-radius: 20px;
        }
       
        .box input[type='text'] {
            position: absolute;
            left: 10%;
            margin-top: 130px;
            width: 400px;
            height: 25px;
             background: none;
            border: none;
            border-bottom: 4px solid #ff0000;
            border-radius: 12px;
            outline: none;
            color: wheat;
            font-size: 20px;
            transition: 0.2s;
        }
        .box input[type='text']:hover{
            border-color: #0000cc;
        }
          .box input[type='password']:hover{
            border-color: #0000cc;
          }
         input[type='password']
        {
            width: 400px;
            height: 25px;
            top: 50%;
            margin-left: 50px;
            background: none;
            border: none;
            border-bottom: 4px solid #ff0000;
            border-radius: 12px;
            outline: none;
            color: wheat;
            font-size: 20px;
            transition: 0.2s;
            
        }
        .pass{
            position: absolute;
            margin-top: 175px;
        }
         input[type='submit']{
             position: absolute;
            width: 200px;
            height: 40px;
             margin-top: 280px;
             left: 29%;
             background: #0000cc;
             cursor: pointer;
             border-radius: 9px;
             border: #0000cc;
             color: #ffffff;
             transition: 0.2s;
        }
        input[type='submit']:hover{
            background: #ff0000;
        }
        h1{
            position: absolute;
            color: #ff0000;
            left: 40%;
            font-style: italic;
        }
       </style>
    <body>
        <div class="box">
            <form action="login2.php" method="post">
                
                <h1><label>Login</label></h1>
                <p><input type="text" name="email" placeholder="Email-Id" required="please enter email" /></p>
                <div class="pass">
                <p><input type="password" name="pass" placeholder="password" required="fill password" /></p>
                </div>
        <p><input type="submit" value="Login" name="login" /></p>
         <input type="hidden" name="name" value="<?php echo($_POST['name']) ?>" />
                <input type="hidden" name="price" value=<?php echo($_POST['price']) ?> />
                        <input type="hidden" name="img" value=<?php echo($_POST['img']) ?> />

        </form>
         <?php 
         if(isset($_POST['login'])){
             require_once("connection.php");
             session_start();
             $_SESSION['email']=$_POST['email'];
             $_SESSION['name']=$_POST['name'];
             $_SESSION['price']=$_POST['price'];
             $_SESSION['images']=$_POST['img'];
             

             $query="select * from login where email='".$_POST['email']."' and pass='".$_POST['pass']."'";
             $result=  mysqli_query($con, $query);
             $data=  mysqli_fetch_assoc($result);
             if(mysqli_num_rows($result)>0)
             {
                 if($data['role']=="admin")
                 {
                     echo("<script>");
                     echo("alert('welcom')");
                     echo("</script>");
                      header("location:upload.php");

                 }
                 else{
                    
                       $q="insert into cart(image,items,price) values('".$_POST['img']."','".$_POST['name']."','".$_POST['price']."')";
    $r=  mysqli_query($con, $q);
    if($r){
                header("location:index2.php");

        ?>
            <script>alert("item inserted")</script>
            <?php
    }else{
        echo("something is wrong ");
        header("location: index.php");
    }
        }
             }
             else{
                 ?>
            <div class="alert-light text-danger text-center" style="margin-top: 100px;">wrong password!!</div>
            <?php
             }
           
         }
         ?>
           <a href="reg.php" style="position: absolute; margin: 100px; margin-left:170px;  margin-top: 320px; font-size: 13px;">not a member?click here</a>
        </div>
                     <input type="text" name="name" value="<?php echo $_POST['img'] ?>" />
                                          <input type="text" name="name" value="<?php echo $_POST['name'] ?>" />


    </body>
</html>
