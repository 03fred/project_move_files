<?php

$path    = $_POST['directory'];
$newPath = $_POST['new_directory'];
$files    =  explode(";",trim(str_replace(" ","",$_POST['file'])));

if (is_dir($path) && is_dir($newPath)) {
    $diretorio = dir($path);
    while ($arquivo = $diretorio->read()) {
        if (in_array($arquivo, $files)) {
            copy($path . '/' . $arquivo, $newPath . '/' . $arquivo);
        }
    }

    $diretorio->close();
}

header('Location: form.php');
