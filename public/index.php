<?php

use TexLab\MyDB\DB;
use TexLab\MyDB\DbEntity;
use TexLab\MyDB\Runner;

include "../vendor/autoload.php";

$h = new Runner(DB::Link([
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'mybd'
]));

print_r($h->runSQL("SELECT `group`. `kod` FROM `group`,`users` WHERE `group`.`id` = `users`.`group_id` AND `login` = 'Pavel' AND `password` = '1234'"));
