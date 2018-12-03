<div class="nav-container">
    <?php 
    if(isset($_SESSION['admin'])){
        echo 
      ' <div class="logo-container">
            <h1 class="logo-txt">Pokyo</h1>
            <img class="logo-img" src="../assets/logo.png">
        </div>
        <ul class="nav-links">
            <li class="nav-link"><a href="admin.php" class="nav-a">Home</a></li>    
            <li class="nav-link"><a href="admin.php?content=products" class="nav-a">Products</a></li>    
            <li class="nav-link"><a href="admin.php?content=contacts" class="nav-a">Contacts</a></li>    
            <li class="nav-link"><a href="admin.php?content=orders" class="nav-a">Orders</a></li>    
            <li class="nav-link"><a href="admin.php?content=logout" id="logout" class="nav-a">Logout</a></li>    
        <ul>';
    }else{
        echo 
        '<div class="logo-container">
            <h1 class="logo-txt">Pokyo</h1>
            <img class="logo-img" src="../assets/logo.png">
         </div>';
    }

    ?>
</div>