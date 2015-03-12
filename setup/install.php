<?php

$configCreate = '<span style="color:red">Failed</span>';
$myfile = fopen("../config/config.php", "w");
$result = fwrite($myfile, '
    <?php 
    
    $mysql_host = "'.$_SESSION['host_name'].'"; 
    $mysql_database = "'.$_SESSION['db_name'].'"; 
    $mysql_user = "'.$_SESSION['db_user'].'"; 
    $mysql_password = "'.$_SESSION['db_pass'].'"; 
    
    include "db.php";
    
    ?>');
fclose($myfile);
if($result != false) $configCreate = '<span style="color:green">Succeed</span>';


?>
    <fieldset> 
        <legend><?php echo $lang['installation']; ?></legend>
        <?php echo $configCreate; ?>
    </fieldset>
    