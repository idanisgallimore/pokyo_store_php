<?php 
    $name = $_POST['name'];
    if(trim($name)== ""){
        echo 
        "<div class=\"l-container\">
            <h3 class=\"page-title\">Please, go back and add a category name</h3>
            <a class=\"page-link\" href='admin.php?content=addcategory'>Go Back</a>
        </div>";
    }else{
        $query = "INSERT into categories(name) VALUES('$name')";
        $result = mysql_query($query);
        if($result){
            echo 
            "<div class=\"l-container\">
                <h3 class=\"page-title\">New category added</h3>
                <a class=\"page-link\" href='admin.php'>Home</a>
            </div>";
        }else{
            echo 
            "<div class=\"l-container\">
                <h3 class=\"page-title\">Error. Category not added.</h3>
                <a class=\"page-link\" href='admin.php?content=addcategory'>Go Back</a>
            </div>";
        }
    }


?>