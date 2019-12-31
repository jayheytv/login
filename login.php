<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>

<head>
    <TITLE>Tarea 1 PHP</TITLE>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div align="center">
<form action ="loginlogic.php" method="POST">
    <h1> Porfavor escribe tus datos para crear una cuenta:</h1>
    <p>  
        <label>Usuario:</label><input type = "text"  name = "name" />
        <label>Password:</label><input type = "password" name = "pwd" />
        <br/><br/>
    </p>
    <input type = "submit" name="submit_btn" id = "submit" value = "Entrar"/>
    <input type = "reset"  id = "reset" value = "Borrar"/>
    
</form></div>
<div align="center">
<button onclick="window.location.href='./registerForm.php'">Registrate!</button></div>

</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>

$("form").submit(function(e){
    e.preventDefault();
    let name = $('input[name="name"]').val();
    let pwd = $('input[name="pwd"]').val();
    $.post("loginlogic.php", {name,pwd}, function(result){
        window.alert(result)
    });
});
</script>

</HTML>