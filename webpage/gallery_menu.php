<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Galéria</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet_menu.css"/>
    <link rel="stylesheet" type="text/css" href="css/stylesheet_divs.css" />   
</head>
<body style="body">

<?php
include 'divs.php';

include 'gitignore/mysql/mysql.php';

include 'get_pics_and_datas.php';

print($div_menu);

?>



<div class="flex-elem container">
    <div class="flex-elem row">

<?php




$mysql_select = "`tipus`, `tipusazonosito_szam`";
$mysql_from_and_others = "`tipusazonosito`";

$mysql_data_we_need = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select, $mysql_from_and_others);


$mysql_select_altipusok = "`altipus`, `tipusazonosito_szam`";
$mysql_from_and_others_altipusok = "`altipusazonosito`";

$mysql_data_we_need_from_altipusok = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_altipusok, $mysql_from_and_others_altipusok);


$gallery_names = array();


foreach ($mysql_data_we_need as $row ){
    //if ($row["tipusazonosito_szam"] < 3 or $row[" tipusazonosito_szam "] == 4){  
        print_r ('
        <div class = "menu_alap">
        '. $row["tipus"] .' </br> 

        ');
        foreach ($mysql_data_we_need_from_altipusok as $row_altipusok){ 
            if ($row_altipusok["tipusazonosito_szam"] == $row["tipusazonosito_szam"] ){
                print_r ('
 

                    <a href="gallery_pictures_of_pictures_and_jewelleries.php?id=' . $row["tipusazonosito_szam"] . '"class="button">' . $row_altipusok["altipus"] . '</a>

                ');
            } 
        }
        print('
        </div>
        ');

    //} 
    // elseif ($row["tipusazonosito"] == 3 ){    
    //     print_r ('
    //     <div class = "menu_alap">
    //     '. $row["tipus"] .'

    //     <a href="gvorosedua.hu"class="button">alma</a>
    //     <a href="gvorosedua.hu"class="button">alma</a>
    //     <a href="gvorosedua.hu"class="button">alma</a>




 



    //     </div>
    //     ');
    // }

}


//            <a href="gallery_pictures_of_pictures_and_jewelleries.php?id=' . $row["tipusazonosito"] . '"class="button">' . $row["tipus"] . '</a>
//             <div><a href="gallery_comicbook_menu.php"class="button">' . $row["tipus"] . '</a></div>


?>
</div>
    </div>

</body>
</html>