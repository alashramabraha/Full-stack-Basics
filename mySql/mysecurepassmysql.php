<?php

$rows['id'] = 67;

echo md5(md5($rows['id']) . 'password');

?>
