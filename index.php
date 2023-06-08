<?php
    # Include functions from another php file
    include __DIR__ . '/functions.php';

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
        <!-- General titles -->
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>

        <!-- Form with GET method -->
        <form action="" method="get">
            <div>
                <label for="length">Numero di caratteri:</label>
                <input type="number" name="length" id="length" value="<?= $length?>"> 
                <button>Genera</button>
            </div>
            
            <!-- Text area for print generated password -->
            <textarea name="" id="" cols="50" rows="1"><?= generatePassword($length)?></textarea>
        </form>
    </body>
</html>