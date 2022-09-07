<?php

$foo =  shell_exec("hostname -I");
$bar = explode(" ",$foo)[0];
echo $bar;

?>