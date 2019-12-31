<?php 
    
    $user = $_POST['name']; 
    $pass = $_POST['pwd']; 
    $f=fopen("accounts.txt","r");
    $result = false; 

    while(!feof($f)){
        $line = fgets($f); 
        $line_array = explode(',', $line);
        if($line!=$line_array[0]){ 
            $line_array = explode(',', $line); 
            $username_or_email = $line_array[0]; 
            $password = trim($line_array[1]); 
            if($user == $username_or_email && $password == sha1($pass)){
                $result = true;
            }
        }
    } 
    if($result) {
        echo 'Has entrado con exito!';
    }else {
        echo 'Lo sentimos pero no podemos identificarte:(';
    }
    fclose($f);

?>