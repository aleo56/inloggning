<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    /* function say_hello($name, $lang = "en")
{
    switch ($lang) {
        case "en":                    // if ($lang == "en")
            return "Hello " . $name . "<br>";
            break;
        case "sv":                    // if ($lang == "sv")
            return "Hej " . $name . "<br>";
        default:                    // else
            return "I don’t speak your language." . "<br>";
    }
}
echo say_hello("Holger");
echo say_hello("Holger", "sv"); */
    /*function do_nothing()
{
    global $a;
    $a = "foo";
    return true;
}
$a = "bar";
do_nothing();
echo $a;*/

    function getHtmlTable($input_array)
    {
        echo "<table>";
        echo "<tr>";
        echo "<td>Land<td>";
        echo "<td>Huvudstad<td>";
        echo "</tr>";
        foreach ($input_array as $land => $stad) {
            echo "<tr>";
            echo "<td>$land<td>";
            echo "<td>$stad<td>";
            echo "</tr>";
        }
    };
    $huvudstader = array(
        "Sverige" => "Stockholm",
        "Finland" => "Helsingfors",
        "Danmark" => "Köpenhamn"
    );

    echo getHtmlTable($huvudstader);

    ?>
</body>

</html>