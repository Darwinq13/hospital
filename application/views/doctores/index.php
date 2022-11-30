<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>Gestion de Doctores</b> </legend>
<div class="text-center">
  <a href="<?php echo site_url("doctores/nuevo") ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> AGREGAR NUEVO </a>
</div>
<hr>
<?php if ($listadoDoctores): ?>
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
        <?php foreach ($listadoDoctores->result() as $doctorTemporal): ?>
      <tr>
      <td class="text-center"><?php echo $doctorTemporal->id_doc ?></td>
      <td class="text-center"><?php echo $doctorTemporal->nombre_doc ?></td>
      <td class="text-center"><?php echo $doctorTemporal->apellido_doc ?></td>
      <td class="text-center"><?php echo $doctorTemporal->direccion_doc ?></td>
      <td class="text-center"><?php echo $doctorTemporal->correo_doc ?></td>
      <td class="text-center"><?php echo $doctorTemporal->telefono_doc ?></td>
      <td class="text-center">
        <a href="<?php echo site_url('doctores/borrar'); ?>/<?php echo $doctorTemporal->id_doc ?>" class="btn btn-danger" onclick="return confirm ('¿Estas seguro de eliminar?')"> <i class="glyphicon glyphicon-trash"></i></a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php else :?>
  <h3><b>No existen Doctores</b></h3>
<?php endif; ?>
