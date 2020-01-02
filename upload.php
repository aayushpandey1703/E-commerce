
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <style>
        .container{
            
        }
    </style>
    <body>
        <div class="container">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <p><input type="file" name="image" value="" /></p>
            <p><input type="text" name="name" value="" /></p>
            <p><input type="text" name="price" value="" /></p>
            <p><select name="category">
                    <option></option>
                    <option>mobile</option>
                    <option>cloths</option>
                    <option>domestic</option>
                    <option>electrical appliance</option>
                    <option>TV</option>
                    <option>laptop</option>
                    <option>tablets</option>
                    <option>smart watch</option>
                    <option>shoes</option>
                </select></p>
            <p><input type="submit" value="upload" name="upload" /></p>
        <?php
        if (isset($_POST['upload'])) {
            $target = $_FILES['image']['name'];
            require_once('connection.php');
            $image=$_FILES['image']['name'];
            $name=$_POST['name'];
            $price=$_POST['price'];
            $category=$_POST['category'];
            $query="insert into ecom(image,name,price,category) values('$image','$name','$price','$category')";
            mysqli_query($con, $query);
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
            {
               header("location:index.php");
            }
            else{
                echo"wrong";
            }
            
        }
        ?>
        </form>
        </div>
    </body>
</html>
