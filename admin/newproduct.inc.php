<?php 
include_once("../library/getThumb.php");

$catid = $_POST['cat'];
$name = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Removing any characters that can cause problems
if(get_magic_quotes_gpc()){
    $catid =stripslashes($catid);
    $name =stripslashes($name);
    $quantity =stripslashes($quantity);
    $price =stripslashes($price);
}
$catid =mysql_real_escape_string($catid);
$name =mysql_real_escape_string($name);
$quantity =mysql_real_escape_string($quantity);
$price =mysql_real_escape_string($price);

// call function that formats the thumbnail
$thumbnail = getThumb($_FILES['picture']) or die ( "Picture not uploaded");
$thumbnail =mysql_real_escape_string($thumbnail);

$query = "INSERT into products(catid, description,picture, price, quantity) VALUES('$catid','$name','$thumbnail','$price', '$quantity')";
$result = @mysql_query($query);
if($result){
    echo "<div class=\"l-container\">
        <h3 class=\"page-title\">Product added</h3>
        <a class=\"page-link\" href='admin.php'>Home</a>
    </div>";
}else{
    echo "<div class=\"l-container\">
        <h3 class=\"page-title\"> There was an error. Product not added.</h3>
        <a class=\"page-link\" href='admin.php?content=addproduct'>Try again</a>
    </div>";
}


?>