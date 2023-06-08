<?php
    $length = $_GET['length'];
    function generateRandomString($length) {
        return substr(str_shuffle(str_repeat($all_character='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($all_character)) )),1,$length);
    }
;
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password Generator</title>
    </head>
    <body>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <form action="" method="get">
            <div>
                <label for="length">Numero di caratteri:</label>
                <input type="number" name="length" id="length" value="<?= $length?>"> 
                <button>Genera</button>
            </div>
            
            <textarea name="" id="" cols="50" rows="1"><?= generateRandomString($length)?></textarea>
        </form>
    </body>
</html>