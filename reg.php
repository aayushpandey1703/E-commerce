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
            <form action="reg.php" method="post">
                <h1><label>Register</label></h1>
                <p><input type="text" name="email" placeholder="Email-Id" required="please enter email" /></p>
                <div class="pass">
                <p><input type="password" name="pass" placeholder="password" required="fill password" /></p>
                <p><input type="password" name="confirm" placeholder="confirm password" required="fill it...if("/></p>
                </div>
        <p><input type="submit" value="register" name="register" /></p>
       
               </form>
        
            <?php
            if(isset($_POST['register']))
            {
                require_once("connection.php");
                session_start();
                $email=$_POST['email'];
                $pass=$_POST['pass'];
                $confirm=$_POST['confirm'];
                
                if($pass==$confirm)
                {
                    $q="select * from login where email='".$_POST['email']."'";
                    $r=mysqli_query($con,$q);
                    if(mysqli_num_rows($r)==0){
                    $query="insert into login values('".$_POST['email']."','".$_POST['pass']."','customer')";
                    $result=  mysqli_query($con, $query);
                    echo("<script>alert('inserted')</script>");
                    header("location:index.php");
                    }
                    else{
                        ?> 
            <div class="alert-light text-danger text-center" style="margin-top: 100px"><?php echo("User Already Exists!!"); ?></div>
        <?php
                    }
                    }
                    
                
                else{
                    ?>
            <div class="alert-light text-danger text-center" style="margin-top: 100px;">password mismatched!!</div>
            <?php
                }
            }
            ?>
        </div>
    </body>
</html>
