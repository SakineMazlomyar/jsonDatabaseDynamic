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
    $fruit = rand(0, 2);
   
    switch($fruit){
        case 0:
        $fruit = "banana";
        break;

        case 1:
        $fruit = "orange";
        break;

        case 2: 
        $fruit = "cucumber";
        break;
    };
    $databasJson = file_get_contents("database.json");
    $databas = json_decode($databasJson);

    $array = array();
    if(!isset($databas->fruits)){
        $databas->fruits = $array;  
    }
    //we push all values and the check if there is double and delete it
    array_push($databas->fruits, $fruit);
    $s = array_values(array_unique($databas->fruits));
    $databas->fruits = $s;

     print_r($s);
    
    file_put_contents("database.json", json_encode($databas));
    

    
    
 
    ?>
        <ul>
        <a href="index.php">Go to index</a>
        </ul>
        
    </body>
</html>