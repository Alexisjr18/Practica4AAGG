<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/practica4AAGG/server.php");

$error = $cliente->getError();
if ($error) {
    echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";

}

$result = $cliente->call("getAlumnos", array("datos" => "Alumnos"));
if ($cliente->fault) { //chequeamos una falla al momento de llamar al metodo
echo "<h2>Fault<7h2><pre>";
print_r($result);
echo "</pre>";
}

else { //No hay error al llamar el metodo
$error = $cliente->getError();
if ($error) {
    echo "<h2>Error</h2><pre>" . $error . "</pre>";
}
else {
    echo "<h2>Alumnos</h2><pre>";
    echo $result;
    echo "</pre";
    }
}
?>