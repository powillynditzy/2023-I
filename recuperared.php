<?PHP
	require_once 'config/global.php';

	$conexion = mysqli_connect(HOSTNAME,USER,PASSWORD,BD);
		$consulta="select * from conjunta;";
		$resultado=mysqli_query($conexion,$consulta);
		
		if($conexion){
		    echo "atributo. miarreglo. arreglo. ";
			while($registro=mysqli_fetch_array($resultado)){
					echo " valor. objeto. atributo. idmercado. numero. ".$registro['idmercado']." ";
					echo " atributo. idindustria. numero. ".$registro['idindustria']." ";
					echo " atributo. conjunta. numero. ".$registro['conjunta']." fin. ";
			}
			
			echo "fin. fin. ";
			
			mysqli_close($conexion);
		}
		else{
			echo "error";
		}
		
			
	?>
