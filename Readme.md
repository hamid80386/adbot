Hello,
This is part of development of Telegram bot: @tabadol_kanal_bot 
Here we participate with you on developing more language fot bot.

Before make changes for us, please register in github.com 
only download en.php or fork and clone the repository and translate new language for use in bot, 
when the new file , you can send that to us by merge request or by send that as a comment to us here.

Also, you can change language files for improve.

Only read below manual and then download your language.
Then after make new language or change string for make proper strings for us, commit new changes .


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

Thanks for your collaboration :-)

