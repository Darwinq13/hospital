<legend class="text-center"> <i class="glyphicon glyphicon-plus-sign"></i> <b>NUEVA ESPECIALIDAD</b></legend>
<br><br><br>
<form class="" action="<?php echo site_url('especialidades/guardarespecialidades'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_esp" value="" class="form-control" placeholder="INGRESE EL NOMBRE DE LA ESPECIALIDAD" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DESCRIPCION</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="descripcion_esp" value="" class="form-control" placeholder="INGRESE LA DESCRIPCION" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> GUARDAR </button>
      <a href="<?php echo site_url("especialidades/index") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
    </div>
  </div>
</form>
<br><br><br>
