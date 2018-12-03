<div class="products-container">
    <?php 
        $links = array("Add Product"=>"addproduct", "Add Category"=>"addcategory", "Browse Products"=>"browseproducts", "Out of Stock"=>"outofstock",);
        $length = count($links);
        
        foreach($links as $key => $value){
            echo 
            "<div class=\"link-cont\">
                <a class=\"link-a\" href=\"admin.php?content=$value\">$key</a>
            </div>";
        }
    ?>
</div>