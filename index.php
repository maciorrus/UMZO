<?php

require_once 'config/db.php';
require_once 'classes/module.php';

$db = new DB();

$sql = "SELECT * FROM settings";
if(!$db->connected()) die("Database error");

$s = $db->query($sql, null);
$settings = $s[0];
unset($s);

global $module_creator;
$module_creator = new module_creator();

include_once 'views/model/'.$settings['model'].'/linker.php';

?>