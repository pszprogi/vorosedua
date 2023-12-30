
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" type="text/css" href="css/stylesheet_divs.css" />   
    <link rel="stylesheet" type="text/css" href="css/stylesheet_pictures_and_jewelleries.css" />   -->
    <link rel="stylesheet" type="text/css" href="css/newbutton.css" />   
    <title>Document</title>
</head>
<body>
    

<nav class="circular-menu">

  <div class="circle">
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
    <a href="" class="fa fa-2x"></a>
  </div>
  
  <a href="" class="menu-button fa fa-bars fa-2x"></a>

</nav>
<script>
    var items = document.querySelectorAll('.circle a');

for(var i = 0, l = items.length; i < l; i++) {
  items[i].style.left = (50 - 35*Math.cos(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
  
  items[i].style.top = (50 + 35*Math.sin(-0.5 * Math.PI - 2*(1/l)*i*Math.PI)).toFixed(4) + "%";
}

document.querySelector('.menu-button').onclick = function(e) {
   e.preventDefault(); document.querySelector('.circle').classList.toggle('open');
}
</script>

<h1 class="author">Demo by <a href="http://creative-punch.net" target="_blank">Creative Punch</h1>


</body>
</html>