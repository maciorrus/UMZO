<?php

session_start();
foreach ($_GET as $k => $v) {
    $_SESSION[$k] = $v;
}
?>