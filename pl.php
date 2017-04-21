<?php
include_once('../emoji.php');
$ln_version = 'Wersja';
$ln_cancel = 'Anuluj';
$ln_finish = 'Zakończ';
$ln_return = 'Powrót';
$ln_mainmenu = 'Menu główne';
$ln_array1 = array( 'Dodaj kanał' , 'Dodaj reklamę', 'Ramy czasowe' , 'Zgłoś');
$ln_array2 = array('Status','Zgłoś nadużycie','Usuń kanał','Narzędzia');
$ln_array3 = array('Pomoc','Oceń nas','Kontakt','Język');
if(isset($arr1)) unset($arr1);
$arr1 = array( $ln_array1 , $ln_array2 , $ln_array3 );

$ln_inarray1 = array('Podtytuł','Przycisk Inline');
$ln_inarray2 = array('Długi tekst pod zdjęciem','Efekty');
$ln_inarray3 = array($ln_mainmenu);
$arr1in1 = array( $ln_inarray1 , $ln_inarray2 , $ln_inarray3  );

$ln_meffect1 = array('Aqua','Przyśpieszenie','Bombelki');
$ln_meffect2 = array('Colorize','Cool','Fuzzy');
$ln_meffect3 = array('Szary','Jasny','Sepia');
$ln_meffect4 = array('Nostalgia','Stary 1','Stary 2');
$arr1in2 = array( $ln_meffect1 , $ln_meffect2 , $ln_meffect3, $ln_inarray4  );

$ln_key_link = 'Kliknij przycisk!';
$ln_tools_txt = 'Mamy pożyteczne narzędzia dla właścicieli kanałów...';
$ln_rate_now = 'Oceń nas teraz! ;-)';

$ln_lang = 'Język';
$ln_add_channel = 'Dodaj kanał';
$ln_transparent_btn = 'Inline Przycisk';
$ln_add_ad = 'Dodaj reklamę';
$ln_showtimes = 'Ramy czasowe';
$ln_remove_channel = 'Usuń kanał';
$ln_long_text = 'Długi tekst pod zdjęciem';
$ln_subtitle = 'Podtytuł';
$ln_effect = 'Efekty';
$ln_abuse = 'Zgłoś nadużycie';
$ln_tools = 'Narzędzia';
$ln_contactus = 'Kontakt';
$ln_rateus = 'Oceń nas';
$ln_your_status = 'Status';
$ln_help = 'Pomoc';
$ln_reports = 'Zgłoszenia';

/* Accepting */
$ln_acp = array();
$ln_acp['accepted'] = 'Drogi użytkowniku, zgłoszony przez Ciebie kanał został zaakceptowany.' . "\r\n". "Nazwa kanału: @";
$ln_acp['crd_file'] = 'crd.pl.php';

/* Register.php */
$ln_reg = array();
$ln_reg['txt1'] =   "Witaj w świecie sławy :-)" . "\r\n" . "1. Podaj nazwę Twojego kanału.". "\r\n".  
"Example: Prawdziwa Miłość" . "\r\n". "\r\n".  
"Uwaga: Rejestrowanie kanałów oszukujących lub z treściami pornograficznymi jest zabronione.";
$ln_reg['txt2'] = '2. Podaj link do kanału bez @ ' . "\r\n" . "Przykład: funaddicted ";
$ln_reg['txt3'] = '3. Podaj ilość członków kanału' . "\r\n" . "Przykład: 135". "\r\n".  
"Uwaga: Ilość członków zostanie sprawdzona przez jednego z naszych administratorów, więc podaj prawdziwą liczbę...". "\r\n";

$ln_reg['txt4']  = "Twój kanał jest gotowy na rejestrację," . "\r\n";
$ln_reg['txt4'] .= "lecz najpierw dodaj naszego bota jako administratora." . "\r\n";
$ln_reg['txt4'] .= "Więc, w liście administratorów, dodaj @tabadol_kanal_bot I kliknij przycisk\"Bot dodany\" ." . "\r\n";
$ln_reg['txt4'] .= "**Prosimy, o zachowanie spokoju! To jest w pełni bezpieczne! , \r\n 
Jest to wymóg, który służy temu, abyśmy mogli publikować reklamy Twoje i innych na kanałach." . "\r\n";
$ln_reg['bot_added'] = 'Bot dodany';
$ln_reg['txt5'] = 'Drogi użytkowniku, ten kanał został już zarejestrowany przez Ciebie.';
$ln_reg['txt6'] = 'Drogi użytkowniku, ten kanał został już zarejestrowany przez kogoś innego.' . "\r\n";
$ln_reg['txt7'] = 'Możesz rejestrować tylko kanały, których jesteś właścicielem' . "\r\n"; 

