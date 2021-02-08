<?php
/*
|
| $aachFilename: Designamos el nombre del archivo donde se guardarán los logros de ésta sección/tipo
| $fileWrite: Utilizamos una función para abrir el archivo designado y usar el modo "apéndice" para que todos los nuevos cambios se agreguen en una nueva línea del documento
| $fileContent: Definimos el contenido que vamos a escribir el nuestro archivo designado anteriormente con todos los datos ingresados del formulario
|
*/

$aachFilename = "./content/lavabuckets.yml";
if (is_writable($aachFilename)) {

    $fileWrite    = fopen($aachFilename, 'a');
    $fileContent  = "\n $aachObjective:\n   Name: $s\n   Type: $aachTier\n   DisplayName: $aachDisplayname\n   Message: $aachMessage\n   Rewards:\n      $aachReward: $aachDataReward";
    fwrite($fileWrite, $fileContent);
    fclose($fileWrite);

}
?>
