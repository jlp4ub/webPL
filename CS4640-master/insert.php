<?php
window.alert("insert.php");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
echo $request;
?>