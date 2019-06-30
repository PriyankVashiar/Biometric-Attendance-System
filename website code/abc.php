
<!DOCTYPE html>
<html>
<body>

<?php
//$cars = array("Volvo", "BMX", "Toyota");

$cars[]=array();
$ravi="0";
$cars[]=$ravi;

$ravi="as";
$cars[]=$ravi;
print_r($cars);
 echo "<br>".$cars[1].$cars[2]."<br>";
 echo count($cars);

?>

</body>
</html>
