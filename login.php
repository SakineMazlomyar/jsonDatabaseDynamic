<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="login.js"></script>
    </head>
    <body>
    <?php
      include("header.php");
    ?>
        <form method="post" action="login-attampt.php" style="position: relative; top: 5em;">
                <label>Enter your mail</label><br>
                <input name="mail" type="text"><br>

                <label>Enter your assword</label><br>
                <input name="password" type="text"><br>

                <input name="login-button" type="submit">

        </form>
        <ul style = "position: relative; top: 5em;">
        <a href="index.php">Go to index</a>
        </ul>

        <form id="ajax" method="post" action="login-json-attempt.php" style="position: relative; top: 20em;">
            <label>Get your name by ajax</label><br>
            <input id="mail" name="mail" type="text"><br>

            <label>Get your password by ajax</label><br>
            <input id= "password" name="password" type="text"><br>

            <input  name="ajaxButton" type="submit">
        <form>
        
       
        

        
        
    </body>
</html>