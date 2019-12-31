<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>

<head>
    <meta charset="utf-8"/>
    <!-- The rest of your page's header here -->
    <head>
    <TITLE>Tarea 1 PHP</TITLE>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
    
</head>

<body>
<div align="center">
<form action ="createaccount.php" method="POST">
    <h1> Porfavor escribe tus datos para crear una cuenta:</h1>
    <ul style="list-style-type:none">
        <li><label>Nombre:</label><input type = "text"  name = "name" /></li>
        <li> <label>Correo:</label><input type = "text"  name = "email" /></li>
        <li><label>Password:</label><input type = "password" name = "pwd" /></li>
        <li><label>Confirmacion:</label><input type = "password" name = "2pwd" /></li>
        </ul>
        <br/><br/>
    
    <input type = "submit" name="submit_btn" id = "submit" value = "Guardar"/>
    
    </form></div> 

    <div align="center"><button onclick="window.location.href='./login.php'">Iniciar sesion</button></div> 

</body>


</HTML>