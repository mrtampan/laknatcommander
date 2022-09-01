<?php

$file = readline('Masukan nama file command nya:');

if(empty($file)){
    echo "harap isi nama file terlebih dahulu";
    exit();
}

if(!file_exists($file)){
    echo "File tidak ditemukan";
    exit();
}


$theFile = file_get_contents($file);

$allCommand = explode("\n", $theFile);

foreach($allCommand as $command){
    echo shell_exec($command);
}

?>