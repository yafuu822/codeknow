<?php
echo "in";
require_once('/var/www/html/corporate/api/config.php');
require_once('/var/www/html/corporate//api/functions.php');

echo "pass";

$obj = new select();
$obj->get();

echo "end";

class select {

    private $dbh;

    function __construct() {
       $this->dbh = connectDb();
    }

    public function get(){
        //$sth = $this->dbh->prepare("SELECT id,title,category  FROM articles");
        $sth = $this->dbh->prepare("update articles set category = 'linux2' where id = 1");
        $sth->execute();

        $threadData = array();

        while($row = $sth->fetch(PDO::FETCH_ASSOC)){
           $threadData[]=array(
             'id'=>$row['id'],
             'title'=>$row['title'],
             'category'=>$row['category'],
           );
var_dump($threadData);
        }

    }
}
