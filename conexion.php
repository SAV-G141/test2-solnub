<?php

function conexion(){

$host = "host=dpg-cvmpjg0dl3ps73fc1uvg-a.oregon-postgres.render.com";
$port = "port=5432";
$dbname = "dbname=test_02g1";
$user = "user=svilchez";
$password = "password=3PhlD0vzUrW2LAv4iDsNWmNpuQih30Oc";

$db = pg_connect("$host $port $dbname $user $password");

return $db;
}
?>