<div class="row-flow">

	<div class="block">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left"><i class="
				icon-plus-sign icon-large"></i>Alta
				Curso </div>			
		</div>

		<div class="block-content collapse in">
			<div class="span12">
				<form method="post" id="add_curso">
					<div class="control-group">
						<label>Nombre</label>
						<input class=input focused
						type="text" name="nombre" id="nombre" placeholder="Nombre"required>
					</div>

					<div class="control-group">
						<div class="controls">
							<button data-placement="right" title="Click
							para Salvar" id="save" name="save" class="btn 
							btn-inverse"><i class="icon-save icon-large"></i>
							Guardar</button>
						</div>
						<script>								
							$(document).ready(function(){
								$("#save").click(function(){
									var formData = $('#add_curso').serialize();
									$.ajax({
										type: "POST",
										url: "save_curso.php",
										data: formData,
										success: function(html){
											alert(html);
										}
									});
								});
							});
						</script>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>