<?php 
    session_start();
    include_once("../library/login.php");
    login();
    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $query = "SELECT userid, password from admin where userid = '$userid' and password = '$password'";
    $result = mysql_query($query);
    $number = mysql_num_rows($result);

    if($number == 0){
        echo 
        "<h3 class=\"page-title\">Could not log in.</h3>
        <a class=\"page-link\" href='admin.php'>Home</a>";
    }else{
        $_SESSION['admin'] = $userid;
        header("Location: admin.php");
    }

    

?>