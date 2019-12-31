<?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['name'];
  $password = sha1($_POST['pwd']);
  $email = $_POST['email'];
  $confirmacion = sha1($_POST['2pwd']);
  $text = $username . "," . $password . "\n" . $email .  "," . $confirmacion . "\n" ;
    // echo $text;
  $fp = fopen('accounts.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo 'Gracias!, tus datos han sido guardados. Ahora puedes regresar e Iniciar Sesion';

    }
fclose ($fp);    
}
?> 