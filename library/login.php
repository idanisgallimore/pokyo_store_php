<?php 
    function login(){
        $con = @mysql_connect("localhost", "idanis", "idanis");
        mysql_select_db("pokyo_store", $con);
    }


?>