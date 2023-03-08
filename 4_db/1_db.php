<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>użytkownicy</title>
</head>
<body>
    <h4>użytkownicy z db</h4>
    <?php
        require_once "../scripts/connect.php";
        $sql = "SELECT * FROM `users`";
        $result = $conn->query($sql);
       // $user = $result->fetch_assoc();
        //echo $user["firstName"]

        while($user = $result->fetch_assoc())
        {
         echo <<< USER
         Imię i Nazwisko: $user[firstName] $user[lastName]
         Data Urodzenia: $user[birthday]
    
            <hr>
            USER;   
        }

    ?>
</body>
</html>