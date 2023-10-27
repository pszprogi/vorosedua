
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php

include 'get_pics_and_datas.php';


$page_id = $_GET['id'];

// $only_pictures_needs_types = array(4, 5);
// $kepregeny = array("Képregény");

$mysql_select_product_type_and_id = "`id_product`, `id_category_default`, `reference`"; //ez kell, hogy tudjam, hogy melyik terméknek mi a típusa, illetve a reference a mi azonosítónk
$mysql_from_product_type_and_id = "`ps_product`";

$mysql_product_type_and_id = datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_type_and_id, $mysql_from_product_type_and_id);
//ez adja meg, hogy melyik terméknek mi a típusa, illetve a referencia számot is, ami a mi azonosítónk, illetve a kép azonosítója is,

$mysql_select_product_informations  = "`id_product`, `description`, `name`"; //ez adja meg a termék jellemzőit
$mysql_from_product_informations  = "`ps_product_lang`";

$mysql_product_informations = datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_informations, $mysql_from_product_informations);
//A termék azonosítója, illetve a leírása

foreach ($mysql_product_type_and_id as $pictures_needs){
    if ($pictures_needs["id_category_default"] == $page_id and ($page_id == 4 or $page_id == 5)){ //ékszer és kép
        $get_pictures = get_pictures ($pictures_needs["id_product"], $mysql_product_informations, $pictures_needs["reference"]);
    }
    elseif ($pictures_needs["id_category_default"] == $page_id and ($page_id == 3 or $page_id == 6 or $page_id == 7)){
      print ("Fejlesztés alatt");
    }


}




function get_pictures ($product_id, $mysql_product_informations, $picture_name){
  foreach ($mysql_product_informations as $row ){
    //print_r ($row);
    if ($row["id_product"] == $product_id){
      print('
        <figure>
          <img src="webpage/img/' . $picture_name . '.jpg"
            alt= "' . $row["name"] . '"
            title= "' . $row["name"] . '" //ezt írja ki, ha a képre húzod az egeret
            width="300" 
            height="300">
            <figcaption>' . $row["name"] . '"</figcaption>
        </figure>
        ');
    }
  }
}




?>
</body>
</html>




<?php

