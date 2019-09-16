<?php
//24do0TrZ!zE0H@

$dir    = '.';
$files = preg_grep('/^([^.])/', scandir($dir));
// $files2 = scandir($dir, 1);// for files list in opposite order
foreach ($files as $file):
    echo '<a href="'.$file.'">'.$file.'</a><br>';
endforeach;