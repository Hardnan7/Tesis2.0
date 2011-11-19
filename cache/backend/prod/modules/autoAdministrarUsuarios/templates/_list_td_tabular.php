<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($usuario->getId(), 'usuario_edit', $usuario) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_rut">
  <?php echo $usuario->getRut() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombres">
  <?php echo $usuario->getNombres() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_apellidos">
  <?php echo $usuario->getApellidos() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $usuario->getEmail() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_fecha_nac">
  <?php echo false !== strtotime($usuario->getFechaNac()) ? format_date($usuario->getFechaNac(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_direccion">
  <?php echo $usuario->getDireccion() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_ciudad">
  <?php echo $usuario->getCiudad() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_telefono">
  <?php echo $usuario->getTelefono() ?>
</td>
