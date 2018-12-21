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
        $submitedIsClicked = isset($_POST["submit-button"]);
        if($submitedIsClicked){
        
            $mail = $_POST["mail"];
            $password = $_POST["password"];
           
        }
        $databasJson = file_get_contents("database.json");
        $databas = json_decode($databasJson);

        //we create an array to save all users
        $register = array();
        //we create a use object
        $userObject = new stdClass();
        $userObject->mail = $mail;
        $userObject->password = $password;

        if(!isset($databas->register)){
            $databas->register =  $register;
            
        }
        
        
        $length = count($databas->register);
        for($i = 0; $i<$length; $i++){
            if($password == $databas->register[$i]->password){
                $s =  "du finns redan";
                echo $s;
                return $s; 
            
            } 
            /* if($password !== $databas->register[$i]->password){
               
            
            }  */
            
        }
        array_push($databas->register, $userObject);
        
        $databasJson = file_put_contents("database.json",json_encode($databas));

    ?>

        
    </body>
</html>