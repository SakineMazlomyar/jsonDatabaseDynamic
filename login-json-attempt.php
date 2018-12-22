<?php


$databasJson = file_get_contents("database.json");
$databas = json_decode($databasJson);


//error_log() for log errors
foreach($databas->register as $u){
    
            if($u->password == $_POST['password']){
                $s =  $_POST['password'];
                //$m = $mail;
                echo "you are signed in as: ".$s; //." ".  $m;
                return $s; //. $m;
            }
}

    echo " you are not registered yet"

?>


