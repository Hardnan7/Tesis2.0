<td colspan="9">
  <?php echo __('%%id%% - %%rut%% - %%nombres%% - %%apellidos%% - %%email%% - %%fecha_nac%% - %%direccion%% - %%ciudad%% - %%telefono%%', array('%%id%%' => link_to($usuario->getId(), 'usuario_edit', $usuario), '%%rut%%' => $usuario->getRut(), '%%nombres%%' => $usuario->getNombres(), '%%apellidos%%' => $usuario->getApellidos(), '%%email%%' => $usuario->getEmail(), '%%fecha_nac%%' => false !== strtotime($usuario->getFechaNac()) ? format_date($usuario->getFechaNac(), "f") : '&nbsp;', '%%direccion%%' => $usuario->getDireccion(), '%%ciudad%%' => $usuario->getCiudad(), '%%telefono%%' => $usuario->getTelefono()), 'messages') ?>
</td>
