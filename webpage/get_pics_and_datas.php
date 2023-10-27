<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php

include 'mysql/mysql.php';

function datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select, $mysql_from_and_others ){
    $mysql_data_we_need = array();
    $database = new mysqli("$mysql_server_name", "$mysql_user_name", "$mysql_password", "$mysql_database_name");
    $mysql_query_code = "SELECT  $mysql_select FROM $mysql_from_and_others;";
    $mysql_result = mysqli_query($database, $mysql_query_code);
    if (mysqli_num_rows($mysql_result) > 0) {
        while ($row = mysqli_fetch_assoc($mysql_result)){
            $mysql_data_we_need [] = $row;
            //print_r ($row);
        }
    }

    return $mysql_data_we_need;

}





















?>
</body>
</html>