<?php 

include('carga_estilos.php')
 ?>

<body>

    <?php include('navbar.php')?>
   <!-- <center><img src="images/UP_Victoria.png"></center> -->

<div class="container-fluid">
	<div class="row-fluid">
	   <?php include 'menu_usuarios.view.php' ?>
	   <div class="span4" id="">
		   <?php include'agrega_usuarios.view.php'?>
	   </div>
    </div>
</div>

</body>