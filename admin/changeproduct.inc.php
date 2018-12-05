<?php
    include_once("../library/getThumb.php");
    $btn = $_POST['btn'];

    if($btn == "Delete Product"){
        $prodid = $_POST['prodid'];

        $query = "DELETE from products where prodid ='$prodid'";
        $result = mysql_query($query);
        if($result){
            echo "<div class=\"l-container\">
                <h3 class=\"page-title\">Product deleted</h3>
                <a class=\"page-link\" href='admin.php'>Home</a>
            </div>";
        }else{
            echo "<div class=\"l-container\">
                <h3 class=\"page-title\">Product not deleted. There was an error</h3>
                <a class=\"page-link\" href='admin.php?content=product&id=$prodid'>Home</a>
            </div>";
        }
    }else{
        $prodid =$_POST['prodid'];
        $name =$_POST['name'];
        $price =$_POST['price'];
        $quantity =$_POST['quantity'];
        $catid =$_POST['cat'];

        if(get_magic_quotes_gpc()){
            $name = stripslashes($name);
        }
        $name = mysql_real_escape_string($name);

        $pic = $_FILES['picture']['name'];
        if($pic){
            $thumbnail = getThumb($_FILES['picture']);
            $thumbnail = mysql_real_escape_string($thumbnail);
            $query = "UPDATE products 
            SET catid = '$catid', description ='$name', picture='$thumbnail', price='$price', quantity='$quantity'
            WHERE prodid = $prodid";
        }else{
            $query = "UPDATE products 
            SET catid = '$catid', description ='$name', price='$price', quantity='$quantity'
             WHERE prodid = $prodid";
        }

        $result = mysql_query($query);
        if($result){
            echo "<div class=\"l-container\">
                <h3 class=\"page-title\">Product updated</h3>
                <a class=\"page-link\" href='admin.php'>Home</a>
            </div>";
        }else{
            echo mysql_error();
            echo "<div class=\"l-container\">
                <h3 class=\"page-title\">Product not updated. There was an error</h3>
                <a class=\"page-link\" href='admin.php?content=product&id=$prodid'>Home</a>
            </div>";
        }
        

    }

?>