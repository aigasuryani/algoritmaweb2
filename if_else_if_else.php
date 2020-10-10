<html>
<head>
<title>PENGGUNAAN IF ELSE</title>
</head>
<body>
nilai A = 4 <br>
nilai B = 10 <br>
nilai C = 18 <br><br>

<?php
$a = 4;
$b = 10;
$c = 18;
if($a > $b)
{
echo "A lebih besar dari B";
}
else if($a > $c)
{
    echo "A lebih besar dari C";
}
else
{
    echo "A lebih kecil dari B dan C";
}
?>
</body>
</html>
