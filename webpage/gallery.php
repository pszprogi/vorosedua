
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galéria</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet_index.css"/>
</head>
<body style="body">

<div class="flex-elem container">
    <div class="flex-elem row">

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
    if ($row["tipusazonosito"] < 4 ){    
        print_r ('
            <div><a href="products.php?id=' . $row["tipusazonosito"] . '"class="button">' . $row["tipus"] . '</a></div>
                
            ');
    } 

}






?>
</div>
    </div>

</body>
</html>