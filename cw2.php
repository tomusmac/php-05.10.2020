<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomasz Macura 4TiG</title>
    <style>#left,#right{float:left;width:48%}p{font-size:30px;margin:0}#left{border-right:1px solid #000}#right{margin-left:1%}</style>
</head>
<body>
<div id="left">
<p><i>Napisz pętle for wyswietlajaca liczby od 30 do 0 (w porządku malejącym) podzielne przez 3</i></p>
<?php
for($x=30;$x>=0;$x=$x-3){
echo "<p>{$x} </p>";
}
?>
</div>
<div id="right">
<p><i>Napisz skrypt rozwiązujący równanie kwadratowe.</i></p>
<?php
$a=1;
$b=-3;
$c=-4;
$delta=$b*$b-4*$a*$c;
echo ("<p>Δ=$delta<br>a=$a<br>b=$b<br>c=$c<hr></p>");
if ($delta>=0) {
    $x1=(-$b-sqrt($delta))/(2*$a);
    $x2=(-$b+sqrt($delta))/(2*$a);
    if($x1==$x2) {
        echo "<p>x ∈ {{$x1}}";
    } else {
    echo "<p>x ∈ {{$x1},{$x2}}";
    } 
}
if($delta<0){
    echo "<p>x ∈ {Ø}</p>";
}

?>
</div>
</body>
</html>