<?php
function connectDb() {
    try {
        return new PDO(DSN, DB_USER, DB_PASSWORD,array(
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8mb4`"
        ));
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}

