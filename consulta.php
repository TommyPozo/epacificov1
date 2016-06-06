<?php

$host='104.197.162.184';
$db='postgres';
$user='postgres';
$pass='lucas2';

try
{
   $conn=new PDO("pgsql:dbname=$db;host=$host", $user, $pass);
}
catch(PDOException $pe)
{
    die('Couldnt connect to the database beacuse: '. $pe->getMessage());
}

$q=$conn->query('select * from test');

if (!$q)
{
$ei=$conn->errorInfo();
die('Couldnt execute query because:'. $ei[2]);
}

while($r=$q->fetch(PDO::FETCH_ASSOC))
{
	echo $r['id'];
	echo $r['name'];
}

?>
