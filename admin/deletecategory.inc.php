<?php 
    $catid = $_POST['cat'];
    

    $query = "DELETE from categories where catid = '$catid'";
    $result = mysql_query($query) or die(mysql_error());
    if($result){
        echo 
        "<div class=\"l-container\">
            <h3 class=\"page-title\">Category deleted</h3>
            <a class=\"page-link\" href='admin.php'>Home</a>
        </div>";
    }else{
        echo 
        "<div class=\"l-container\">
            <h3 class=\"page-title\">Error. Category not delete.</h3>
            <a class=\"page-link\" href='admin.php?content=addcategory'>Go Back</a>
        </div>";
    }

?>