<h1 class="page-title">Browse Products</h1>
    <div class="form-container">
        <form class="form-c search-form" action="admin.php" method="get">
            <input class="form-input search-input" name="searchfor" placeholder="Enter Search Stuff">
            <input  type="hidden" name="content" value="search">
            <input class="btn sub-btn search-btn" type="submit" value="Search">
        </form>
    </div>
    <div class="products">
        <?php 
            $query = "SELECT * from products";
            $result = mysql_query($query);

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
        
        ?>

    </div>