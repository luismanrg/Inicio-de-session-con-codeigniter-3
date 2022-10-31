<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------- -----------------
| CARGADOR AUTOMÁTICO
| -------------------------------------------------- -----------------
| Este archivo especifica qué sistemas deben cargarse de forma predeterminada.
|
| Con el fin de mantener el marco lo más ligero posible, sólo el
| los recursos mínimos absolutos se cargan de forma predeterminada. Por ejemplo,
| la base de datos no se conecta automáticamente ya que no se supone
| se hace con respecto a si tiene la intención de usarlo. Este archivo permite
| usted define globalmente qué sistemas le gustaría cargar con cada
| solicitud.
|
| -------------------------------------------------- -----------------
| Instrucciones
| -------------------------------------------------- -----------------
|
| Estas son las cosas que puedes cargar automáticamente:
|
| 1. Paquetes
| 2. Bibliotecas
| 3. Conductores
| 4. Archivos auxiliares
| 5. Archivos de configuración personalizados
| 6. Archivos de idioma
| 7. Modelos
|
*/

/*
| -------------------------------------------------- -----------------
| Paquetes de carga automática
| -------------------------------------------------- -----------------
| Prototipo:
|
| $autoload['paquetes'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------- -----------------
| Bibliotecas de carga automática
| -------------------------------------------------- -----------------
| Estas son las clases ubicadas en system/libraries/ o su
| application/libraries/ directorio, con la adición del
| biblioteca 'base de datos', que es algo así como un caso especial.
|
| Prototipo:
|
| $autoload['bibliotecas'] = array('base de datos', 'correo electrónico', 'sesión');
|
| También puede proporcionar un nombre de biblioteca alternativo para ser asignado
| en el controlador:
|
| $autoload['bibliotecas'] = array('user_agent' => 'ua');
*/
// $autoload['libraries'] = array();
$autoload['libraries'] = array('database', 'email', 'session');
/*
| -------------------------------------------------- -----------------
| Controladores de carga automática
| -------------------------------------------------- -----------------
| Estas clases se encuentran en system/libraries/ o en su
| application/libraries/ directorio, pero también se colocan dentro de su
| propio subdirectorio y amplían la clase CI_Driver_Library. Ellos
| ofrecen múltiples opciones de controladores intercambiables.
|
| Prototipo:
|
| $autoload['drivers'] = array('cache');
|
| También puede proporcionar un nombre de propiedad alternativo para asignarlo en
| el controlador:
|
| $autoload['drivers'] = array('cache' => 'cch');
|
*/

$autoload['drivers'] = array();

/*
| -------------------------------------------------- -----------------
| Archivos auxiliares de carga automática
| -------------------------------------------------- -----------------
| Prototipo:
|
| $autoload['helper'] = array('url', 'file');
*/

// $autoload['helper'] = array('base_url');
$autoload['helper'] = array('url', 'form');

/*
| -------------------------------------------------- -----------------
| Carga automática de archivos de configuración
| -------------------------------------------------- -----------------
| Prototipo:
|
| $autoload['config'] = array('config1', 'config2');
|
| NOTA: Este artículo está diseñado para usarse SOLAMENTE si ha creado
| archivos de configuración. De lo contrario, déjelo en blanco.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------- -----------------
| Carga automática de archivos de idioma
| -------------------------------------------------- -----------------
| Prototipo:
|
| $autoload['idioma'] = array('lang1', 'lang2');
|
| NOTA: No incluya la parte "_lang" de su archivo. Por ejemplo
| "codeigniter_lang.php" sería referenciado como array('codeigniter');
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------- -----------------
| Modelos de carga automática
| -------------------------------------------------- -----------------
| Prototipo:
|
| $autoload['model'] = array('primer_modelo', 'segundo_modelo');
|
| También puede proporcionar un nombre de modelo alternativo para ser asignado
| en el controlador:
|
| $autoload['model'] = array('primer_modelo' => 'primero');
*/
$autoload['model'] = array();
