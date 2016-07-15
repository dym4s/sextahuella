<?php

	//----CONEXION A LA BASE DE DATOS ---//

	//NOMBRE BD
	$base = "nombre";

	/*conectarme al servidor mysql*/
	$c=@mysql_connect("localhost","root","") or die ("imposible conectar");

	/* seleccionar base de datos*/
	mysql_select_db($base,$c);

	//--- MANIPULACION DE DATOS ---//

	//--- CONSULTA ---//
	/* variable tipo string con el contenido de la select */
	$consulta = "SELECT * FROM tabla";

	/* ejecutar la consulta */
	$resultado=mysql_query($consulta,$c);

	/*obtener el numero de filas*/
	$nfilas=mysql_num_rows($resultado);

	/*datos de la primera fila*/
	$fila=mysql_fetch_array($resultado);

	/*Para extraer el array en variables con el nombre de la columna*/
	$fila=mysql_fetch_assoc($resultado);
	extract($fila);

	/*datos de columnas de la fila obtenida*/
	for ($i=0; $i < $nfilas ; $i++) { 
		$fila[$i];
	}

	//-- INSERT --//
	/* variable tipo string con el contenido de la select */
	$consulta = "INSERT into tabla (columna,...) values('valor1','..',...)";

	/* ejecutar la consulta */
	$resultado=mysql_query($consulta,$c);

	/*Comprobacion OK insert*/
	if ($resultado) {
		//ok
	} else {
		//error
	}

	//obtenenmos el ultimo id
	$id = mysql_insert_id();

	//-- UPDATE --//
	$consulta = "UPDATE tabla SET col1 = val1, ... where ...";

	/* ejecutar la consulta */
	$resultado=mysql_query($consulta,$c);
	
	/*Comprobacion OK update*/
	if ($resultado) {
		//ok
	} else {
		//error
	}





?>