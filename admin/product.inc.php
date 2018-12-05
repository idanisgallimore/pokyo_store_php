<?php 
    $id = $_GET['id'];
    echo '<h2 class="page-title">Edit/Delete Product</h2>';

    $query = "SELECT * from products where prodid = '$id' ";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result, MYSQL_ASSOC);

    $name = $row['description'];
    $prodid = $row['prodid'];
    $catid = $row['catid'];
    $price = $row['price'];
    $quantity = $row['quantity'];

    $query = "SELECT name from categories where catid ='$catid'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result, MYSQL_ASSOC);
    
    $catname = $row['name'];

    echo "<div class=\"form-container\">
    <form class=\"form-c\" enctype=\"multipart/form-data\"action=\"admin.php\" method=\"post\">
        <input class=\"form-input\" name=\"name\" value=\"$name\">
        <input class=\"form-input\" name=\"price\" value=\"$price\">
        <input class=\"form-input\" name=\"quantity\" value=\"$quantity\">
        <select class='form-op' name=\"cat\">";
        $query = "SELECT name, catid from categories";
        $result = mysql_query($query);
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $tempcatid = $row['catid'];
            $name = $row["name"];
            if($tempcatid == $catid){
                echo "<option selected='selected' value=\"$tempcatid\">$name</option>";

            }else{
                echo "<option value=\"$tempcatid\">$name</option>";
            }
        }    
    echo "</select>
        <input  type=\"hidden\" name=\"content\" value=\"changeproduct\">
        <input  type=\"hidden\" name=\"prodid\" value=\"$prodid\">
        <div class='uploadbtn-wrapper'>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1024000\">
            <button class='btn upload-btn'>Upload a pic</button>
            <input class=\"form-upload\" type=\"file\" name=\"picture\">
        </div>
        <div class='btns-container'>
            <input class=\"btn sub-btn sub-btn-long\" type=\"submit\" name=\"btn\" value=\"Update Product\">
            <input class=\"btn sub-btn btn-danger sub-btn-long\" name=\"btn\" type=\"submit\" value=\"Delete Product\">
        </div>
    </form>
</div>"

?>