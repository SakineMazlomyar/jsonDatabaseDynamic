<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php

    $loginIsClicked = isset($_POST["ajax-button"]);
    if($loginIsClicked){

        $mail = $_POST["mail"];
        $password = $_POST["password"];
    
    }
    $databasJson = file_get_contents("database.json");
    $databas = json_decode($databasJson);


    //error_log() for log errors
    foreach($databas->register as $user){
        
                if($user->password == $password){
                    $s =  $password;
                    $m = $mail;
                    echo "you are signed in as: ".$s ." ".  $m;
                    return $s . $m;
                }
    }

        echo " you are not registered yet"

    ?>
        
    </body>
</html>