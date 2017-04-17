<?php
/*
Hello
Before make changes for us, please register in github.com 
Only read below manual and then download your language.
then after change string for make proper strings for us, commit new changes .


** You must only change strings that on the right side of =
** If in the string find \ before " or ' ,please  don't remove that.
** Don't translate /restart and /menu
** Don't translate URLs
** Don't translate Channel names Like @tabadole_bartar
** Don't translate array keyword and ( after that or ) in the end of that string.
** Don't remove ; from end of strings.
** Don't remove . that is outside of " or ' \
** Dont't change or remove unichr(any code) from string;

Example of true translates:

$ln_version = 'Version';  ==>>  $ln_version = 'Versión';
$ln_inarray1 = array('Subtitle','Inline Button');  ==>>  $ln_inarray1 = array('Subtitular','Botón en línea');

$ln_ads['txt8'] = "You don't have any registered channel, please first ".
"use 'Add Channel' button " .unichr(0x203C)." \r\n" ;
==>>
$ln_ads['txt8'] = "No tiene ningún canal registrado, primero utilice ".
" el botón \"Añadir canal\"" .unichr(0x203C)." \r\n" ;

We explode some strings like previous example by " . "
so these strings are same:
"apple orange" and "apple "."orange" and "apple ".
"orange";

THANKS FOR YOUR PARTICIPATE
*/
include_once('../emoji.php');
$ln_version = 'Versión';
$ln_cancel = 'Cancelar';
$ln_finish = 'Terminar';
$ln_return = 'Regreso';
$ln_mainmenu = 'Menú principal';
$ln_array1 = array( 'Agregar canal' , 'Añadir Anuncio', 'Mostrar tiempos' , 'Informes');
$ln_array2 = array('Estado','Bandera','Eliminar canal','Herramientas');
$ln_array3 = array('Ayuda','Tarifa','Contáctenos','Idioma');
if(isset($arr1)) unset($arr1);
$arr1 = array( $ln_array1 , $ln_array2 , $ln_array3 );

$ln_inarray1 = array('Subtitular','Botón en línea');
$ln_inarray2 = array('Texto largo por foto','Efectos');
$ln_inarray3 = array($ln_mainmenu);
$arr1in1 = array( $ln_inarray1 , $ln_inarray2 , $ln_inarray3  );

$ln_meffect1 = array('Aqua','Boost','Bubbles');
$ln_meffect2 = array('Colorize','Cool','Fuzzy');
$ln_meffect3 = array('Gray','Light','Sepia');
$ln_meffect4 = array('Nostalgia','Old 1','Old 2');
$arr1in2 = array( $ln_meffect1 , $ln_meffect2 , $ln_meffect3, $ln_inarray4  );

$ln_key_link = 'Elija un botón!';
$ln_tools_txt = 'Aquí tenemos herramientas útiles para los administradores de canales ...';
$ln_rate_now = 'Califique ahora ;-)';

$ln_lang = 'Idioma';
$ln_add_channel = 'Agregar canal';
$ln_transparent_btn = 'Botón en línea';
$ln_add_ad = 'Añadir Anuncio';
$ln_showtimes = 'Mostrar tiempos';
$ln_remove_channel = 'Eliminar canal';
$ln_long_text = 'Texto largo por foto';
$ln_subtitle = 'Subtitular';
$ln_effect = 'Efectos';
$ln_abuse = 'Bandera';
$ln_tools = 'Herramientas';
$ln_contactus = 'Contáctenos';
$ln_rateus = 'Tarifa';
$ln_your_status = 'Estado';
$ln_help = 'Ayuda';
$ln_reports = 'Informes';

/* Accepting */
$ln_acp = array();
$ln_acp['accepted'] = 'Estimado usuario, Su canal aceptado.' . "\r\n". "Nombre de usuario del canal: @";
$ln_acp['crd_file'] = 'crd.es.php';

/* Register.php */
$ln_reg = array();
$ln_reg['txt1'] =   "Bienvenido a la popularidad :-)" . "\r\n" . "1. Introduce el nombre de tu canal.". "\r\n".  
"Ejemplo: Amor verdadero" . "\r\n". "\r\n".  
"Aviso: Suscribirse a los canales fraudulentos y la pornografía está prohibida.";
$ln_reg['txt2'] = '2. Ingrese el nombre de usuario de su canal sin @ ' . "\r\n" . "Ejemplo: jingo ";
$ln_reg['txt3'] = '3. Ingrese el número de miembros de su canal' . "\r\n" . "Example: 135". "\r\n".  
"Aviso: El número de miembros será revisado por un administrador. Por favor, ingrese un número real...". "\r\n";

