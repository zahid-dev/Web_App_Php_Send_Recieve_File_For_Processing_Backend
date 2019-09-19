<?php


ini_set('max_execution_time', 3000); 
$file = htmlspecialchars($_GET["file"]); // don't forget to sanitize this!


header('Content-type: image/jpg');

readfile($file);


?>