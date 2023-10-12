<?php
    require_once "lib/nusoap.php";
        function getAlumnos($datos) {
            if ($datos == "Alumnos") {
            return join (",", array(
          "Bryan Jair Miceli Arce",
          "Cecilia Guadalupe Martines de León",
          "Alejandro Palacios Redorta",
          "Tiara Belen Solis Alvarez",
          "Imael Gutierrez Sosa"));
    }
    else {
        return "No existe una lista de alumnos";
    }
}
$server = new soap_server(); // creamos instancia de soap
$server->register("getAlumnos"); //indica el metodo o función a devolver
if (!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>    