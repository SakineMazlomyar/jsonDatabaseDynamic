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
    ?>
        <form method="post" action="register-new.php" style="position: relative; top: 5em;">
            <label>Mail</label><br>
            <input name="mail" type="text"><br>

            <label>Password</label><br>
            <input name="password" type="text"><br>

            <input name="submit-button" type="submit">

        <form>
        <ul style = "position: relative; top: 5em;">
        <a href="index.php">Go to index</a>
        </ul>
    </body>
</html>