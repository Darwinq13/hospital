<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>Ingresar Sugerencias</b> </legend>
<div class="text-center">
  <a href="<?php echo site_url("sugerencias/nuevo") ?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i> AGREGAR NUEVO </a>
</div>
<?php if ($listadoSugerencias): ?>
<table class="table table-striped table-border table-hover">
  <thead>
    <th>
      <tr>
        <th class="text-center">Sugerencia</th>

      </tr>
    </th>
  </thead>
  <tbody>
        <?php foreach ($listadoSugerencias->result() as $sugerenciaTemporal): ?>
      <tr>
      <td class="text-center"><?php echo $sugerenciaTemporal->id_sug ?></td>
      <td class="text-center"><?php echo $sugerenciaTemporal->sugerencia_sug ?></td>
      <td class="text-center">
        <a href="#" class="btn btn-warning"> <i class="glyphicon glyphicon-edit"></i></a>
        <a href="<?php echo site_url('sugerencias/borrar'); ?>/<?php echo $sugerenciaTemporal->id_sug ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php else :?>
  <h3 class="text-center"><b>No existen sugerencias</b></h3>
<?php endif; ?>
</table>
