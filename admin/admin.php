<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Inconsolata" rel="stylesheet"> 
    <title>Pokyo Shoes - Administation Site</title>
</head>
<?php 
    include_once("../library/login.php");
    login();
?>
<body>
    <?php include("header.inc.php");?>
    
    <div class="main-container">
        <?php 
        if(!isset($_REQUEST['content']))
        {   
            if(!isset($_SESSION['admin'])){
                include("login.html");
            }else{
                include("adminmain.inc.php");
            }

        }else{
            $content = $_REQUEST['content'];
            $nextpage = "$content.inc.php";
            include($nextpage);
        }
    
        ?>
    </div>



    <?php include("footer.inc.php");?>
</body>
</html>