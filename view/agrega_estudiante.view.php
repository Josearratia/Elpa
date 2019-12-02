<div class="row-flow">

	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left"><i class="
				icon-plus-sign icon-large"></i>Alta
				Estudiante </div>			
		</div>

		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" id="add_estudent">

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
						 type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
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
						 type="number" name="telefono" id="telefono" placeholder="Telefono" required>
					</div>


					<div class="control-group">
						<div class="controls">
							<button data-placement="right" title="Clickpara Salvar" id="save" name="save" class="btn btn-inverse"><i class="icon-save icon-large"></i>Guardar</button>
								<script>								
									$(document).ready(function(){
										$("#save").click(function(){
											var formData = $('#add_estudent').serialize();
											$.ajax({
												type: "POST",
												url: "save_estudiantes.php",
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