$ln_reg['txt8'] = $ic_tik_sabz. ' ' . 'Twój kanał został zarejestrowany prawidłowo!'. "\r\n" .
'Teraz wykonaj kolejne kroki dzięki przyciskom "Dodaj reklamę" oraz "Ramy czasowe". ' . "\r\n" .
'Uwaga: ** Twój kanał wymaga weryfikacji przez właściciela bota, abyś uczestniczył w wymianami reklamami.' . "\r\n". 
'Nasza popularność, to także i twoja popularność, więc nas oceń...' . "\r\n".
'Jeśli masz jakiekolwiek pytania do nas, zadaj je klikając przycisk "Kontakt" :-)' . "\r\n".
'Śledź zmiany w bocie: @tabadole_bartar ' . "\r\n" ; 

$ln_reg['txt9'] =  'Błąd.'. "\r\n";
$ln_reg['txt9'] .= 'Istnieje prawdopodobieństwo, że nie jesteśmy jeszcze w liście administratorów, '. "\r\n";
$ln_reg['txt9'] .= "Proszę, upewnij się, czy @tabadol_kanal_bot jest na liście administratorów i spróbuj ponownie kliknąć przycisk
 \"Bot dodany\" .". "\r\n";
/* Register.php END */

/* ads.php */
$ln_ads = array();
$ln_ads['txt1'] = 'Tutaj wyślij swoją reklamę, aby zachęcić innych do dołączenia do twojego kanału. ' . "\r\n" .
'Notice: ** Twoja reklama nie powinna zawierać pornografii ani oszustw!' . "\r\n" ;
$ln_ads['txt2'] = 'Twój kanał nie jest zarejestrowany, podaj link do swojego kanału. (bez @)';
$ln_ads['txt3'] = 'Twój kanał jest na czarnej liście, więc nie możesz do niego wysyłać żadnych reklam!';

$ln_ads['txt4'] = '2. Twoja reklama może być kombinacją obrazków i tekstu' . "\r\n" ;
$ln_ads['txt4'] .= 'Jeśli jest ona samym tekstem, wyślij ją teraz.' . "\r\n" ;
$ln_ads['txt4'] .= "Jeśli to jest kombinacja obrazów i tekstu, wyślij lub przekaż (forward) teraz TYLKO obrazek (tekst daj później)." . "\r\n" ;
$ln_ads['txt4'] .= "Uwaga: ** Nie zapomnij dodać linku do twojego kanału (z @) w twoim tekście promocyjnym" . "\r\n" ;

$ln_ads['txt5'] = "3. Przesłałeś zdjęcie, więc doślij teraz tekst." . "\r\n" ;
$ln_ads['txt5'] .= 'Uwaga: ** twój tekst musi mieć mniej niż 200 znaków.' . "\r\n" ;
$ln_ads['txt5'] .= "Uwaga: ** Nie zapomnij dodać linku do twojego kanału (z @) w twoim tekście promocyjnym." . "\r\n" ;

$ln_ads['txt6'] = "Twoja reklama została przesłana pozytywnie, Teraz wybierz ramy czasowe publikacji reklam klikająć przycisk \"Ramy czasowe\" " . "\r\n" ;
$ln_ads['txt7'] = "1. Wybierz jeden z Twoich kanałów z listy poniżej:" . "\r\n ";
$ln_ads['txt8'] = "Nie zarejestrowałeś jeszcze żadnych kanałów, użyj najpierw przycisku 'Dodaj kanał' " .unichr(0x203C)." \r\n" ;
/* ads.php END */

/* exchange.php */
$ln_ex['txt1'] = 'Zmiany zostały wprowadzone';
$ln_ex['txt2'] = 'Wprowadź link do kanału bez @ '  . "Przykład: funaddicted ";;
$ln_ex['txt3'] = 'Ten kanał nie został zarejestrowany przez Ciebie, wprowadź link do swojego kanału. (bez @)';

