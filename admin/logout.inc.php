<?php 
if(isset($_SESSION['admin'])){

    unset($_SESSION['admin']);

    echo 
    "<div class=\"l-container\">
        <h3 class=\"page-title\">You are logged out</h3>
        <a class=\"page-link\" href='admin.php'>Home</a>
    </div>";

}

?>