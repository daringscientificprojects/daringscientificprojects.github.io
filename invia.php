<?php
/* INVIO SEMPLICE */

$destinatario = "info@daringscientificprojects.org";

$subject = "Email da sito";
$email = $_POST["email"];

mail($destinatario,$subject,$email);

?>
<!DOCTYPE html>
<html class="full" lang="en">
   <head>
      <meta charset="utf-8">
      <title>Thankyou from DSP</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="cssbis/bootstrap.min.css">
      <link rel="stylesheet" href="cssbis/bootstrap.css">
      <link rel="stylesheet" href="cssbis/font-awesome.css">
      <link rel="stylesheet" href="cssbis/font-awesome.min.css">
      <link rel="stylesheet" href="cssbis/styletky.css">
      <link rel="stylesheet" href="cssbis/styleerr.css">
      
      <link rel="shortcut icon" href="img/favicon.ico" />
		
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
   </head>
   <body>
      <div class="coming-soon">
         <div class="container">
            <div class="logo"><img src="img/logoOK.png" alt="logo" width="300"></div>
            <h2>Thank You<br>We will inform you as soon as possible</h2>
            <div class="social">&nbsp;&nbsp;&nbsp;<a href="mailto:info@daringscientificprojects.org">&nbsp;info@daringscientificprojects.org</a>
            </div>
         </div>
      </div>
<!-- Javascript --> 
<script src="jsbis/jquery.1.11.1.js"></script> 
<script src="jsbis/bootstrap.min.js"></script> 
<script src="jsbis/custom.js"></script>
   </body>
</html>
