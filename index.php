<html>
<body>
<div class="container">
<div class="row align-items-center">
<div class="col-12 align-self-center text-center p-4">
<h1>Escribe tu unidad de aprendizaje</h1>
<h1>Escribe tu nombre</h1>

<p>Usa esta interfaz html para recibir  los parámetros necesarios para armar query de la pregunta 5, 
	modifica los archivos graba.php y recupera.php para ejecutar el query que graba un registro
	en la bd y el que lo consulta.</p>

 <br>
<form action="recupera.php" method="get">
<button type="submit">consulta</button>
</form>
<br>
					
<form action="graba.php" method="post">
<fieldset>
  <legend> Ingrese datos </legend>
    <p><label>tabla: <input type="text" name="tabla" /></label> </p>
    <p><label>campo1: <input type="text" name="campo1" /></label> </p>
    <p><label>campo2:   <input type="text" name="campo2" /></label></p>
    <p><label>nombre de la red: <input type="text" name="red" /></label> </p>
    <p><input type="submit" value="enviar"/></p>
</fieldset>
</form>
</div>
</div>	
</div>
</body>
</html>
