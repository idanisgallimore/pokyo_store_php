<h1 class="page-title">Out of Stock products</h1>
    <div class="form-container">
        <form class="form-c search-form" action="admin.php" method="get">
            <input class="form-input search-input" name="searchfor" placeholder="Enter Search Stuff">
            <input  type="hidden" name="content" value="search">
            <input class="btn sub-btn search-btn" type="submit" value="Search">
        </form>
    </div>
    <div class="products">
        <?php 
            $query = "SELECT * from products where quantity = 0";
            $result = mysql_query($query);
            if(mysql_num_rows($result) == 0){
                echo 
                "<div class=\"l-container\">
                    <h3 class=\"page-title\">There are no out of stock products</h3>
                    <a class=\"page-link\" href='admin.php?content=products'>Go Back</a>
                </div>";
                }else{
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
                        <div class='btns-container btns-container-small'>
                        
                            <input class=\"btn sub-btn sub-btn-small\" type=\"submit\" name=\"btn\" value=\"Restock Product\">
                            <input class=\"btn sub-btn btn-danger sub-btn-small\" name=\"btn\" type=\"submit\" value=\"Delete Product\">
                        </div>
                    </div>";
                }
            }
        
        ?>

    </div>