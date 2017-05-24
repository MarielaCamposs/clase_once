<?php include('header.php');?>
<div class="row auto-clear">
<?php
$inspiracion = array_map('str_getcsv', file('data/paginas.csv'));
array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
array_shift($inspiracion);
$cat = $_GET['url'];
$all = count($inspiracion);
for($n=0; $n < $all; $n++){?>
  <?php if(($inspiracion[$n]["tipo"])==$cat){?>
  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
  <article>
  <figure>
    <img src="<?php print($inspiracion[$n]["imagen"])?>">
    <figcaption>Categoría: <a href="archive.php?url=<?php print($inspiracion[$n]["tipo"])?>"><?php print($inspiracion[$n]["tipo"])?></a></figcaption>
  <figure>
  <h3><a href="post.php?url=<?php print($n);?>"><?php print($inspiracion[$n]["title"])?></a></h3>
  <p><?php print($inspiracion[$n]["content"])?>. <a href="post.php?url=<?php print $n;?>">Ver más detalles</a></p>
  </article>
  </div><!--/col-sm-4-->
  <?php };?>
<?php };?>
</div><!--/row auto-clear-->
