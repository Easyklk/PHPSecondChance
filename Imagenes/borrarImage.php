<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$filename = $_GET['filename'];
If (unlink('/home/tutsplus/files/' . $filename)) {
    // file was successfully deleted
    echo 'eliminado';
} else {
    // there was a problem deleting the file
    echo 'no eliminado';
}
?>