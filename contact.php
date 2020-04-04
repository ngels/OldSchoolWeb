<!DOCTYPE html>
<head>
<title>talk with us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="resources/style/beautifull.css">
</head>
<body>
<?php
include('header.php');
?>
<!-- The flexible grid (content) -->
<div class="row">
  <div class="main"> 
  <div style="padding:50px 200px">  
  <?php

include('connect.php');
try
{
  if(isset($_POST['senderEmail'])){
    // fetch form data
    $senderEmail = $_POST['senderEmail']; 
    $senderTelephone = $_POST['senderTelephone']; 
    $msg = $_POST['msg'];

    

  $req = $bdd->prepare('INSERT INTO contactmessages(senderEmail, senderTelephone, msg) VALUES(:senderEmail,:senderTelephone,:msg)');
  $req->execute(array('senderEmail'=> $senderEmail,'senderTelephone'=> $senderTelephone,'msg'=> $msg));
  ?> 
  <div class="alert alert-primary" role="alert"><?php echo "your message has been sent successfully";?></div>
  <?php
  }
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
  <h5 style="margin-bottom:10px">Leave us your message</h5>
  <form method="post" action=''>
  <div class="form-group">
    <label for="senderEmail">Email address</label>
    <input type="email" class="form-control" name="senderEmail" id="senderEmail" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="examplesenderTelephone">Telephone</label>
    <input type="text" class="form-control" name="senderTelephone" id="senderTelephone" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
  <label for="exampleFormControlTextarea1">Your message</label>
    <textarea class="form-control" name="msg" id="msg" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send</button>
  <small id="submitlHelp" class="form-text text-muted">We reach you back as fast as we can ;)</small>
</form>
</div>
  </div>
  <div class="side">
      <h2>About Us</h2>
      <h5>Welcome again to Sheriff Event</h5>
      <p>working with us you have 26 years experience at your service</p>
      <div class=""><img src="resources/images/concert.jpg" style="height:200px;width:100%"/></div>
      
      <h4>Just Tell us your need|Or be inspired by our galery</h4>
      <p>We organize any type of event</p>
      <div class="alert alert-primary" role="alert">
    Birthday

      <div class="" style=""><img src="resources/images/birthday.jpg" style="height:100px;width:100%"/></div><br>
      </div>
      <div class="alert alert-danger" role="alert">
    Wedding

      <div class="" style=""><img src="resources/images/wedding.jpg" style="height:100px;width:100%"/></div><br>
  </div>
  <div class="alert alert-dark" role="alert">
    Funeral
      <div class="" style=""><img src="resources/images/funeral.jpg" style="height:100px;width:100%"/></div>
  </div>
</div>
</div>
<script  src="essential.js" type="text/javascript" ></script>
<?php
include('footer.php')
?>
</body>