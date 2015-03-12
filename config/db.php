<?php

class DB {

    private $db;

    function __construct() {
        global $mysql_database; 
        global $mysql_host; 
        global $mysql_user; 
        global $mysql_password; 
        global $db_prefix; 
    
        $dsn = "mysql:dbname=$mysql_database;host=$mysql_host";
        $db = null;
        try {
            $this->db = new PDO($dsn, $mysql_user, $mysql_password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    function connected() {
        return ($this->db !== null);
    }

    function query($sql, $param) {
        $task = $this->db->prepare($sql);
        if ($param != null)
            foreach ($param as $k => $v)
                $task->bindValue($k, $v);
        $task->execute();
        return $task->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>