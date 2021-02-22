<?php
/*
|
| Cargamos la configuruación del sitio web
|
*/
require "settings.php";

/*
|
| Traducimos los textos del sitio web conforme
| al idioma seleccionado en la configuración
|
*/
switch ($systemLanguage) {

  // Español, ajua
  case 'es_mx':
      include "lang_es.php";
    break;

  // Inglés, ok
  case 'en_us':
      include "lang_en.php";
    break;

  // Русский  
  case 'en_us':
      include "lang_ru.php";
    break;
}
?>
