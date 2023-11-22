<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="webpage/css/stylesheet_index.css" />
    <title><?php 
    if ($_GET['id'] == 3){
      print ("Képregények");} 
    elseif ($_GET['id'] == 4) { 
      print ("Képregényillusztrációk");}
    elseif ($_GET['id'] == 5) { 
       print ("Rövid képregény");} ?></title>
</head>

<body>
<?php

include 'gitignore/mysql/mysql.php';

include 'get_pics_and_datas.php';


$page_id = $_GET['id'];  //az  oldal azonosítója


$mysql_select_product_details = "`azonosito`, `tipus`, `nev`, `leiras`, `tipusazonosito`"; 
$mysql_from_product_details = "`termekek`";

$mysql_product_details = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_details, $mysql_from_product_details);
//mert erre csak egyszer van szükségem 

$mysql_select_product_types = "`tipusazonosito_szam`, `tipus`"; 
$mysql_from_product_types = "`tipusazonosito`";

$datas_from_mysql_for_product_types = datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_types, $mysql_from_product_types);


foreach ($datas_from_mysql_for_product_types as $types_for_select){
    if ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 3)){ 
        $get_pictures_for_pictures_or_jewellery = get_pictures_for_pictures_or_jewellery ($types_for_select["tipus"], $mysql_product_details, $page_id);
    }

    elseif ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 4)){ 
        $get_pictures_for_pictures_or_jewellery = get_pictures_for_pictures_or_jewellery ($types_for_select["tipus"], $mysql_product_details, $page_id);
    }
    elseif ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 5)){ 
        $get_pictures_for_pictures_or_jewellery = get_pictures_for_pictures_or_jewellery ($types_for_select["tipus"], $mysql_product_details, $page_id);
    }


}



function get_pictures_for_pictures_or_jewellery ($product_types_name, $mysql_product_details, $page_id){
  foreach ($mysql_product_details as $row ){
    //print_r ($row);
    if ($row["tipusazonosito"] == $page_id){
      print('
        <figure>
          <img src="img/' . $row["azonosito"] . '.jpg"
            alt= "' . $row["nev"] . '"
            title= "' . $row["leiras"] . '" //ezt írja ki, ha a képre húzod az egeret
            width="300" 
            height="300">
            <figcaption>' . $row["nev"] . '</figcaption>
        </figure>
        ');
    }
  }
}




?>
</body>
</html>




<?php

