<html>
<head>
	<meta charset="utf-8">
	<title>string var_export() отладочная функция</title>
</head>

<body>

<?php #Использование var_export().
class SomeClass{
	private $x = 100;
}

$a=array(1,array("Programs hacking programs. Why?", "д'Артаньян"));
echo "<pre>"; var_dump($a); echo "</pre>";
$obj=new SomeClass();
echo "<pre>"; var_dump($obj); echo"</pre>";


?>



</body>
<html>
