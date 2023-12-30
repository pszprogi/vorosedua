<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesheet_pictures_and_jewelleries.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_divs.css" />   
    <title><?php 
    if ($_GET['id'] == 1){
      print ("Ékszerek");} 
    elseif ($_GET['id'] == 2) { 
      print ("Képek");} ?></title>
</head>

<body class = "body">

<?php

include 'gitignore/mysql/mysql.php';

include 'get_pics_and_datas.php';

include 'divs.php';


print ($div_page_name); //az oldal neve

print($div_menu); //menü

print("<div class = \"main\">"); //a fő rész

print($div_left_side); //a baloldali oszlop

?>

<div class = "flex-elem container">

<div class="flex-elem row">
<?php


$page_id = $_GET['id'];  //az  oldal azonosítója


$mysql_select_product_details = "`azonosito`, `tipus`, `nev`, `leiras`, `tipusazonosito`"; 
$mysql_from_product_details = "`termekek`";

$mysql_product_details = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_details, $mysql_from_product_details);
//mert erre csak egyszer van szükségem 

$mysql_select_product_types = "`tipusazonosito_szam`, `tipus`"; 
$mysql_from_product_types = "`tipusazonosito`";

$datas_from_mysql_for_product_types = datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_types, $mysql_from_product_types);


foreach ($datas_from_mysql_for_product_types as $types_for_select){
    if ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 1 or $types_for_select["tipusazonosito_szam"] == 2)){ 
        $get_pictures_for_pictures_or_jewellery = get_pictures_for_pictures_or_jewellery ($types_for_select["tipus"], $mysql_product_details, $page_id);
    }

    elseif ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 3)){
      




    }
}



function get_pictures_for_pictures_or_jewellery ($product_types_name, $mysql_product_details, $page_id){
  foreach ($mysql_product_details as $row ){

    if ($row["tipusazonosito"] == $page_id){
        // print('<figure>');
        print('
              <img src = "img/' . $row["azonosito"] . '.jpg">
              ');
        print ("<br />");
    }

  }
}
?>

<script>
function(){
return $(this).show(), $(this).css({
    "max-width": $(window).width() - 50,
    "max-height": $(window).height() - 50
  }), $("div.light-window").css({
    "padding-left": $(window).width() / 2 - $("div.light-content img").outerWidth() / 2,
    "padding-top": $(window).height() / 2 - $("div.light-content img").outerHeight() / 2
  })
}

</script>

</div>

</div> 
<!-- flex elem containeré -->


<?php
print ($div_right_side); //a jobboldali oszlop
?>


</body>
</html>






