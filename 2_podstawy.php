<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>Listy</h4>
    <ul>
        <li>wielkopolskie
        <ol>
            <li>Poznan</li>
            <li>Gniezno</li>
        </ol>
        </li>
        <li>dolnoslaskie
        <ol>
            <li>Wroclaw</li>
            <?php
            $city = "<li>Legnica</li>";
            echo $city;
            echo "<li>Boleslawiec</li>"
            ?>
        </ol>
        </li>
        <li>kujawsko-pomorskie
        <ol>
            <li>Poznan</li>
            <li>Gniezno</li>
        </ol>
        </li>
    </ul>
    </body>
</html>