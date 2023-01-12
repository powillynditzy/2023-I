<html>
	
<body>
<div class="container">
<div class="row align-items-center">
<div class="col-12 align-self-center text-center p-4">
<h1>Ejercicio de conexión</h1>
Crea una tabla llamada alcaldia con los campos idalcaldia(int) y nbalcaldia(text)
<br>
Edita los archivos graba.php  y recupera.php con tu usuario y contraseña de la base de datos
<br> <br>

<form action="recupera.php" method="get">
<button type="submit">consulta</button>
</form>
<br>
					

<form action="graba.php" method="post">
<fieldset>
  <legend> Ingrese alcaldia </legend>
    <p><label>idalcaldia:<input type="int" name="idalcaldia" /></label> </p>
    <p><label>nombre:   <input type="text" name="alcaldia" /></label></p>
    <p><input type="submit" value="enviar"/></p>
</fieldset>
</form>
</div>
</div>	
</div>
</body>
</html>
