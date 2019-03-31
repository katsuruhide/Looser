<?php

include('db.php');

$sql="
INSERT INTO task
SET content='".$_POST['determine']."'
";
var_dump($sql);
$stmt = $pdo->query($sql);

header('Location: list.html');
exit;

?>