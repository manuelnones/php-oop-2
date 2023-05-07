<?php

require_once "./db.php";

try {
    echo $dogGame1->setReview(4);

} catch(Exception $err) {
    echo $err->getMessage();

}

var_dump($dogGame1);

?>



<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>