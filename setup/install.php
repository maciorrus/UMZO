<?php

$configCreate = '<span style="color:red">FAILED</span>';
$myfile = fopen("../config/config.php", "w");
$result = fwrite($myfile, '
    <?php 
    
    $mysql_host = "'.$_SESSION['host_name'].'"; 
    $mysql_database = "'.$_SESSION['db_name'].'"; 
    $mysql_user = "'.$_SESSION['db_user'].'"; 
    $mysql_password = "'.$_SESSION['db_pass'].'"; 
    $db_prefix = "'.$_SESSION['db_prefix'].'"; 
    
    include "db.php";
    
    ?>');
fclose($myfile);
if($result != false) {
    $configCreate = '<span style="color:green">Succeed</span>';
}

$db_result = '<span style="color:green">Succeed</span>';
$dsn = "mysql:dbname=$_SESSION[db_name];host=$_SESSION[host_name]";
        
$db = null;
try {
    $db = new PDO($dsn, $_SESSION['db_user'], $_SESSION['db_pass']);
    $task = $db->prepare('
        CREATE TABLE  `'.getSValue('db_name').'`.`'.$_SESSION['db_prefix'].'_settings` (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `model` VARCHAR( 50 ) NOT NULL ,
        `template` VARCHAR( 50 ) NOT NULL ,
        `site_title` VARCHAR( 50 ) NOT NULL ,
        PRIMARY KEY (  `id` )
        ) ENGINE = MYISAM'
    );
    $task->execute();
    $task = $db->prepare('
        INSERT INTO  `'.getSValue('db_name').'`.`'.$_SESSION['db_prefix'].'_settings` (
        `id` ,
        `model` ,
        `template` ,
        `site_title`
        )
        VALUES (
        \'0\',  \'basic\',  \'basic\',  \''.$_SESSION['site_title'].'\'
        );'
    );
    $task->execute();
} catch (PDOException $e) {
    $db_result = '<span style="color:green">FAILED</span>';
}
?>
    <fieldset> 
        <legend><?php echo $lang['installation']; ?></legend>
        <p>Creating config file: <?php echo $configCreate; ?></p>
        <p>Connecting to database: <?php echo $db_result; ?></p>
    </fieldset>
    