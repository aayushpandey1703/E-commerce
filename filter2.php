<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       
        
        <title>ecommerce</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    </head>
    <style>
          body{
        }
        .container{
            position: relative;
            height: 420px;
            margin-top: 9px;
            position: relative;
            width: 900px;
            border: outset 4px #999999;
            margin-bottom: 20px;
        }
        .h{
            position: absolute;
               margin-left:400px;
                margin-top: 60px;
                font-family: sans-serif;
        }
        h4{
            margin-top: 20px;
        }
        img{
            margin-top: 80px;
        }
        .sub input[type='submit']{
        
            width: 400px;
            margin-top: 20px;
            background-color: blue;
            height: 40px;
            font-family: serif;
            color: wheat;
            font-style: italic;
            cursor: pointer;
            transition: 0.01s;
        }
        .sub{
            position: absolute;
            margin-left:400px;
            margin-top: -120px;
            width: 300px;
            
        }
        .sub input[type='submit']:hover{
            background-color: #ff6600;
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
            margin-top: -5.7%;
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
            left: 85.5%;
            width: 40px;
            margin-top: -67px;
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
            margin-top: -67px;
            color: wheat;
            font-size: 20px;
            text-decoration: none;
            display: block;
        }
       .menu .b:hover{
             border-bottom: 2px solid #ff3300;
        }
        .menu .c{
             margin: 0px;
       position: absolute;
       padding: 0px;
       left: 75%;
        width: 110px;
            margin-top: -3px;
            color: wheat;
            font-size: 20px;
            text-decoration: none;
            display: block;
        }
        .menu .c:hover{
                         border-bottom: 2px solid #ff3300;

}
.filter{
            position: absolute;
            width: 100%;
            height: 33px;
            background: grey;
            margin-top: -50px;
        }
        .filter input{
            margin-left: 60px;
            background: none;
            border: none;
            color: wheat;
            cursor: pointer;
        }
        .filter input:hover{
            border-bottom: 2px solid #ff3300;
        }
    </style>
    <body>
       
        
        <div class="menu">
            <form action="search2.php" method="post">
                <h5><label class="pete">Peteso/</label><label class="shop">-Shop</label></h5>
                <input type="text" name="search" placeholder="what do you want to buy today..." /><ul><a href="history.php" class="c">transactions</a></ul><hr style="width: 1px; margin-left: 83.%; margin-top: -3%; background:inherit; height: 70px"> 
                <ul><a href="cart.php" class="a">cart</a></ul><hr style="width: 1px; margin-left: 89.9%; margin-top: -6.4%; background: grey; height: 70px"> 
                <ul><a href="login.php" class="b">logout</a></ul>
                <input type="submit"  name="submit" value="" />
            </form>
        </div>
         <div class="filter">
            <form action="filter2.php" method="post">
                <input type="submit" value="mobile" name="cate" />
                <input type="submit" value="cloths" name="cate" />
                <input type="submit" value="Domestic" name="cate" />
                <input type="submit" value="electrical appliances" name="cate" />
                <input type="submit" value="TV" name="cate" />
                <input type="submit" value="laptop" name="cate" />
                <input type="submit" value="tablets" name="cate" />
                <input type="submit" value="smart watch" name="cate" />
                <input type="submit" value="Shoes" name="cate" />

            </form>
        </div>
            <?php
            require_once('connection.php');
            $query="select * from ecom where category='".$_POST['cate']."'";
            $result=  mysqli_query($con, $query);
            if($result):
                $num=mysqli_num_rows($result);
                if($num>0):
                    while($product=mysqli_fetch_assoc($result))
                    :
                        ?>
        <div class="container">
            <form method="post" action="index2.php">
                     <div class="h">
                         <h4 style="color: black"> <label style="color: #0033cc">Product:  </label>     <?php echo $product['name'];?></h4>
                         <h4 style="color: black"><label style="color: #0033cc">Price:  </label>  <label>$</label><?php echo $product['price'] ?></h4>
                    </div>
                    <img src="<?php echo $product['image'];?>" style="position: relative; width:350px;" class="img-responsive" />
                                       <input type="hidden" name="image" value="<?php echo $product['image'] ?>" />

                    <input type="hidden" name="name" value="<?php echo $product['name'] ?>" />
                    <div class="sub">
                    <input type="submit" value="ADD TO CART" name="add" />
                    
                    <input type="hidden" name="price" value="<?php echo $product['price'] ?>" />

          

                </form> 
            <input type="submit" value="VIEW DESCRIPTION" name="description" />
            </div>
        </div>
            <?php
                        endwhile;
                    endif;
                    endif;
                    
                ?>
        
      <?php
      if(isset($_POST['add']))
      {
          require_once("connection.php");
          session_start();
           $_SESSION['name']=$_POST['name'];
             $_SESSION['price']=$_POST['price'];
            
          $query="insert into cart(image,items,price) values('".$_POST['image']."','".$_POST['name']."','".$_POST['price']."')";
          $result=  mysqli_query($con, $query);
          if($result)
          {
              echo("inserted");
          }else{
              echo("wrong");
          }
      }
      ?>
  
            </form> 
    </body>
</html>
