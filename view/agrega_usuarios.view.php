<div class="row-flow">

	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left"><i class="
				icon-plus-sign icon-large"></i>Alta
				Usuario </div>			
		</div>

		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" id="add_user">

					<div class="control-group">
						<label>Nombre</label>
						<input class=input focused
						type="text" name="nombre" id="
						nombre" placeholder="Nombre"
						required>
					</div>

					<div class="control-group">
						<label>Apellidos</label>
						<input class="input" focused
						 type="text" name="apellidos" id="
						 apellidos" placeholder="Apellidos"
						 required>
					</div>

					<div class="control-group">
						<label>Sexo</label>
						<select name="sexo">
							<option value="Masculino">
							Masculino</option>
							<option value="Femenino">
							Femenino</option>
						</select>						
					</div>

					<div class="control-group">
						<label>Correo</label>
						<input class="input" focused
						 type="text" name="correo" id="
						 correo" placeholder="Correo"
						 required>
					</div>

					<div class="control-group">
						<label>Telefono</label>
						<input class="input" focused
						 type="text" name="telefono" id="
						 telefono" placeholder="Telefono"
						 required>
					</div>

					<div class="control-group">
						<label>Contraseña</label>
						<input class="input" focused
						 type="password" name="password" id="password" placeholder="Contraseña" required>
					</div>

					<div class="control-group">
						<label>Confirme contraseña</label>
						<input class="input" focused
						 type="password" name="password2" id="password2" placeholder="Contraseña" required>
					</div>

					<div class="control-group">
						<div class="controls">
							<button data-placement="right" title="Click
							para Salvar" id="save" name="save" class="btn 
							btn-inverse"><i class="icon-save icon-large"></i>
							Guardar
							</button>
							<script>								
								$(document).ready(function(){
									$("#save").click(function(){
										var formData = $('#add_user').serialize();
										$.ajax({
											type: "POST",
											url: "save_usuarios.php",
											data: formData,
											success: function(html){
												alert(html);
											}
										});
									});
								});
							</script>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>