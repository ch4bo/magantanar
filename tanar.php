
<?php
require_once 'config.php';
$lista="";
$sql="SELECT nev from tanar";
$stmt=$db->query($sql);

while($row=$stmt->fetch())
$lista.="<li>{$row['nev']}"."</li>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="p-5">
<h2>A tanárok:</h2>
<ul>
<li><?$lista?></li>
</ul>

</div>

</body>
</html>

