<?php 
    $search_term = $_GET['searchfor'];

    if(get_magic_quotes_gpc()){
        $search_term = stripslashes($search_term);
    }

    $search_term = mysql_real_escape_string($search_term);

    echo '<h2 class="page-title">Search results</h2>';
    $query = "SELECT * from products where description REGEXP '$search_term' ";
    $result = mysql_query($query);

    if($result){
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $prodid = $row['prodid'];
            $name = $row['description'];
            $price = $row['price'];
            $stock = $row['quantity'];
            
            //Add a link to the href - line26
            echo 
            "<div class='prod-cont'>
                <p class='stock'>Stock: $stock</p>
                <img class='pro-img' src='showimage.php?id=$prodid'>
                
                <a class='prod-title' href=\"admin.php?content=product&id=$prodid\">$name</a>
                <h4 class='prod-price'>$$price</h4>
            </div>";
        }
    }else{
        echo 
        "<h3 class=\"page-title\">Search not found</h3>
        <a class=\"page-link\" href='admin.php?content=browseproducts'>Go back</a>";
    }


?>