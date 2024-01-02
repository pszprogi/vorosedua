<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesheet_pictures_and_jewelleries.css" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet_divs.css" />   
    <title>
      Édua oldala
      <?php 

        include 'used_on_every_page.php';

      //   $mysql_select_altipusok = "`altipus`, `tipusazonosito_szam`, `altipusazonosito_szam`";
      //   $mysql_from_and_others_altipusok = "`altipusazonosito`";
        
      //   $mysql_data_we_need_from_altipusok = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_altipusok, $mysql_from_and_others_altipusok);
        
      //   foreach ($mysql_data_we_need_from_altipusok as $row_altipusadatok){
      //     print($_GET['id'] . " - " . $row_altipusadatok["altipusazonosito_szam"]);
      //     if ($_GET['id'] == $row_altipusadatok["altipusazonosito_szam"]){
      //       //print ($row_altipusadatok["altipus"]);
      //     } else { 
      //       //print ("Édua oldala");
      //     }
      //   }
      // ?>
    </title>
</head>

<body class = "body">

<?php

print ($div_page_name); //az oldal neve

$div_menu = menu($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $url);

print("<div class = \"main\">"); //a fő rész

print($div_left_side); //a baloldali oszlop

?>

<div class = "flex-elem container">

<div class="flex-elem row">
<?php


$page_id = $_GET['id'];  //az  oldal azonosítója


$mysql_select_product_details = "`azonosito`, `tipus`, `nev`, `leiras`, `tipusazonosito`, `altipusazonosito`"; 
$mysql_from_product_details = "`termekek`";

$mysql_product_details = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_details, $mysql_from_product_details);
//mert erre csak egyszer van szükségem 

// $mysql_select_product_types = "`tipusazonosito_szam`, `tipus`"; 
// $mysql_from_product_types = "`tipusazonosito`";

// $datas_from_mysql_for_product_types = datas_from_mysql ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_product_types, $mysql_from_product_types);


foreach ($mysql_product_details as $row_termekekbol_adatok){
    if ($row_termekekbol_adatok["altipusazonosito"] == $page_id){ 
        //$get_pictures_for_pictures_or_jewellery = get_pictures_for_pictures_or_jewellery ($types_for_select["tipus"], $mysql_product_details, $page_id);
        print('
        <img src = "img/' . $row_termekekbol_adatok["azonosito"] . '.jpg">
        ');
        print ("<br />");
    }

    //elseif ($types_for_select["tipusazonosito_szam"] == $page_id and ($types_for_select["tipusazonosito_szam"] == 3)){
      




    //}
}



// function get_pictures_for_pictures_or_jewellery ($product_types_name, $mysql_product_details, $page_id){
//   foreach ($mysql_product_details as $row ){

//     if ($row["tipusazonosito"] == $page_id){
//         // print('<figure>');
//         print('
//               <img src = "img/' . $row["azonosito"] . '.jpg">
//               ');
//         print ("<br />");
//     }

//   }
// }
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






