<?PHP
requiere_once 'config/global.php';	
include("pruebaConexion.php"); 


//realiza conexion
    $conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
        
        if ($conexion) {
            $idalcaldia= $_POST ['idalcaldia'];
            $alcaldia= $_POST ['alcaldia'];
            
            //Bloquear registros vacios
            if ($_POST["idalcaldia"]!==""){
                //registro a DB
               $consulta="insert into alcaldia values ('$idalcaldia','$alcaldia')";
            } else {
               echo "Llene los campos requeridos <br>";
            }
            $registro=mysqli_query($conexion,$consulta);
                //Confirmacion
               if ($registro) {
		mysqli_close($conexion);
                 echo "Registro almacenado. <br>";
               }
            else {
               echo "error en la ejecución del registro <br>";
            }
        }

			
	?>
