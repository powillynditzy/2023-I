<html>
	
<body>
<div class="container">
<div class="row align-items-center">
<div class="col-12 align-self-center text-center p-4">
<h1>Ingeniería del conocimiento</h1>
<h1>Escribe tu nombre</h1>

Agrupación: <br>

Escribir una interfaz html que reciba los parámetros necesarios para armar el siguiente query:

create view conjunta as (select distinct mercado, idindustria,count(*)/(select count(*)from empresa) as conjunta from empresa group by mercado, idindustria)

ejecutar el query con un php desde la interfaz<br>
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