$ln_ex['txt4'] =  unichr(0x25B6).' Uwaga: ** Wszystkie czasy są w UTC: polski czas letni jest 2 godziny do przodu, a zimowy 3 ' . "\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Uwaga: ** Wszystkie kanały uczestniczą w promowaniu w godzinach 16:30 do 18:30 (UTC) stale.'."\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Uwaga: ** Nie usuwaj reklamy na Twoim kanale do czasu minięcia ram czasowych.' ."\r\n";
$ln_ex['txt4'] .= unichr(0x25B6).' Uwaga: ** Nic nie wrzucaj na swój kanał do czasu minięcia ram czasowych.' ."\r\n";
$ln_ex['txt4'] .= '----------------------'. "\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25B6).' Maksymalna liczba reklam w tym samym czasie to dwa, jedna normalna, taka jak twoja, a druga VIP' ;
$ln_ex['txt4'] .= ", więc na twoim kanale nie będzie zbyt wiele spamu  " . unichr(0x1F60A) .", \r\n";
$ln_ex['txt4'] .= ' W ten sposób pomagamy ci pozyskiwać nowych użytkowników. '. unichr(0x1F339) ."\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25B6).' Teraz jesteś użytkownikiem w czasie tych ram czasowych:'."\r\n";
$ln_ex['txt4'] .= unichr(0x1F447);
$ln_ex['t2022'] = unichr(0x25B6).' '. '16:30 do 18:30  (UTC)';
$ln_ex['t1417'] = unichr(0x25B6).' '. '10:30 do 13:30  (UTC)';
$ln_ex['t2410'] = unichr(0x25B6).' '. '21:30 do 6:30 rano  (UTC)';
$ln_ex['td1417'] = 'Usuń przedział od 10:30 do 13:30';
$ln_ex['td2410'] = 'Usuń przedział od 21:30 do 6:30 rano';
$ln_ex['ta1417'] = 'Dodaj przedział od 10:30 do 13:30 (UTC)';
$ln_ex['ta2410'] = 'Dodaj przedział od 21:30 do 6:30 rano (UTC)';
$ln_ex['txt5'] =  'Aby dodać lub usunąć przedziały czasowe, użyj powyższych przycisków' . "\r\n ".unichr(0x1F53D)." \r\n" ;
$ln_ex['txt6'] =  "Najpierw zarejestruj kanał używając przycisku Dodaj kanał " .unichr(0x203C)." \r\n" ;
$ln_ex['txt7'] =  "Wybierz jeden z twoich kanałów z listy:" . "\r\n ";
/* exchange.php END */

/* del_channel.php */
$ln_dc['txt1'] = 'Uwaga: ** Nie możesz usunąć cudzego kanału. ' . "\r\n";
$ln_dc['txt1'] .= 'Uwaga: ** Możesz dodać swój kanał ponownie, gdy tylko zechcesz.' . "\r\n";
$ln_dc['txt1'] .= 'Uwaga: ** By zapobiec złowrogim nadużyciom, upewnij się aby usunąć bota 
z listy administratorów Twojego kanału.' . "\r\n\r\n";
$ln_dc['txt1'] .= 'Aby usunąć Twój kanał, wprowadź link do twojego kanału bez @' . "\r\n" . "Przykład: funaddicted";
$ln_dc['txt2'] = 'Kanał został usunięty.' . "\r\n";
$ln_dc['txt3'] = 'Błąd, prawdopodobnie Twój kanał znajduje się na czarnej liście.'. "\r\n";
$ln_dc['txt4'] = 'Nie jesteś właścicielem tego kanału.' . "\r\n";
/* del_channel.php END */

/* lang.php */
$ln_ln['txt1'] = 'Język został zmieniony.';
$ln_ln['txt2'] = 'Wybierz język.';
$ln_ln['txt3'] = 'Menu odświeżone.';
$ln_ln['fa'] = 'فارسی';
$ln_ln['en'] = 'English';
$ln_ln['es'] = 'Español';
$ln_ln['pl'] = 'Polski';

/* lang.php END */

/* report.php */
$ln_rp['txt1'] ="W budowie!";
/* report.php END */

/* contactus.php */
$ln_cu['txt1'] = 'Dziękujemy za wybór nas.';
$ln_cu['txt2'] = 'Napisz do nas:';
$ln_cu['txt3'] = "Wiadomość dostarczona \r\n".
				 "Czytamy je i odpowiadamy, jeśli to konieczne \r\n".
				 "Powodzenia :-) \r\n";
/* contactus.php END */

