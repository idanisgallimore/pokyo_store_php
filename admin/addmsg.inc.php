    
<h1 class="page-title">Add New Message</h1>
<?php 
   include_once("../library/login.php");
   login();
if(!isset($_SESSION['admin'])){
    echo "Please log in";
}else{
    $userid = $_SESSION['admin'];
    $date = date("Y-m-d");
    $query = "SELECT name from admin where userid = '$userid'";
    $result = mysql_query($query);
    $row = mysql_fetch_array($result) or die(mysql_error());
    $name = $row['name'];
    echo "<div class=\"form-container\">
        <form class=\"form-c\" action=\"admin.php\" method=\"post\">
            <textarea class=\"form-input txt-area\" name=\"txt\" placeholder=\"Enter your message\"></textarea>
            <input type=\"hidden\" name=\"poster\" value=\"$name\">
            <input type=\"hidden\" name=\"date\" value=\"$date\">
            <input  type=\"hidden\" name=\"content\" value=\"newmsg\">
            <input class=\"btn sub-btn\" type=\"submit\" value=\"Add message\">
        </form>
    </div>";

}
 ?>