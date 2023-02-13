<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

define('ROOT_DIR', __DIR__);

define('ENV', 'Cms');
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once 'engine/Bootstrap.php';