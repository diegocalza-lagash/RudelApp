<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hola Calza</h1>
<?php
	$m = new MongoClient();
	$db = $m->Rudel;
	$coll = $db->Tracing;
	$coll->insert(["Nombre:" => "Diego"]);
?>
</body>
</html>