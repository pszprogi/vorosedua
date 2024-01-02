
<?php

include 'gitignore/mysql/mysql.php';

include 'get_pics_and_datas.php';

$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


//oldal neve
$page_name = "Édua oldalaj";

// if (isset($_GET['id'])){
//     if ($_GET['id'] == 1){
//       $page_name ="Ékszerek";} 
//     elseif ($_GET['id'] == 2) { 
//       $page_name = "Képek";} 
//     elseif ($_GET['id'] == 3) { 
//       $page_name = "Képregények";}
//     elseif ($_GET['id'] == 4) { 
//       $page_name = "Képregényillusztrációk";}   
//     elseif ($_GET['id'] == 5) { 
//       $page_name = "Rövid Képregények";}      

// }

$mysql_select_altipusok = "`altipus`, `tipusazonosito_szam`, `altipusazonosito_szam`";
$mysql_from_and_others_altipusok = "`altipusazonosito`";
        
$mysql_data_we_need_from_altipusok = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_altipusok, $mysql_from_and_others_altipusok);
  
if (isset($_GET['id'])){
  foreach ($mysql_data_we_need_from_altipusok as $row_altipusadatok){
    if ($_GET['id'] == $row_altipusadatok["altipusazonosito_szam"]){
      $page_name = $row_altipusadatok["altipus"];
    } 
  }
}

$div_page_name = "<div class = \"page_name\">" . $page_name . "</div>";


//menusor

function menu($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $url){
$mysql_select_altipusok = "`neve`, `cime`";
$mysql_from_and_others_altipusok = "`oldalak`";

$mysql_data_we_need_from_oldalcimek_a_menuhoz = datas_from_mysql_without_multiple ($mysql_server_name, $mysql_user_name, $mysql_password, $mysql_database_name, $mysql_select_altipusok, $mysql_from_and_others_altipusok);

print('<div class = "menu">'); 
  foreach ($mysql_data_we_need_from_oldalcimek_a_menuhoz as $row_oldalcimek_a_menuhoz){

    if (strpos($url,$row_oldalcimek_a_menuhoz["cime"]) !== false) {

    } else {
      print('<a href="http://localhost/vorosedua/' . $row_oldalcimek_a_menuhoz["cime"] . '"id = "link">' . $row_oldalcimek_a_menuhoz["neve"] . '</a>');
    }

  }
print('</div>');
}


//
$div_left_side = "<div class = \"left_side\"> nyeeeeee </div>";

$div_right_side = "<div class = \"right_side\"> bsgbh </div>";


































?>
