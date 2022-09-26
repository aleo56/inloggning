<?php

// För att det här exemplet ska fungera så måste det här skriptet ligga i en mapp som har
// en undermapp som heter tmp och i den mappen måste det finnas en fil som heter mydata.txt

if (isset($_POST['field1']) && isset($_POST['field2'])) {
    $data = $_POST['field1'] . ';' . $_POST['field2'] . "\n";  //Skapa en rad med semikolon-separerad data.
    $ret = file_put_contents('tmp/mydata.txt', $data, FILE_APPEND | LOCK_EX);
    if ($ret === false) {
        die('There was an error writing this file');
    } else {
        echo "$ret bytes written to file";
    }
} else {
    die('no post data to process');
}

echo "<br><a href='index.html'>Back to previous page.</a>";
