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
    include("header.php");
        $databasJson = file_get_contents("database.json");
        // we make an empty objectOfDatabs
        $databas = json_decode($databasJson);
     

        if(!isset($databas)){
            $databas= new stdClass();
            $databas->numberOfvister = 0; 
  
        }
        $databas->numberOfvister++;
       
      
        file_put_contents("database.json", json_encode($databas));
        
        echo $databas->numberOfvister;
        
       
    ?>
    <ul style="position: relative; top: 5em;">
        <li><a href="fruits.php">Go to fruits</a></li>
        <li><a href="register.php">Go to register page</a></li>
        <li><a href="login.php">Go to sign in page</a></li>
    </ul>


        
    </body>
</html>