<?php
require_once('/var/www/html/corporate/api/config.php');
require_once('/var/www/html/corporate/api/functions.php');


//$obj = new select();
//$obj->get();

majika();

function majika(){
    $sth = $this->dbh->prepare("update articles set category = 'linux4' where id = 1");
    $sth->execute();
    echo "in";
}