$ln_reg['txt4']  = "Su canal ya está listo para registrarse," . "\r\n";
$ln_reg['txt4'] .= "Pero antes, debes agregar nuestro bot al administrador de tu canal." . "\r\n";
$ln_reg['txt4'] .= "Por lo tanto, en la lista de administrador de su canal, agregue @tabadol_kanal_bot y luego haga clic en
El botón \"Bot Añadido\"." . "\r\n";
$ln_reg['txt4'] .= "**Nota, no tenga miedo! Esto es seguro! , \r\n 
Esto es sólo para esto que podemos poner tu anuncio y otros en canales." . "\r\n";
$ln_reg['bot_added'] = 'Bot Añadido';
$ln_reg['txt5'] = 'Estimado usuario, este canal ya ha sido registrado por su cuenta';
$ln_reg['txt6'] = 'Estimado usuario, este canal ya ha sido registrado por otra persona.' . "\r\n";
$ln_reg['txt7'] = 'Puede registrar otros canales que posee ...' . "\r\n"; 

$ln_reg['txt8'] = $ic_tik_sabz. ' ' . 'Se ha registrado correctamente tu canal'. "\r\n" .
'Ahora debe continuar con otros pasos A través de los botones "Agregar anuncio" y "Mostrar tiempos". ' . "\r\n" .
'Nota: ** Su canal debe confirmar con el Administrador del Bot para participar en el intercambio publicitario.' . "\r\n". 
'Nuestra popularidad es tu popularidad, así que por favor Califícanos ...' . "\r\n".
'Si tiene alguna pregunta, envíenos un mensaje con el botón "Contáctenos" :-)' . "\r\n".
'Sigue nuestras noticias en @tabadole_bartar ' . "\r\n" ; 

$ln_reg['txt9'] =  'La operación no tiene éxito'. "\r\n";
$ln_reg['txt9'] .= 'Es posible que todavía no en su lista de administradores,'. "\r\n";
$ln_reg['txt9'] .= "Comprueba que hay @tabadol_kanal_bot en la lista de administradores e inténtalo de nuevo.
  Bot \"Añadido Botón\".". "\r\n";
/* Register.php END */

/* ads.php */
$ln_ads = array();
$ln_ads['txt1'] = 'Aquí debe presentar un anuncio para presentarlo a otros. ' . "\r\n" .
'Aviso: ** ¡Su anuncio no debe contener contenido como pornografía o fraude!' . "\r\n" ;
$ln_ads['txt2'] = 'Este canal no está registrado contigo, ingresa el nombre de usuario de tu propio canal. (sin @)';
$ln_ads['txt3'] = 'Este canal está en nuestra lista de bloque, por lo que no puedes enviar ningún anuncio a esto!';

$ln_ads['txt4'] = '2. Su anuncio puede ser texto o una combinación de texto y fotos' . "\r\n" ;
$ln_ads['txt4'] .= 'Si es texto, escriba su texto aquí,' . "\r\n" ;
$ln_ads['txt4'] .= "Si es una combinación de texto y foto, cargue o envíe una foto aquí." . "\r\n" ;
$ln_ads['txt4'] .= "Nota: ** Asegúrese de introducir la dirección de su canal (con @) en su texto" . "\r\n" ;

$ln_ads['txt5'] = "3. Ha introducido una foto, así que inserte un texto para eso." . "\r\n" ;
$ln_ads['txt5'] .= 'Aviso: ** su texto debe tener menos de 200 caracteres.' . "\r\n" ;
$ln_ads['txt5'] .= "Nota: ** Asegúrese de introducir la dirección de su canal (con @) en su texto" . "\r\n" ;

$ln_ads['txt6'] = "Su anuncio se registró correctamente. Ahora seleccione sus intervalos de tiempo".
" mediante el botón \"Mostrar tiempos\"" . "\r\n" ;
$ln_ads['txt7'] = "1. Por favor elija uno de sus canales de debajo de la lista:" . "\r\n ";
$ln_ads['txt8'] = "No tiene ningún canal registrado, primero utilice el botón \"Añadir canal\"" .unichr(0x203C)." \r\n" ;
/* ads.php END */

