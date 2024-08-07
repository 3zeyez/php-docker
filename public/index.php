<?php

require_once "../src/Bootstrap.php";

$bootstrap = new Bootstrap("running");

$bootstrap
    ->echoStatus()
    ->getPhpInfo();
