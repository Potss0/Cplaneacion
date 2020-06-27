<?php 
	include 'SimpleXLSX.php';
	include 'conexion.php';

	if (isset($_FILES['file'])) {

		if ( $xlsx = SimpleXLSX::parse( $_FILES['file']['tmp_name'] ) ) {
			$nombretemp=$_FILES['file']['tmp_name'];

			//nombre del archivo (base de datos)
			$nombre= $_FILES['file']['name'];
			$nombrepartido = explode(".", $nombre);
			echo "<h2>Database: $nombrepartido[0] <h2><br>";
			move_uploaded_file($nombretemp, 'files/'.$nombre);

			$numhojas= $xlsx->sheetsCount();
			echo "<h3>Número de hojas: $numhojas <h3><br>";
			for($hoja= 0; $hoja<$numhojas; $hoja++){

			$dim = $xlsx->dimension($hoja);
				$num_cols = $dim[0];
				$num_rows = $dim[1];
				$nombrehoja =$xlsx->sheetName($hoja);
				$fila=0;
				$columna = array();
				$campos = array();
			echo "<h4> $nombrehoja [$num_cols] [$num_rows] </h4>";
			$sql = "SELECT COUNT(*) as Cantidad FROM $nombrehoja Where";
			$sqlinsert="INSERT INTO $nombrehoja(";
			foreach ( $xlsx->rows($hoja) as $k => $r ) {
				if($fila == 0){
					//Leer nombres de los campos
					for($col = 0; $col<$num_cols;$col++){
						$columna[$col]=$r[$col];
					}
					$fila++;
				}
				else{
					for($col = 0; $col<$num_cols;$col++){
						if($col==$num_cols-1){
							$sqlinsert.="$columna[$col]) values (";

						}
						else{
							$sqlinsert.="$columna[$col], ";
						}
					}
					for($col = 0; $col<$num_cols;$col++){
					$campos[$col]=$r[$col];
					if($col==$num_cols-1){
						$sqlinsert.="'$campos[$col] ');";

					}
					else{ 
						$sqlinsert.="'$campos[$col]', ";

					}
				}
				for($col = 1; $col<$num_cols;$col++){
					$campos[$col]=$r[$col];
					if($col==$num_cols-1){
						$sql.=" $columna[$col] = '$campos[$col]' ";

					}
					else{ 
						$sql.=" $columna[$col] = '$campos[$col]' AND";

					}
				}
					$contar = mysqli_query($mysqli,$sql);
					$row  = $contar->fetch_assoc();
					if($row['Cantidad']==0){
						$insertar = $mysqli -> prepare($sqlinsert);
						$insertar->execute();

						$insertar->close();
					}

					$sql = "SELECT COUNT(*) as Cantidad FROM $nombrehoja Where";
					$sqlinsert="INSERT INTO $nombrehoja(";

					//Aquí se hacen las consultas 
			}


					 
				
			}

		  }
		  echo "Registros insertados.";
		  $mysqli->close();
		}
	}
		  

?>
