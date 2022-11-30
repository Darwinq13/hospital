<legend class="text-center"> <i class="glyphicon glyphicon-plus-sign"></i> <b>NUEVO DOCTOR</b></legend>
<br><br><br>
<form class="" action="<?php echo site_url('doctores/guardarDoctor'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_doc" value="" class="form-control" placeholder="INGRESE SU NOMBRE" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="apellido_doc" value="" class="form-control" placeholder="INGRESE SU APELLIDO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCION</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="direccion_doc" value="" class="form-control" placeholder="INGRESE SU DIRECCION" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CORREO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="correo_doc" value="" class="form-control" placeholder="INGRESE SU CORREO ELECTRONICO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELEFONO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="telefono_doc" value="" class="form-control" placeholder="INGRESE SU NUMERO DE TELEFONO" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> GUARDAR </button>
      <a href="<?php echo site_url("doctores/index") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
    </div>
  </div>
</form>
<br><br><br>
