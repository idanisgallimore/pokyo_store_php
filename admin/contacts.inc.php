<div class="products-container">
    <?php 
        $links = array("Employees"=>"employeecontact", "Customers"=>"customercontact");
        $length = count($links);
        
        foreach($links as $key => $value){
            echo 
            "<div class=\"link-cont\">
                <a class=\"link-a\" href=\"admin.php?content=$value\">$key</a>
            </div>";
        }
    ?>
</div>