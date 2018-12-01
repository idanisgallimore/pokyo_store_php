<div class='main-section1'>
    <?php 
        $userid = $_SESSION['admin'];
        $query = "SELECT name from admin where userid = '$userid'";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        $name = $row['name'];
        echo "<h1 class=\"page-title\">Welcome, $name</h1>";
    ?>
</div>

<div class="main-section2">
    <?php 
        $dat = date("m/d/Y");
        echo "<h3 class='page-subtitle'>Today's date: $dat</h3>";
    ?>
    <h2 class="page-title">Message Board</h2>
    <a class="page-link msg-link" href="admin.php?content=addmsg">Add a message</a>

    <?php 
        include_once("../library/login.php");
        login();
        $query = "SELECT * from messages ORDER BY msgid DESC LIMIT 10";
        $result = mysql_query($query);

        while($row = mysql_fetch_array($result)){
            $text = $row['txt'];
            $poster = $row['poster'];
            $date = $row['date'];

            echo 
            "<div class='msg-container'>
                <h3 class='msg-author'>By: $poster</h3>
                <p class='actual-msg'>Message: $text</p>
                <h4 class='msg-date'>Message Date: $date</h4>
            </div>";
        }
    ?>
</div>