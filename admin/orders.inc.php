<div class="products-container">
    <?php 
        $links = array("Process Orders"=>"processorders", "Cancel Orders"=>"cancelorders", "Orders" => "listoforders");
        $length = count($links);
        
        foreach($links as $key => $value){
            echo 
            "<div class=\"link-cont\">
                <a class=\"link-a\" href=\"admin.php?content=$value\">$key</a>
            </div>";
        }
    ?>
</div>