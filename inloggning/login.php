<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="index.html">Framsida</a>
    <br>
    <?php
    $user = "04afpleo";
    $pass = "DanskGranola23";
    if ($_POST["user"] == $user && $_POST["pass"] == $pass) {
        echo ("Välkommen Tillbaks, 04afpleo");
    } else {
        echo ("Inkorrekt användarnamn eller lösenord!");
    }

    ?>
</body>

</html>