<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_postales = "localhost";
$database_postales = "postales";
$username_postales = "root";
$password_postales = "";
$postales = mysql_pconnect($hostname_postales, $username_postales, $password_postales) or trigger_error(mysql_error(),E_USER_ERROR); 
?>