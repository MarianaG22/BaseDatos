 <html>
 <head>
 <title>InsertarDatos.php</title>
 <meta http-equiv='content-type' content='text/html; charset=UTF-8'/>
 </head>
 <body>
 <BODY BACKGROUND="imagenDeFondo.jpg">

 <form action='InsertarDatos.php' method='post'>
	<div>cédula  : <input type='text' name='cedula' value=" "/> </div>
	<div>nombre :   <input type='text' name='nombre' value=" "/> </div>
        <div>edad :   <input type='text' name='edad' value=" "/> </div>
 
	<div><input type='submit' name='insert' value='Insertar registro'/></div>
 </form>

 <?php 
	$link = new mysqli("localhost", "root", "", "programaciondos");
	
	$sql = "INSERT INTO tablita (cedula, nombre, edad) VALUES ('$_POST[cedula]', '$_POST[nombre]', '$_POST[edad]')";


 if ($link->query($sql) === TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $sql . "<br>" . $link->error;
 }


 ?>

 </body>
 </html>