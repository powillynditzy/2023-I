<?PHP
	require_once 'config/global.php';
        include("agrupacion.php"); 


//realiza conexion
    $conexion = mysqli_connect(HOSTNAME,USER,PASSWORD,BD);
        
        if ($conexion) {
            $tabla= $_POST ['tabla'];
            $campo1= $_POST ['campo1'];
            $campo2= $_POST ['campo2'];
            $red= $_POST ['red'];
            
            //Bloquear registros vacios
            if ($_POST["$red"]!==""){
                //registro a DB
               $consulta="create view $red as (select distinct $campo1, $campo2 ,
               count(*)/(select count(*)from $tabla) as $red from $tabla 
               group by $campo1, $campo2)";
               
            } else {
               echo "Llene los campos requeridos <br>";
            }
            $registro=mysqli_query($conexion,$consulta);
                //Confirmacion
               if ($registro) {
		mysqli_close($conexion);
                 echo "vista creada. <br>";
               }
            else {
               echo "error en la ejecuci贸n  <br>";
            }
        }

	
	?>