/* yourstatus.php */
$ln_ys['channel_name'] = 'Nazwa kanału: ';
$ln_ys['username'] = 'Nazwa użytkownika: @';
$ln_ys['status'] = 'Status: ';
$ln_ys['w4a'] = 'oczekujący na akceptację';
$ln_ys['accepted'] = 'zaakceptowany';
$ln_ys['block'] = 'blocl (czarnalista)';
$ln_ys['ban'] = 'ban';	
$ln_ys['videoad'] = 'Reklama Wideo: ';
$ln_ys['textad'] = 'Reklama Tekstowa: ';
$ln_ys['has'] = ' Tak ';
$ln_ys['hasnt'] = ' Nie ';
$ln_ys['crd'] = ' ';
$ln_ys['ad_crd'] = ' ';
$ln_ys['your_status'] = "Status twojego kanału: \r\n";
/* yourstatus.php END */

/* report.php */
$ln_ra['txt1'] =  'Podaj link do kanału, który dokonał naruszeń. ( bez @ ) ' ."\r\n" ."For example: dream_channel ";			 
$ln_ra['txt2'] =  "Podaj powód zgłoszenia:";
$ln_ra['txt3'] =  "Dzięki, rozważymy Twoje zgłoszenie na poważnie.";
/* report.php END */

/* rateus.php */
$ln_ru['txt1'] = 'Bot będzie skuteczny tylko wtedy, gdy inni znajdą go,' ."\r\n".
'Jest to sposób na większe wymiany i ostatecznie większą sławę kanału, oraz ilość członków.' ."\r\n". 
'Potrzebujemy Twojego głosu, aby inni nas znaleźli,' ."\r\n" . 
'Odwiedź poniższy link i po kliknięciu Start wystaw nam pozytywną opinię'."\r\n" . 
"https://telegram.me/storebot?start=tabadol_kanal_bot"."\r\n".
" Mamy nadzieję, że będzie to miało pozytywny wpływ na ilość członków Twojego kanału :-) ";
/* rateus.php END */

/* help.php */	
$ln_hlp['txt1'] = 'Witaj, Drogi Użytkowniku' . "\r\n" .
	'Dzięki za wybór tego bota' . "\r\n" . "\r\n" .
	"Zapoznaj się z funkcjonowaniem tego bota, kiedy ty i inni zarejestrujecie kanał przez tę reklamę, " ."\r\n".
	"Reklama Twojego kanału będzie pokazana na innych kanałach metodą peer to peer (p2p),". "\r\n" .
	'Oznacza to, że w każdym bloku czasowym wymiany reklama zostanie wyświetlona na innym kanale i ' .
	'reklama innego kanału będzie wyświetlona na Twoim kanale,' ."\r\n".
	'W następnym przedziale czasowym reklama zostanie wyświetlona w nowym kanale, a nowy kanał zostanie dodany w Twoim kanale.' . "\r\n".
	'Ten cykl trwa aż do momentu umieszczenia reklamy we wszystkich kanałach w grupie.'."\r\n".
	'Jeśli się on skończy, zostanie powtórzony.'."\r\n"."\r\n".
	"Jeśli członkowie Twojego kanału znajdowali się poza Twoimi grupami, musisz usunąć swój kanał i dodać go ponownie z aktualną ilością członków,".
	" Jest tak, ponieważ im więcej Twój kanał ma członków, w tym większych kanałach wyświetlana jest Twoja reklama." . "\r\n" .
	"Grupy są zależne od ilości członków: " . "\r\n" .
	'1 do 20 członków' . "\r\n" .
	'21 do 100 członków' . "\r\n" .
	'101 do 300 członków' . "\r\n" .
	'301 do 500 członków' . "\r\n" .
	'501 do 800 członków' . "\r\n" .
	'801 do 1000 członków' . "\r\n" .
	'1K+1 do 2K członków' . "\r\n" .
	'2K+1 do 4K członków' . "\r\n" .
	'4K+1 do 7K członków' . "\r\n" .
	'7K+1 do 10K członków' . "\r\n" .
	'10K+1 do 30K członków' . "\r\n" .
	'30K+1 do 60K członków' . "\r\n" .
	'60K+1 do 100K członków' . "\r\n" .
	'100K+1 do 200K członków' . "\r\n" .
	'200K+1 do 300K członków' . "\r\n" .
	'300K+1 do 400K członków' . "\r\n" .
	'400K+1 do 500K członków' . "\r\n" .
	"Jak widzisz, grupy są stworzone po to, abyś zyskał jak najwięcej i miał szansę dołączyć później do większych grup. " ."\r\n"."\r\n".
	"Jescze trzy kroki do rozpoczęcia:". "\r\n" .
	"1. Dodaj Twój kanał klikając przycisk 'Dodaj kanał'.". "\r\n" .
	"2. Wprowadź reklamę klikając przycisk 'Dodaj reklamę'.". "\r\n" .
	"3. Wybierz ramy czasowe klikając przycisk 'Ramy czasowe'.". "\r\n" .
	"\r\n" .
	"Jeśli potrzebujesz pomocy, w czasie, gdy bot się zawieci, wpisz /restart lub /menu. ". "\r\n" ."\r\n" .
	"Uwaga: ** Ogromna propaganda, powoduje ucieczkę członków z kanału, więc na Twoim kanale nie używaj wielu botów w tym samym czasie!" . "\r\n" .
	"W związku z tym nie będziemy wstawiać więcej niż dwóch reklam w tym samym czasie, czyli droga jest wolna! " ."\r\n"."\r\n" .
	'Możesz pomóc przetłumaczyć bota na inne języki tutaj:' ."\r\n". 'https://github.com/hamid80386/adbot'."\r\n".
	"Powodzenia! (autor polskiego tłumaczenia: @tom790)" ."\r\n".
	"@tabadole_bartar" ."\r\n". "@tabadol_kanal_bot  (" . $ln_version .': '. VERSION . ')';
