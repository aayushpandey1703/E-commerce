<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    </head>
        <style>
            
            
            .contain{
                position: relative;
                margin-top: 5080px;

                width: 850px;
                height: 10000px;
                left: 35%;
                top: 26%;
                transform: translate(-50%,-50%);
               
                border: outset 4px;  

            }
            td hr{
                position: absolute;
            }
        .menu{
            width: 100%;
            height: 120px;
            background-color: #333333;
            margin-bottom: 40px;
        }
        .menu input[type='text']{
            position: relative;
            left: 45%;
            top: 50%;
            transform: translate(-50%,70%);
            width: 30%;
            height: 45px;
        }
        .menu input[type='submit']{
            position: absolute;
            margin-left: 60.05%;
            margin-top: -2.2%;
            height: 45px;
            background: none;
background: url("http://www.clker.com/cliparts/z/w/Q/7/f/C/search-logo-md.png");
background-position: center;
background-size: cover;
background-color: #ff0000;
color: #ff0000;
width: 50px;
cursor: pointer;
transition: 0.25s;
        }
        .menu input[type='submit']:hover{
            width: 80px;
        }
         .pete{
             color: #ff0000;
             position: absolute;
             margin: 20px;
             font-size: 50px;
             margin-left: 60px;
             font-style: italic;
            
        }
        .shop{
            color: #0000ff;
             position: absolute;
             margin: 20px;
             font-size: 50px;
             margin-left: 220px;
             font-style: italic;
        }
        
          .menu  .a{
            margin: 0px;
            position: absolute;
       padding: 0px;
            left: 85.7%;
            width: 48px;
            margin-top: -5px;
            color: wheat;
            font-size: 20px;
            text-decoration: none;
            display: block;
            
        }
        .menu .a:hover{
            border-bottom: 2px inset #ff3300;
       
        }
       
        .menu .b{
            margin: 0px;
       position: absolute;
       padding: 0px;
       left: 92%;
        width:63px;
            margin-top: -20px;
            color: wheat;
            font-size: 20px;
            text-decoration: none;
            display: block;
        }
       .menu .b:hover{
             border-bottom: 2px solid #ff3300;
        }
          hr{
                position: absolute;
                margin-top: 60px;
                width: 100%;
            }
          
        .item{
            position: absolute;
            margin-left: 130px;
        }
        

            
            </style>
            <body>
               
                 <div class="menu">
            
                <h5><label class="pete">Peteso/</label><label class="shop">-Shop</label></h5>
                <input type="text" name="search" placeholder="what do you want to buy today..." /><ul><a href="index2.php" class="a">Shop</a></ul><hr style="width: 1px; margin-left: 90.7%; margin-top: -3%; background: grey; height: 70px"> 
                <ul><a href="login.php" class="b">Logout</a></ul>


               
                <input type="submit"  name="submit" value="" />
                                            </form>

        </div>
               
              
        <div class="contain">
            <form action="history.php" method="post">
         <table>
             <tr><th class="item">Item</th><th class="price">Price</th></tr>
             <hr>
             
           <?php
           require_once("connection.php");
           session_start();
           $query="select * from pcart where name='".$_SESSION['email']."'";
           $result=  mysqli_query($con, $query);
           if(mysqli_num_rows($result)>0):
           
               while($data=mysqli_fetch_assoc($result)):
               
                   ?>
                                                     <input type="hidden" name="item" value="<?php echo $data['items'] ?>" />
                                                     <input type="hidden" name="price" value="<?php echo $data['price'] ?>" />
                                                     <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />

             <tr><td><img src="<?php echo $data['image'] ?>" style=" width: 200px; margin: 50px; margin-top: 90px;"></td><td class="items"><?php echo $data['item'] ?></td><td class="price2"><?php echo $data['price'] ?></td><hr></tr>
             
             
              <?php
                    endwhile;
                endif;
                session_abort();
           ?>
               </table>
        </div>
       </body>
</html>

