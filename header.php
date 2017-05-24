<!DOCTYPE html>
<html lang="es">
<?php
$title = "Examen";
$description = "Página web para una empresa de válvulas industriales.";
$image = "https://www.quia.com/files/quia/users/sandrarosado/FormaGeometricas/circulo-anaranjado";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<meta name="description" content="<?php echo($description);?>">
<meta name="image" content="<?php echo($image);?>">
<meta itemprop="name" content="<?php echo($title);?>">
<meta itemprop="description" content="<?php echo($description);?>">
<meta itemprop="image" content="">
<meta name="og:title" content="<?php echo($title);?>">
<meta name="og:description" content="<?php echo($description);?>">
<meta name="og:image" content="<?php echo($image);?>">
<meta name="og:site_name" content="<?php echo($title);?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">
<link rel="icon" href="images/punto.PNG">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><?php echo($title);?></a>
</div>
<div id="navbar" class="collapse navbar-collapse">
<ul class="nav navbar-nav navbar-right">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Portada</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='about.php'){?> class="active" <?php };?>><a href="about.php">Sobre el proyecto</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='contact.php'){?> class="active" <?php };?>><a href="contact.php">Contacto</a></li>
</ul>
</div><!--/.nav-collapse -->
</div>
</nav>
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1><?php echo($title);?><br><small><?php echo($description);?></small></h1>
</div><!--/col-sm-12-->
