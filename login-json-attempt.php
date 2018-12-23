<?php
    header('Content-Type: application/json; charset=utf-8');
    $json = new stdClass();
    $json->success = false;
    $json->mail = '';
    $json->password= '';
    $json->message= '';

        $mail = $_POST["name"];
        $password = $_POST["passwordSecret"];

        $databasJson = file_get_contents("database.json");
        $databas = json_decode($databasJson);
    
        foreach($databas->register as $user){
            
                    if($user->password == $password){
                        $json->password=  $password;
                        $json->mail = $mail;
                        $json->success = true;
                        echo json_encode($json);
                        return;
                    
                    }
        }
    $message = "du är inte i systemet";
    $json->message= $message;
    echo json_encode($json);

      
        

?>


