<?php
$userName = $_GET["name"];
$userEmail = $_GET["mail"];
$userAge = $_GET["age"];

var_dump($userName);
var_dump($userEmail);
var_dump($userAge);


if((strlen($userName) > 3) && (strpos("@" && ".",$userEmail)) && (is_numeric($userAge)))
{
    echo "Ok";
}
else
{
    echo "Nope";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snack-2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <form action="" method="get">
        <input type="text" name="name" placeholder="Name here">
        <input type="text" name="mail" placeholder="Email here">
        <input type="text" name="age" placeholder="Age here">
        <button type="submit">Send</button>
    </form>

</body>
</html>