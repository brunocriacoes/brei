<?php

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: text/html; charset=utf-8');

    require __DIR__ . "/../config.php";
    require __DIR__ . "/rote.php";
    require __DIR__ . "/help.php";

    Rote();