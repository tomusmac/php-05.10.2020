<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomasz Macura 4TiG</title>
    <style>p {font-size: 30px;margin: 0px;}</style>
</head>
<body>
<?php
for ($x=0;$x<=2;$x++)
{
    for ($y=0;$y<=2;$y++)
    {
        echo "<p>{$x}{$y}<p>";
    }
    echo "<p>----</p>";
}
?>
</body>
</html>