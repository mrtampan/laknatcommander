<?php

$file = readline('Masukan nama file command nya:');

$theFile = file_get_contents($file);

$allCommand = preg_split("/\r\n|\n|\r/", $theFile);


foreach($allCommand as $command){
    echo shell_exec($command);
}

?>