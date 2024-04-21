<?php
//connexion a la BDD
define("BDD", "voyage2019");
function connect()
{
    try {
        $connect = new PDO("mysql:host=localhost;dbname=voyage2019", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    } catch (PDOException $e) {
        echo "problème de connexion à la BDD <br>" . $e->getMessage();
    }
    return $connect;
}
