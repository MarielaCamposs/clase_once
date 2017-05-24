<?php include('header.php');?>

<?php
$inspiracion = array_map('str_getcsv', file('data/paginas.csv'));
array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
array_shift($inspiracion);
$all = count($inspiracion);
for($n=0; $n < $all; $n++){?>
  <div class="col-sm-3">
  <article>
  <figure>
    <img src="<?php print($inspiracion[$n]["imagen"])?>">
    <figcaption>Categoría: <a href="archive.php?url=<?php print($inspiracion[$n]["tipo"])?>"><?php print($inspiracion[$n]["tipo"])?></a></figcaption>
  <figure>
  <h3><a href="post.php?url=<?php print($n);?>"><?php print($inspiracion[$n]["title"])?></a></h3>
  <p><?php print($inspiracion[$n]["content"])?>. <a href="post.php?url=<?php print($inspiracion[$n])?>">Ver más detalles</a></p>
  <p><?php print($inspiracion[$n]["url"])?>. <a href="post.php?url=<?php print($inspiracion[$n])?>"></a></p>
  </article>
  </div><!--/col-sm-4-->

<?php };?>

<div class="col-sm-12">

</div>

<?php include('footer.php');?>