/* exchange.php */
$ln_ex['txt1'] = 'Se realizaron cambios';
$ln_ex['txt2'] = 'Ingrese el nombre de usuario de su canal sin @'  . "Ejemplo: jingo ";;
$ln_ex['txt3'] = 'Este canal no está registrado contigo, ingresa el nombre de usuario de tu propio canal. (sin @)';

$ln_ex['txt4'] =  unichr(0x25B6).' Nota: ** Los horarios son (UTC)' . "\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Nota: ** Todos los canales son miembros de 16:30 a 18:30 timeslot permanentemente.'."\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Aviso: ** No elimine el anuncio que ingrese en su canal hasta'.
' el final del intervalo de tiempo.' ."\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Aviso: ** No envíe ninguna publicación después del anuncio'.
' de entrada hasta el final del intervalo de tiempo.' ."\r\n";
$ln_ex['txt4'] .= '----------------------'. "\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25B6).' El número máximo de publicidad en cada momento es de dos, Uno normal como su anuncio y un VIP' ;
$ln_ex['txt4'] .= ", Por lo que su canal no tiene mucho bullicio" . unichr(0x1F60A) .", \r\n";
$ln_ex['txt4'] .= ' Por lo tanto, le ayudamos a aumentar sus miembros. '. unichr(0x1F339) ."\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25B6).' Ahora eres miembro del siguiente intervalo de tiempo:'."\r\n";
$ln_ex['txt4'] .= unichr(0x1F447);
$ln_ex['t2022'] = unichr(0x25B6).' '. '16:30 a 18:30  (UTC)';
$ln_ex['t1417'] = unichr(0x25B6).' '. '10:30 a 13:30  (UTC)';
$ln_ex['t2410'] = unichr(0x25B6).' '. '21:30 a 6:30am  (UTC)';
$ln_ex['td1417'] = 'Quitar 10:30 a 13:30 intervalo de tiempo';
$ln_ex['td2410'] = 'Quitar 21:30 a 6:30 am intervalo de tiempo';
$ln_ex['ta1417'] = 'Añadir 10:30 a 13:30 intervalo de tiempo (UTC)';
$ln_ex['ta2410'] = 'Añadir 21:30 a 6:30 am intervalo de tiempo (UTC)';
$ln_ex['txt5'] =  'Para añadir o eliminar los intervalos de tiempo, utilice los siguientes botones' . 
"\r\n ".unichr(0x1F53D)." \r\n" ;
$ln_ex['txt6'] =  "No tiene ningún canal registrado, primero utilice el botón \"Añadir canal\"" .unichr(0x203C)." \r\n" ;
$ln_ex['txt7'] =  "Por favor, elija uno de sus canales de la lista de abajo:" . "\r\n ";
/* exchange.php END */

/* del_channel.php */
$ln_dc['txt1'] = 'Nota: ** No puede quitar el canal que no es suyo. ' . "\r\n";
$ln_dc['txt1'] .= 'Nota: ** Puede agregar su canal de nuevo cuando lo desee.' . "\r\n";
$ln_dc['txt1'] .= 'Nota: ** Para prevenir abusador siniestro, asegúrese de quitar el bot
En la lista de los administradores de su canal.' . "\r\n\r\n";
$ln_dc['txt1'] .= 'Para eliminar tu canal introduce el nombre de usuario de tu canal sin @' . "\r\n" . "Ejemplo: jingo";
$ln_dc['txt2'] = 'Se eliminó el canal.' . "\r\n";
$ln_dc['txt3'] = 'Error al eliminar el canal, probablemente esté en la lista de bloqueo.'. "\r\n";
$ln_dc['txt4'] = 'No eres el propietario de este canal.' . "\r\n";
/* del_channel.php END */

/* lang.php */
$ln_ln['txt1'] = 'El lenguaje de Bot cambió.';
$ln_ln['txt2'] = 'Elija su idioma.';
$ln_ln['txt3'] = 'Menú renovado.' ."\r\n \r\n". "Ayúdenos a mejorar este idioma en:"."\r\n".
"Https://github.com/hamid80386/adbot";
$ln_ln['fa'] = 'فارسی';
$ln_ln['en'] = 'English';
$ln_ln['es'] = 'Español';
/* lang.php END */

/* report.php */
$ln_rp['txt1'] ="en construcción!";
/* report.php END */

/* contactus.php */
$ln_cu['txt1'] = 'Gracias por habernos elegido.';
$ln_cu['txt2'] = 'Escriba su mensaje:';
$ln_cu['txt3'] = "Su mensaje vino a nosotros\r\n".
				 "Lo leemos y responderemos si es necesario\r\n".
				 "Buenos deseos para ti :-) \r\n";
