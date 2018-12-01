<?php 
    // include_once("../library/login.php");
    // login();

    $poster = $_REQUEST['poster'];
    $txt = $_REQUEST['txt'];
    $date = $_REQUEST['date'];

    $query = "INSERT into messages(txt, poster, date) VALUES('$txt', '$poster', '$date')";
    $result = mysql_query($query) or die(mysql_error());

    if($result){
        echo 
        "<h3 class=\"page-title\">Message added</h3>
        <a class=\"page-link\" href='admin.php'>Home</a>";
    }
?>