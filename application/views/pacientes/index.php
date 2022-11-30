<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>Gestion de Pacientes</b> </legend>
<div class="text-center">
  <a href="<?php echo site_url("pacientes/nuevo") ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> AGREGAR NUEVO </a>
</div>
<hr>
<?php if ($listadoPacientes): ?>
  <table class="table table-striped table-border table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">APELLIDO</th>
        <th class="text-center">DIRECCION</th>
        <th class="text-center">CORREO</th>
        <th class="text-center">TELEFONO</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoPacientes->result() as $pacienteTemporal): ?>
      <tr>
      <td class="text-center"><?php echo $pacienteTemporal->id_pac ?></td>
      <td class="text-center"><?php echo $pacienteTemporal->nombre_pac ?></td>
      <td class="text-center"><?php echo $pacienteTemporal->apellido_pac ?></td>
      <td class="text-center"><?php echo $pacienteTemporal->direccion_pac ?></td>
      <td class="text-center"><?php echo $pacienteTemporal->correo_pac ?></td>
      <td class="text-center"><?php echo $pacienteTemporal->telefono_pac ?></td>
      <td class="text-center">
        <a href="<?php echo site_url('pacientes/borrar'); ?>/<?php echo $pacienteTemporal->id_pac ?>" class="btn btn-danger" onclick="return confirm ('¿Estas seguro de eliminar?')"> <i class="glyphicon glyphicon-trash"></i></a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php else :?>
  <h3><b>No existen Pacientes</b></h3>
<?php endif; ?>