/* contactus.php END */

/* yourstatus.php */
$ln_ys['channel_name'] = 'Nombre del canal: ';
$ln_ys['username'] = 'Nombre de usuario: @';
$ln_ys['status'] = 'Estado: ';
$ln_ys['w4a'] = 'Espera a aceptar';
$ln_ys['accepted'] = 'accepted';
$ln_ys['block'] = 'blocl (black list)';
$ln_ys['ban'] = 'prohibición';	
$ln_ys['videoad'] = 'Anuncio de vídeo: ';
$ln_ys['textad'] = 'Anuncio de texto: ';
$ln_ys['has'] = ' Sí ';
$ln_ys['hasnt'] = ' No ';
$ln_ys['crd'] = ' ';
$ln_ys['ad_crd'] = ' ';
$ln_ys['your_status'] = "El estado de tu canal: \r\n";
/* yourstatus.php END */

/* report.php */
$ln_ra['txt1'] =  'Ingrese el nombre de usuario del canal que le ofende. ( sin @ ) ' ."\r\n" ."Por ejemplo: dream_channel ";			 
$ln_ra['txt2'] =  "Introduzca una razón para su informe:";
$ln_ra['txt3'] =  "Gracias, se registró su informe y lo consideraremos en serio.";
/* report.php END */

/* rateus.php */
$ln_ru['txt1'] = 'El bot sólo será efectivo si otros lo encuentran,' ."\r\n".
'Esta es una manera de intercambiar más y eventualmente más popular y aumentar su miembro.' ."\r\n". 
'Así que necesitamos su voto para que otros encuentren el bot,' ."\r\n" . 
'Para ello vaya al siguiente enlace y después de presionar el botón Inicio, agregue una buena calificación para nosotros'."\r\n" . 
"https://telegram.me/storebot?start=tabadol_kanal_bot"."\r\n".
" Esperamos tener un impacto efectivo en su aumento :-) ";
/* rateus.php END */

/* help.php */	
$ln_hlp['txt1'] = 'Hola querido usuario' . "\r\n" .
	'Gracias por elegir este bot' . "\r\n" . "\r\n" .
	"Vamos a familiarizarse con el funcionamiento del sistema de bot, cuando usted y otros registran un canal por".
	" que la publicidad, " ."\r\n".
	"Su anuncio de canal se mostrará en otros canales con el modo peer to peer,". "\r\n" .
	'Esto significa que en cada intervalo de tiempo de intercambio, su anuncio se mostrará en otro canal y' .
	'El anuncio de otro canal se mostrará en su canal,' ."\r\n".
	'En el siguiente intervalo de tiempo, tu anuncio se mostrará en el canal nuevo y el anuncio de otro canal se mostrará en tu canal.' . "\r\n".
	'Este ciclo continúa hasta que coloque su anuncio en todos los canales del grupo.'."\r\n".
	'Después del final del ciclo se repetirá Publicidad en el grupo.'."\r\n"."\r\n".
	"Si los miembros de tu canal estuvieran más allá de tu grupo, debes eliminar tu canal y agregar de nuevo los datos de los nuevos miembros,".
	" Esto es porque usted tiene sus anuncios en un grupo más alto cuando sea apropiado." . "\r\n" .
	"Grupos basados en el número de miembros: " . "\r\n" .
	'1 Hasta 20 miembros' . "\r\n" .
	'21 Hasta 100 miembros' . "\r\n" .
	'101 Hasta 300 miembros' . "\r\n" .
	'301 Hasta 500 miembros' . "\r\n" .
	'501 Hasta 800 miembros' . "\r\n" .
	'801 Hasta 1000 miembros' . "\r\n" .
	'1K+1 Hasta 2K miembros' . "\r\n" .
	'2K+1 Hasta 4K miembros' . "\r\n" .
	'4K+1 Hasta 7K miembros' . "\r\n" .
	'7K+1 Hasta 10K miembros' . "\r\n" .
	'10K+1 Hasta 30K miembros' . "\r\n" .
	'30K+1 Hasta 60K miembros' . "\r\n" .
	'60K+1 Hasta 100K miembros' . "\r\n" .
	'100K+1 Hasta 200K miembros' . "\r\n" .
	'200K+1 Hasta 300K miembros' . "\r\n" .
	'300K+1 Hasta 400K miembros' . "\r\n" .
	'400K+1 Hasta 500K miembros' . "\r\n" .
	"A medida que vea los grupos de diseño de una manera que por aumentar sus miembros, usted tiene la oportunidad de ".
	"participar en un grupo más grande." ."\r\n"."\r\n".
	"Tienes tres pasos para empezar:". "\r\n" .
	"1. Añada su canal por el botón 'Agregar canal'.". "\r\n" .
	"2. inserte su anuncio mediante el botón 'Añadir Adverisment'.". "\r\n" .
	"3. Elija sus intervalos de tiempo pulsando el botón 'ShowTimes'.". "\r\n" .
	"\r\n" .
	"Si usted necesita ayudar, en el momento en que el bot ha colgar, tipo /restart  o /menu por favor.". "\r\n" ."\r\n" .
	"Nota: ** La propaganda masiva, que causa escapar de sus miembros, por lo que no use de los mismos bots en su canal al mismo tiempo!" . "\r\n" .
	"En consecuencia, no tendremos más de dos anuncios en cada intervalo de tiempo, por lo que el camino está abierto para que usted pueda subir! " ."\r\n"."\r\n" .
	'Usted puede participar en el desarrollo de otros idiomas:' ."\r\n". 'https://github.com/hamid80386/adbot'."\r\n".
	"Buena suerte para ti" ."\r\n".
	"@tabadole_bartar" ."\r\n". "@tabadol_kanal_bot  (" . $ln_version .': '. VERSION . ')';
