<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sip = "localhost";
$database_sip = "sip";
$username_sip = "root";
$password_sip = "";
$sip = mysql_pconnect($hostname_sip, $username_sip, $password_sip) or trigger_error(mysql_error(),E_USER_ERROR); 
?>