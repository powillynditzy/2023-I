<?PHP
require_once 'config/global.php';
	$json=array();
		
        $conexion = mysqli_connect(HOSTNAME,USER,PASSWORD,BD);		
		$consulta="select * from alcaldia;";
		$resultado=mysqli_query($conexion,$consulta);
		if($conexion){
			echo "<table>";
			echo "<th> idalcaldia</th>";
			echo "<th> alcaldia</th>";
			while($registro=mysqli_fetch_array($resultado)){
				$result["idalcaldia"]=$registro['idalcaldia'];
				$result["alcaldia"]=$registro['alcaldia'];
				$json['Clasificador'][]=$result;
				
				echo "<tr>";
					echo "<td>".$registro['idalcaldia']." </td>";
					echo "<td>".$registro['alcaldia']." </td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
			json_encode($json);
			mysqli_close($conexion);
		}
		else{
			echo "error";
		}
		
			
	?>