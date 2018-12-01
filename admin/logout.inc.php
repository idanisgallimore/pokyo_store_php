<?php 
if(isset($_SESSION['admin'])){

    unset($_SESSION['admin']);

    echo "you are now logged out!";

}

?>