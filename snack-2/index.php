<?php
$userName = $_GET["name"];
$userEmail = $_GET["mail"];
$userAge = $_GET["age"];

if(strlen($name) > 3 && strpos("@" && ".",$mail) && is_numeric($age))
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