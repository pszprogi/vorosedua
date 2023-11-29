
<?php

$page_name = "Édua oldala";

if (isset($_GET['id'])){
    if ($_GET['id'] == 1){
      $page_name ="Ékszerek";} 
    elseif ($_GET['id'] == 2) { 
      $page_name = "Képek";} 
    elseif ($_GET['id'] == 3) { 
      $page_name = "Képregények";}
    elseif ($_GET['id'] == 4) { 
      $page_name = "Képregényillusztrációk";}   
    elseif ($_GET['id'] == 5) { 
      $page_name = "Rövid Képregények";}      

}


$div_page_name = "<div class = \"page_name\">" . $page_name . "</div>";

$div_menu = "<div class = \"menu\"> menu </div>";

$div_left_side = "<div class = \"left_side\"> nyeeeeee </div>";

$div_right_side = "<div class = \"right_side\"> bsgbh </div>";


































?>