/* help.php END */	

/* subtitle.php */
$ln_st['txt1'] = 'Esta herramienta le permite adjuntar un texto a una foto o video. (El texto debe tener 200 caracteres como máximo).' . "\r\n" . 
	"\r\n" .  "1. Sube tu foto / video o envíalo aquí ...";
$ln_st['txt2'] = '2. Introduzca su texto:' . "\r\n" ;
$ln_st['txt3'] = 'Puede enviar la salida a uno de los siguientes canales:' . "\r\n" ;
$ln_st['txt4'] = 'Elemento enviado.';
/* subtitle.php END */

/* longtext.php */		
$ln_lt['txt1'] = 'Esta herramienta le permite adjuntar una foto en un texto largo. (El texto debe tener 4000 caracteres como máximo).'. "\r\n" . "\r\n" . 
	"1. Sube tu foto o envíalo aquí ...";
$ln_lt['txt2'] = '2. Introduzca su texto: ' . "\r\n" ;	
$ln_lt['txt3'] = '** El tamaño de su archivo debe ser inferior a 300 kb, por favor, intente de nuevo su carga / avance por archivo más pequeño.';
/* longtext.php END */

/* effect.php */
$ln_ef['txt1'] = 'Esta es una herramienta mágica que puede agregar un efecto agradable a sus fotos.' . "\r\n" .
"Puede reenviar las imágenes finales a 'Subtítulo', 'Texto largo por foto' y 'Botón en línea'" ."\r\n \r\n" .
"Para cargar o enviar una foto aquí ... " ;
$ln_ef['txt2'] = 'Elija uno de los siguientes efectos:';
$ln_ef['txt3'] = 'Foto enviada';
/* effect.php END */

/* inline button */
$ln_ib['txt1'] = 'Esta herramienta le permite adjuntar uno o más botones en línea a su mensaje, los botones pueden tener dirección URL.' ."\r\n".
'1. inserta un texto o sube / envía una foto aquí:';
$ln_ib['txt2'] = '2. Por favor, inserte un texto para su foto:';
$ln_ib['txt3'] = "Usted debe hacer una matriz para sus botones, que por debajo del formato: " . "\r\n" .
				 "Nombre del botón * enlace, nombre del botón * enlace, ..." . "\r\n" .
				 "Aviso: ** Las URL de enlace deben estar contenidas http: // o https: //"	;
$lb_ib['txt4'] = "Hecho!";
/* inline button END */

/* Exchange */
$ln_exc['txt1'] = "Hola, tenemos un intercambio de anuncios para tu canal: "; // .$source. // 
$ln_exc['txt2'] = "\r\n" . "Canal de destino: " ; // .@$target. 
$ln_exc['txt3'] = "\r\n" . "Si ve una infracción, infórmenos del botón \"bandera\". \r\n". "@tabadol_kanal_bot " . 
				  "\r\n" ."Únase a nuestro contador: @tabadole_bartar"; 			 
?>