/* help.php END */	

/* subtitle.php */
$ln_st['txt1'] = 'To narzędzie pozwala wstawić podpis do obrazka. (krótszy niż 200 znaków włącznie).' . "\r\n" . 
	"\r\n" .  "1. Wyślij Twoje zdjęcie / film ręcznie lub za pomocą funkcji przekaż dalej (forward)...";
$ln_st['txt2'] = '2. Wprowadź swój tekst: ' . "\r\n" ;
$ln_st['txt3'] = 'Możesz wysłać to do jednego z poniższych kanałów:' . "\r\n" ;
$ln_st['txt4'] = 'Wysłano.';
/* subtitle.php END */

/* longtext.php */		
$ln_lt['txt1'] = 'To narzędzie pozwala na dołączenie zdjęcia z długim tekstem. (Tekst musi mieć maksymalnie 4000 znaków).'. "\r\n" . "\r\n" . 
	"1. Prześlij tu Twój obrazek...";
$ln_lt['txt2'] = '2. Proszę wprowadzić tekst: ' . "\r\n" ;	
$ln_lt['txt3'] = '** Rozmiar pliku musi być mniejszy niż 300 kb, spróbuj ponownie przesłać mniejszy plik (film możesz wysłać w niższej jakości).';
/* longtext.php END */

/* effect.php */
$ln_ef['txt1'] = 'To jest magiczne narzędzie dodające niesamowite efekty na Twoje zdjęcia.' . "\r\n" .
"Możesz forwardować twoje zdjęcia do 'Podtytuł', 'Długi tekst pod obrazkiem' i 'Przycisk Inline' " ."\r\n \r\n" .
"Prześlij tu twój obrazek... " ;
$ln_ef['txt2'] = 'Wybierz któryś z efektów: ';
$ln_ef['txt3'] = 'Zdjęcie wysłane';
/* effect.php END */

/* inline button */
$ln_ib['txt1'] = 'To narzędzie pozwala ci załączyć jeden lub więcej przycisków inline do twojego postu, przyciski mogą mieć adres URL.' ."\r\n".
'1. Wprowadź tekst lub prześlij tu zdjęcie:';
$ln_ib['txt2'] = '2. Wprowadź tekst do Twojego obrazka:';
$ln_ib['txt3'] = "Musisz utworzyć tablicę dla swoich przycisków, wykonaj to poniższym sposobem: " . "\r\n" .
				 "nazwa przycisku* link , nazwa przycisku * link , ..." . "\r\n" .
				 "Uwaga: **Linki adresów URL muszą zawierać http:// lub https:// "	;
$lb_ib['txt4'] = "Zrobione!";
/* inline button END */

/* Exchange */
$ln_exc['txt1'] = "Witaj, mamy wymianę reklam dla Twojego kanału: "; // .$source. // 
$ln_exc['txt2'] = "\r\n" . "Kanał docelowy: " ; // .@$target. 
$ln_exc['txt3'] = "\r\n" . "Jeśli widzisz nadużycia, poinformuj nas za pomocą przycisku \"Zgłoś nadużycie\". \r\n". "@tabadol_kanal_bot " . 
				  "\r\n" ."Dołacz i zwiększ wartość na liczniku: @tabadole_bartar"; 			 
?>
