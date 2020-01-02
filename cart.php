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
    <body>
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
          
            .items{
                position: absolute;
                margin-top: 90px;
                margin-left: -30px;
            }
            

            
            .price2{
                position: absolute;
                margin-left: 450px;
                margin-top: 90px;
            }
           
            .total{
                position: absolute;
                left: 67%;
                width: 32%;
                top: 32%;
                border: 3px solid;
                height: 70%; 
            }
            
            .tot{
                position: absolute;
                margin-top: 100px;
                margin-left: 35%;
                font-size: 25px;
                
            }
            .tot hr{
                position: relative;
                margin-left: -55px;
                margin-top: -20px;
                background: grey;
                width: 240px;
            }
            .tot .tax{
                position: absolute;
                margin-left: 30px;
                margin-top: -3px;
                color: #ff0000;
            }
            .total input[type='submit']{
                position: absolute;
                width: 50%;
                left: 25%;
                margin-top: 65%;
                height: 50px;
                background: #ff3300;
                color: white;
                cursor: pointer;
                font-style: italic;
                border-radius: 10px;
                font-size: 30px;
                transition: 0.2s;
                
            }
            .total input[type='submit']:hover{
                background: #0000cc;
            }

            hr{
                position: absolute;
                margin-top: 580px;
                width: 100%;
            }
            .item{
                position: absolute;
                font-size: 30px;
                margin-left: 120px;
            }
            .price{
                position: absolute;
                font-size: 30px;
                margin-left: 751px;
            }
            .hr2{
                position: absolute;
                width: 100%;
            }
            td hr{
                position: absolute;
                margin-top: 50px;
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
         .menu  .a{
            margin: 0px;
            position: absolute;
            padding: 0px;
            left: 85.5%;
            width: 48px;
            margin-top: -20px;
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
        .menu .c{
             margin: 0px;
       position: absolute;
       padding: 0px;
       left: 75%;
        width: 116px;
            margin-top: -3px;
            color: wheat;
            font-size: 20px;
            text-decoration: none;
            display: block;
        }
        .menu .c:hover{
                         border-bottom: 2px solid #ff3300;

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
        td ul .d{
            text-decoration: none;
            color: white;   
            display: block;
            margin-left: -70px;
            margin-top: 20px;
            background:  #ff0000;
            border: 2px outset;
            width: 80px;
            text-align: center;
        }
        td ul .d:hover{
            background: #0000cc;
        }
            </style>
         
             <div class="menu">
            
            <form action="search.php" method="post">
                <h5><label class="pete">Peteso/</label><label class="shop">-Shop</label></h5>
                <input type="text" name="search" placeholder="what do you want to buy today..." /><ul><a href="history.php" class="c">Transactions</a></ul><hr style="width: 1px; margin-left: 83.%; margin-top: -1%; background:inherit; height: 70px"> 
                <ul><a href="index2.php" class="a">Shop</a></ul><hr style="width: 1px; margin-left: 89.9%; margin-top: -3.2%; background: grey; height: 70px"> 
                <ul><a href="login.php" class="b">Logout</a></ul>
               
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
            <form action="add.php" method="post">
        <div class="contain">
         <table>
             <tr><th class="item">Item</th><th class="price">Price</th></tr>
           <?php
           require_once("connection.php");
           $total=0;                                                                                                                
           $query="select * from cart";
           $result=  mysqli_query($con, $query);
           if(mysqli_num_rows($result)>0)
           {
               while($data=  mysqli_fetch_assoc($result))
               {
                   ?>                             <input type="hidden" name="item" value="<?php echo $data['items'] ?>" />
                                                     <input type="hidden" name="price" value="<?php echo $data['price'] ?>" />
                                                     <input type="hidden" name="image" value="<?php echo $data['image'] ?>" />



                                                     <tr><td><hr> <img src="<?php echo $data['image'] ?>" style="width: 200px; margin: 50px; margin-top: 90px;"></td><td class="items"> <h4 style="color: #0000cc"><?php echo $data['items'] ?></h4></td><td class="price2"> <h4 style="color: black"><?php echo $data['price'] ?></h4></td><hr></tr><tr><td style="position: absolute; margin-left: 770px; margin-top: -160px; "><ul><a href="delete.php?id=<?php echo $data['id']; ?>" class="d">remove</a></ul></td></tr>
            
                        
             
 <?php
 
                           $total=$total+$data['price'];

               }
           }
           $tax=$total*0.05;
           $net=$tax+$total;
           ?>
               </table>
             
            
        </div>
            <div class="total">
                                   
                                        
                <div class="tot">
                <p><Label>SubTotal:<?php echo $total ?></label></p>
                <p>+<label class="tax">Tax:  <?php echo $tax ?></label></p>
                <hr>
                <p><label class="net">Net Total:<?php echo $net ?></label></p>
                </div>
                                <p><input type="submit" value="BUY" name="buy" /></p>

            </div>
                                          
            </form>
    </body>
</html>
