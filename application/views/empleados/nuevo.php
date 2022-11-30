<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>NUEVO EMPLEADO</b></legend>
<br><br><br>
<form class="" action="<?php echo site_url('empleados/guardarEmpleado'); ?>" method="post">
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">CÉDULA</label>
    </div>
    <div class="col-md-7">
      <input type="number" name="cedula_emp" value="" class="form-control" placeholder="INGRESE EL NÚMERO DE CÉDULA" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">APELLIDO</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="apellido_emp" value="" class="form-control" placeholder="INGRESE LOS DOS APELLIDOS COMPLETOS" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">NOMBRE</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="nombre_emp" value="" class="form-control" placeholder="INGRESE LOS DOS NOMBRES COMPLETOS" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">TELÉFONO</label>
    </div>
    <div class="col-md-7">
      <input type="number" name="telefono_emp" value="" class="form-control" placeholder="INGRESE SU NÚMERO DE TELÉFONO" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">DIRECCIÓN</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="direccion_emp" value="" class="form-control" placeholder="INGRESE SU DIRECCIÓN">
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4 text-right">
      <label for="">AREA</label>
    </div>
    <div class="col-md-7">
      <input type="text" name="area_emp" value="" class="form-control" placeholder="INGRESE LA AREA EN QUE TRABAJARA" required>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-7">
      <button type="submit" name="button" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> GUARDAR </button>
      <a href="<?php echo site_url("empleados/index") ?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> CANCELAR </a>
    </div>
  </div>
</form>
<br><br><br>
