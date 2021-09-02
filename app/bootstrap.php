<?php

//Load config
require_once 'config/config.php';
//Load helpers
require_once "helpers/url_helper.php";

//AutoLoad libraries
spl_autoload_register(function ($className) {
    require_once 'libraries/' . $className . '.php';
});
