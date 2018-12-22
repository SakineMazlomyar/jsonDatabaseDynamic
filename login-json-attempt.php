<?php
    $json = array(
        "success"=> false,
        "password"=> "",
        "mail"=> "",
        "message"=>""

    );
    $loginIsClicked = isset($_POST["ajaxButton"]);
    if($loginIsClicked){

        $mail = $_POST["mail"];
        $password = $_POST["password"];

    }
    $databasJson = file_get_contents("database.json");
    $databas = json_decode($databasJson);


//error_log() for log errors
    foreach($databas->register as $user){
        
                if($user->password == $password){
                    $json["password"]=  $password;
                    $json["mail"] = $mail;
                    $json["success"] = true;
                    //echo "you are signed in as: ".$s ." ".  $m;
                    header("Content-Type: application/json");
                    echo json_encode($json);
                    return;
                }
    }
        $message = " you are not registered yet";
        $json["message"] = $message;
        header("Content-Type: application/json");
        echo json_encode($json);
      
        

?>


