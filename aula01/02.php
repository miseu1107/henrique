<?php

$nome = "henrique";
echo $nome;
echo "<br>";
echo "<br>";

$idade = 25;
echo $idade;
echo "<br>";
echo "<br>";

$sexo = "Masculino";
echo $sexo;
echo "<br>";
echo "<br>";

$cidade = "São Paulo";
echo $cidade;
echo "<br>";
echo "<br>";

echo "<hr>";
//Boolean
$verdadeiro = true;
$falso = false;
var_dump($verdadeiro);
var_dump($falso);


//integer
$inteiro = 10;
var_dump($inteiro);
echo "<br>";

//float
$flutuante = 2.5;
var_dump($flutuante);
echo "<br>";

//string
$texto = "Texto";
var_dump($texto);
echo "<br>";

//array
$array = [];
var_dump($array);
echo "<br>";

//object - Aqui foi criado um objeto sem conteudo - Utilizado para orientação a objeto
$objeto = new stdClass;
var_dump($objeto);
echo "<br>";

//NULL
$nulo = NULL;
var_dump($nulo);
echo "<br>";

echo "<hr>";

echo "<br>";
$var = 10;
var_dump($var);
//os casos abaixo eu tenho conversão de tipos de variaveis. Caso o "$var" for 0 (e outros casos a parte), o boleano traz "falso"
echo "<br>";
$cast = (boolean) $var;
var_dump($cast);
echo "<br>";
$cast = (int) $var;
var_dump($cast);
echo "<br>";
$cast = (float) $var;
var_dump($cast);
echo "<br>";
$cast = (string) $var;
var_dump($cast);
echo "<br>";
$cast = (array) $var;
var_dump($cast);
echo "<br>";
$cast = (object) $var;
var_dump($cast);
echo "<br>";
$cast = (unset) $var;
var_dump($cast);
echo "<br>";

echo "<hr>";

//primeira forma de declarar constante
define("NUMERO", 2);
echo NUMERO;

echo "<hr>";