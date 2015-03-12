<?php

if (file_exists('config/config.php'))
    require_once 'config/config.php';
else    header ('location: setup/index.php');
require_once 'classes/module.php';

$db = new DB();

$sql = "SELECT * FROM ".$db_prefix."_settings";
if(!$db->connected()) die("Database error");

$s = $db->query($sql, null);
$settings = $s[0];
unset($s);

global $module_creator;
$module_creator = new module_creator();

include_once 'views/model/'.$settings['model'].'/linker.php';

?>