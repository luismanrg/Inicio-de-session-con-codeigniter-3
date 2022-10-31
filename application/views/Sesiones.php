	<?php
// Validamos si el usuario tiene la sesión activa
if ($this->session->sessionId) {
    ?>

<div class="mx-auto" style="margin-top:5px; width:400px;">
	<div class="row">
		<div class="col" style='text-align: center;'>
			<img src='<?php echo "" . base_url("/public/perfil.jpg") . ""; ?>' style="margin: 0 auto; width:100px;">
			<br><p>
<?php echo "¡Hola ";
    foreach ($usuario as $row); ?>

	<?php
echo "" . $row->nombre . " " . $row->apellido . "!";
    ?>
	</p>
	<a href='<?php echo base_url("sesiones/logout"); ?>'>Cerrar Sesión</a>
		</div>
	</div>
</div>

	<table class="table table-bordered table-hover mx-auto" style="width:700px; margin-top:10px;">
	<tr>
		<th colspan='4' style='text-align:center;'>Lista de usuarios</th>
	</tr><tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Fecha de registro</th>
	</tr>

<?php
	foreach ($usuarios as $row);{?>
		<tr>
			<td><?php echo "" . $row->id . ""; ?></td>
			<td><?php echo " " . $row->nombre . " " . $row->apellido . ""; ?></td>
			<td><?php echo "" . $row->correo . ""; ?></td>
			<td><?php echo "" . $row->date . ""; ?></td>
		</tr>
<?php }?>

</table>
<?php
	} else {
    // Le mostramos el formulario si no esta activa
?>
<div class="mx-auto" style="margin-top:5%; width:400px;">
        <form class="needs-validation" novalidate action="<?php echo base_url("sesiones/login"); ?>" method="post">
            <h2>Iniciar Sesión</h2>
            <p>Entrar a tu cuenta</p>
            <br>
            <div class="row">
                <div class="col">
                    <input type="email" class="form-control" placeholder="Correo" name="correo" value="" required>
                    <div class="Invalid-feedback">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <input type="password" class="form-control" placeholder="Contraseña" name="pass" value="" required minlength="8">
                <div class="Invalid-feedback">
              </div>
          </div>
        </div><br>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Iniciar Sesión</button>
                </div>
            </div>
            <br>
        </form>
      </div>

<?php }?>
</div>
