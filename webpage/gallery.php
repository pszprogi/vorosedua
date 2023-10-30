<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="webpage/css/stiluslap_gomb.css" />
    <title>Galéria</title>
</head>
<body>

<?php



include 'gitignore/mysql/mysql.php';

include 'get_pics_and_datas.php';


$mysql_select = "`tipus`, `tipusazonosito`";
$mysql_from_and_others = "`termekek`";

$mysql_data_we_need = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select, $mysql_from_and_others);

$gallery_names = array();

foreach ($mysql_data_we_need as $row ){
//print_r ($row);
    //if ($row["id_category"] == $row["id_category_default"] and in_array ($row["name"], $gallery_names) == FALSE){
        //$gallery_names[] = $row["name"];
        print_r (
            '<body style="body">

            <div class="flex-elem container">

            <div class="flex-elem row">
            <div class="cell"><a href="products.php?id=' . $row["tipusazonosito"] . '">' . $row["tipus"] . '</a></div>
            </div>

            </div>'
            
            
            
            
            
            
        );
    //} 

}











?>
</body>
</html>