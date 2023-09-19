<?php
function appendCodelex($inputString): string {
    return $inputString . "codelex";
}

$a = "asd ";
$output = appendCodelex($a);
echo $output;
