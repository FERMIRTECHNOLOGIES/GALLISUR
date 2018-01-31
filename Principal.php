<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Industrias GalliSur</title>
	<link href="css/jquery-ui.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jq.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/external/jquery/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script >
		var j$123 = $.noConflict(true);
	</script>
	<script src="js/jquery-latest.js"></script>
	<script  src="js/jquery.tablesorter.js"></script>
	<script src="js/jquery.tablesorter.pager.js"></script>

</head>
<body>
	<!-- Tabs -->
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Ingresar aves a planta</a></li>
		<li><a href="#tabs-2">Ingresar aves a cuarto frío</a></li>
		<li><a href="#tabs-3">Despachar</a></li>
		<li><a href="#tabs-4">Devoluciones</a></li>
		<li><a href="#tabs-5">Pedidos</a></li>
		<li><a href="#tabs-6">Decomisos</a></li>
    <li><a href="#tabs-7">Planilla</a></li>
		<li><a href="#tabs-8">Reportes</a></li>
	</ul>
	<div id="tabs-1">
		<div class="tab1-arriba">
			<img src="images/logo2.png" alt="" id="logo1">
			<div class="esp">
				<h3>Fecha de ingreso</h3>
		    <div id="datepicker"></div>
			</div>
		<div class="esp">
			<h3>Tipo de ave</h3>
	    <select id="selectmenu">
		   <option selected="selected">Pollos</option>
		   <option>Gallinas</option>
		   <option>Gallos</option>
	   </select>
		 <h3>Origen</h3>
		 <input type="text" id="txt_origen" name="z" value="" class="caja-texto">

		 <h3>Cantidad</h3>
		 <input type="number" id="txt_cantidad" name="zz" value="" class="caja-texto">
		</div>
		<div class="">
		 <h3>Aves muertas</h3>
		 <input type="number" id="txt_muertas" name="zzz" value="" class="caja-texto">

		 <h3>Camión</h3>
		 <input type="text" id="txt_camion" name="zzzz" value="" class="caja-texto">
		 <br>
		 <br>
		 <br>
		 <button id="btn_aceptar_ingreso" class="boton-tab1">Agregar registro</button>
		</div>
		<img src="images/logo1.png" alt="" id="logo2">
	</div>
	<br><br>
	<div class="tab1-abajo">
		<div style="width: 728px; margin: 10px auto;">
		</div>
		<div id="div_tabla"></div>
	</div>
	</div>
	<div id="tabs-2">
		Ingresar aves a cuarto frío
	</div>
	<div id="tabs-3">
		Despachar
	</div>
	<div id="tabs-4">
		Devoluciones
	</div>
	<div id="tabs-5">
		Pedidos
	</div>
	<div id="tabs-6">
		Decomisos
	</div>
	<div id="tabs-7">
		Planilla
	</div>
	<div id="tabs-8">
		Reportes
	</div>
</div>
<div id="mensaje" class="men">
	<div class="ui-widget">
	<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em;">
		<p><span class="ui-icon ui-icon-info" style="float: left; margin-right: .3em;"></span>
		<strong>Mensaje!</strong> <p id="message">""</p> </p>
	</div>
</div>
</div>
<div id="dialog" title="Eliminar ingresos a planta!">
	<p id="mensaje1"></p>
</div>
<div id="dialog_single_button" title="Mensaje!">
	<p id="mensaje2"></p>
</div>
<script src="js/elementos.js"></script>
<script src="js/funciones.js"></script>
</body>
</html>
