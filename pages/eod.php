<?php 
$variables="helooo";

$string = <<<END_OF_STRING
    this is a multi-line
    string containing $variables
    and single quotes '
    and double quotes "
    and slashes \
    do not need to be escaped
END_OF_STRING;


echo $string;
?>