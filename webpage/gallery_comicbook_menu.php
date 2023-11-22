<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/stylesheet_menu.css" />
    <title>Képregények</title>
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
    if ($row["tipusazonosito"] > 2 ){    
        print_r ('
            <div><a href="gallery_pictures_of_comicbook_styles.php?id=' . $row["tipusazonosito"] . '"class="button">' . $row["tipus"] . '</a></div>
        ');
    }

}






?>
</div>
    </div>
    
<?php
































?>

</body>
</html>