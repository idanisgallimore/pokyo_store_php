<h1 class="page-title">Add a new product</h1>

<?php 
    echo 
    "<div class=\"form-container\">
        <form class=\"form-c\" enctype=\"multipart/form-data\" action=\"admin.php\" method=\"post\">
            <select class='form-op' name=\"cat\">";

            $query = "SELECT name, catid from categories";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
                $catid = $row["catid"];
                $name = $row["name"];
                echo "<option value=\"$catid\">$name</option>";
            }
    echo    "</select>
            <input class=\"form-input\" type=\"text\" name=\"description\" placeholder=\"Product name\">
            <input class=\"form-input\" type=\"text\" name=\"price\" placeholder=\"Price\">
            <input class=\"form-input\" type=\"text\" name=\"quantity\" placeholder=\"Quantity/Stock\">
            <div class='uploadbtn-wrapper'>
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"1024000\">
                <button class='btn upload-btn'>Upload a pic</button>
                <input class=\"form-upload\" type=\"file\" name=\"picture\" placeholder=\"\">
            </div>
            <input  type=\"hidden\" name=\"content\" value=\"newproduct\">
            <input class=\"btn sub-btn\" type=\"submit\" value=\"Add Product\">
        </form>
    </div>";

?>