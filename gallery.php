<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="resources/style/beautifull.css">
</head>
<body>
<?php
  include('header.php');?>
<div class="row">
  <div class="fakeside">
  </div>  
  <div  style="display:inline-grid;grid-template-columns: auto auto auto;grid-gap:20px 10px;margin:10px;margin-top:30px">
  <div style="grid-column-start:1;grid-column-end:4">
  <h3 >ALL EVENT PICTURES</h3>
  </div>
  <?php
  for($i=0;$i<25;$i++) {   // Changer ici pour reduire le nombre de photo
  ?>
    <div class="card" style="width: 18rem;">
      <img src="custon/images/<?php echo $i ?>.jpg" class="card-img-top" alt="..." style="height:200px;">
    </div>
  <?php
  }
  ?>
  </div>
  <div class="fakeside">
  </div>
</div>
<?php
include('footer.php')
?>
<script  src="essential.js" type="text/javascript" ></script>
</body>
</html>