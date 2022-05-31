<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$filename = $_GET['filename'];
echo $filename;
$fileData = file_get_contents('php://input');
$fhandle = fopen($filename, 'wb');
fwrite($fhandle, $fileData);
fclose($fhandle);
echo("Done uploading");
?>