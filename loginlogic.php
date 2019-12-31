<?php 
    
    $user = $_POST['name']; // get the username or email from frontend.
    $pass = $_POST['pwd']; // get the password from frontend.
    $f=fopen("accounts.txt","r");
    $result = false; // checking key for verify the password.

    while(!feof($f)){
        $line = fgets($f); //line from the text file
        $line_array = explode(',', $line);
        if($line!=$line_array[0]){ // check if the line is empty or not
            $line_array = explode(',', $line); // split one line to array by comma
            $username_or_email = $line_array[0]; // get username or email from the text
            $password = trim($line_array[1]); // remove space if it contains string 
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