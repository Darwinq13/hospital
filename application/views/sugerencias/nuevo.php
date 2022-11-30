<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>NUEVA SUGERENCIA</b></legend>
<br><br><br>
<form class="" action="<?php echo site_url('sugerencias/guardarSugerencia'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">SUGERENCIAS</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="sugerencia_sug" value="" class="form-control" placeholder="INGRESE UNA SUGERENCIA" required>
    </div>
  </div>
  <br>
  <br>
  <div class="row">
    <div class="col-md-12 text-center">
      <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> GUARDAR </button>
      <a href="<?php echo site_url("sugerencias/index") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
    </div>
  </div>



</form>
<br><br><br>
