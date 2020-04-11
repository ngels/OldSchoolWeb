<!DOCTYPE html>
<html>
<head>
<title>Event list</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="resources/style/beautifull.css">
</head>
<body>

<?php
include('header.php');
include('eventList.php');
?>

<!-- The flexible grid (content) -->
<div class="row">
    <div class="fakeside">
    </div>
    <div class="main">
    <div class="eventList" style="margin-top:20px;">
          <?php
          foreach($eventList as $event) { 
              ?> <h3> <?php echo $event->title; ?> </h3> 
              <div class="fakeimg" style="display:inline-flex;height:200px;margin-bottom:30px;">
              <img src="<?php echo $event->poster;?>" style="height:100%;margin-right:20px" />
              <div>
                <h5><i class="fa fa-calendar" style="margin-right:10px"></i><?php echo $event->date;?></h5>
                <h5><i class="fa fa-map-marker" style="margin-right:10px"></i><strong><?php echo $event->lieu;?></strong></h5>                
                <p><i class="fa fa-bolt" style="margin-right:10px"></i><?php echo $event->moto;?></p>
                <p><?php echo $event->description;?><a href="contact.php">Learn more</a></p>
               </div>
     </div>
    <?php    
        }
          ?>  
          </div> 
    </div>
    <div class="fakeside">      
    </div>
</div>

<script  src="essential.js" type="text/javascript" ></script>
<!-- Footer -->
<?php
include('footer.php')
?>
</body>
</html>
