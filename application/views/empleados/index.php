<legend class="text-center"> <i class="glyphicon glyphicon-user"></i> <b>Gestion de Empleados</b> </legend>
<div class="text-center">
  <a href="<?php echo site_url("empleados/nuevo") ?>" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> AGREGAR NUEVO EMPLEADOS</a>
  </div>
  
<?php if ($listadoEmpleados): ?>
<table class="table table-striped table-border table-hover">
  <thead>
    <th>
      <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Cedula</th>
        <th class="text-center">Apellido</th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Direccion</th>
        <th class="text-center">Area</th>
      </tr>
    </th>
  </thead>
  <tbody>
        <?php foreach ($listadoEmpleados->result() as $empleadoTemporal): ?>
      <tr>
      <td class="text-center"><?php echo $empleadoTemporal->id_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->cedula_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->apellido_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->nombre_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->telefono_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->direccion_emp ?></td>
      <td class="text-center"><?php echo $empleadoTemporal->area_emp?></td>
      <td class="text-center">
        <a href="#" class="btn btn-warning"> <i class="glyphicon glyphicon-edit"></i></a>
        <a href="<?php echo site_url('empleados/borrar'); ?>/<?php echo $empleadoTemporal->id_emp ?>" class="btn btn-danger"> <i class="glyphicon glyphicon-trash"></i></a></td>
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
<?php else :?>
  <h3><b>No existen empleados</b></h3>
<?php endif; ?>
</table>
