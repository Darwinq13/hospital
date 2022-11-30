<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>Gestion de Especialidades</b> </legend>
<div class="text-center">
  <a href="<?php echo site_url("especialidades/nuevo") ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> AGREGAR NUEVO </a>
</div>
<hr>
<?php if ($listadoEspecialidades): ?>
  <table class="table table-striped table-border table-hover">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">NOMBRE</th>
        <th class="text-center">DESCRIPCION</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($listadoDoctores->result() as $doctorTemporal): ?>
      <tr>
      <td class="text-center"><?php echo $doctorTemporal->id_esp ?></td>
      <td class="text-center"><?php echo $doctorTemporal->nombre_esp ?></td>
      <td class="text-center"><?php echo $doctorTemporal->descripcion_esp ?></td>
      <td class="text-center">
        <a href="<?php echo site_url('especialidades/borrar'); ?>/<?php echo $doctorTemporal->id_doc ?>" class="btn btn-danger" onclick="return confirm ('¿Estas seguro de eliminar?')"> <i class="glyphicon glyphicon-trash"></i></a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php else :?>
  <h3><b>No existen Especialidades</b></h3>
<?php endif; ?>
