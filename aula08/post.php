<?php 

$host = "localhost";
$port = "5432";
$dbname = "aula08";
$user = "henrique";
$pass ="123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";

echo $con_string;

echo "<hr>";

$con = pg_connect ($con_string);
var_dump($con);

$sql = "insert into usuarios(usuario,senha) values('larissa vai brincar no parquinho','123')";
pg_query($sql);


