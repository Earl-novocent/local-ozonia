<?php
// This file is abc.php

include 'aop.php';
include_once 'test2.php';
include_once 'app.php';
include 'test4.php';

$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename\n";
}

?>
