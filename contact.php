<?php include('header.php')?>
<div class="row">
<div class="col-sm-12">
<h3>Contacto</h3>
<form name="contactform" method="post" action="enviar.php">
  <table width="450px">
  <tr>
  <td valign="top">
  <label for="first_name">Nombre *</label>
  </td>
  <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
  </td>
  </tr>
  <tr>
  <td valign="top">
  <label for="last_name">Apellido *</label>
  </td>
  <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
  </td>
  </tr>
  <tr>
  <td valign="top">
  <label for="email">Email *</label>
  </td>
  <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
  </td>
  </tr>
  <tr>
  <td valign="top">
  <label for="telephone">Telefono</label>
  </td>
  <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
  </td>
  </tr>
  <tr>
  <td valign="top">
  <label for="comments">Commentarios *</label>
  </td>
  <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
  </td>
  </tr>
  <tr>
  <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
  </td>
  </tr>
  </table>
</form>
</div><!--/col-sm-12-->
</div><!--/row-->
<?php include('footer.php')?>
