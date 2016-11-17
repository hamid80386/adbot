<?php
include_once('../emoji.php');
$ln_cancel = 'Cancel';
$ln_finish = 'Finish';
$ln_array1 = array( 'Add Channel' , 'Add Advertisement', 'ShowTimes' , 'Reports');
$ln_array2 = array('Status','Flag Abuse','Remove Channel','Tools');
$ln_array3 = array('Help','Rate Us','Contact Us','Language');
if(isset($arr1)) unset($arr1);
$arr1 = array( $ln_array1 , $ln_array2 , $ln_array3 );
$ln_key_link = 'Please choose a button!';
$ln_rate_now = 'Rate Us Now ;-)';

$ln_lang = 'Language';
$ln_add_channel = 'Add Channel';
$ln_transparent_btn = 'Transparent Button';
$ln_add_ad = 'Add Advertisement';
$ln_showtimes = 'ShowTimes';
$ln_remove_channel = 'Remove Channel';
$ln_long_text = 'Long Text by Photo';
$ln_subtitle = 'Subtitle';
$ln_abuse = 'Flag Abuse';
$ln_contactus = 'Contact Us';
$ln_rateus = 'Rate Us';
$ln_your_status = 'Status';
$ln_help = 'Help';
$ln_reports = 'Reports';

/* Register.php */
$ln_reg = array();
$ln_reg['txt1'] =   "Welcome to popularity :-)" . "\r\n" . "1. Please enter your channel's name.". "\r\n".  
"Example: True Love" . "\r\n". "\r\n".  
"Notice: Sign up channels scams and pornography is prohibited.";
$ln_reg['txt2'] = '2. Enter your channel\'s username without @ ' . "\r\n" . "Example: jingo ";
$ln_reg['txt3'] = '3. Enter the number of your channel members' . "\r\n" . "Example: 135". "\r\n".  
"Notice: Number of members will be reviewed by an administrator, So please enter a real number...". "\r\n";

$ln_reg['txt4']  = "Your channel is now ready for registration," . "\r\n";
$ln_reg['txt4'] .= "but before, you must add our bot to your channel's administrator." . "\r\n";
$ln_reg['txt4'] .= "So, in the your channel administrator list, add @tabadol_kanal_bot and then click on
the \"Bot Added\" button." . "\r\n";
$ln_reg['txt4'] .= "**Note, Do not be scared! this is safe! , \r\n 
This is only for this that we can put your advertisement and others in channels." . "\r\n";
$ln_reg['bot_added'] = 'Bot Added';
$ln_reg['txt5'] = 'Dear user, this channel has already been registered by your own';
$ln_reg['txt6'] = 'Dear user, this channel has already been registered by someone else.' . "\r\n";
$ln_reg['txt7'] = 'You can register other channels that you own...' . "\r\n"; 

$ln_reg['txt8'] = $ic_tik_sabz. ' ' . 'Your channel was successfully registered'. "\r\n" .
'Now you should continue other steps Through buttons "Add Advertisement" and "ShowTimes". ' . "\r\n" .
'Note: ** Your channel need to confirm by the Bot\'s Manager to participate in the advertising exchange.' . "\r\n". 
'Our popularity is your popularity, so please Rate Us...' . "\r\n".
'If you have any questions give us a message by "Contact Us" button :-)' . "\r\n".
'Follow our news in @tabadole_bartar ' . "\r\n" ; 

$ln_reg['txt9'] =  'Operation is not successful'. "\r\n";
$ln_reg['txt9'] .= 'It is possible that we do not yet in your administrators list, '. "\r\n";
$ln_reg['txt9'] .= "Please check there are @tabadol_kanal_bot in your administrators list and try again 
 \"Bot Added\" button.". "\r\n";
/* Register.php END */

/* ads.php */
$ln_ads = array();
$ln_ads['txt1'] = 'Here you must submit an ad to introduce to others. ' . "\r\n" .
'Notice: ** Your ad should not contain content such as pornography or fraud!' . "\r\n" .
'1. Enter your channel\'s username without @ ' . "\r\n" . 'Example: true_love';
$ln_ads['txt2'] = 'This channel isn\'t registered with you, please enter your own channel\'s username. (without @)';
$ln_ads['txt3'] = 'This channel is in our block list, so you can\'t send any ad to to this!';

$ln_ads['txt4'] = '2. Your ad can be text or a combination of text and photos' . "\r\n" ;
$ln_ads['txt4'] .= 'If that\'s text, enter your text here,' . "\r\n" ;
$ln_ads['txt4'] .= "if is a combination of text and photo, upload or forward a photo here." . "\r\n" ;
$ln_ads['txt4'] .= "Note: ** Be sure to enter your channel address (with @) in your text" . "\r\n" ;

$ln_ads['txt5'] = "3. You have entered a photo, so insert a text for that." . "\r\n" ;
$ln_ads['txt5'] .= 'Notice: ** your text must be shorter than 200 character.' . "\r\n" ;
$ln_ads['txt5'] .= "Note: ** Be sure to enter your channel address (with @) in your text" . "\r\n" ;

$ln_ads['txt6'] = "Your ad was successfully registered, Now select your timeslots by choose \"ShowTimes\" button" . "\r\n" ;
/* ads.php END */

/* exchange.php */
$ln_ex['txt1'] = 'Changes were made';
$ln_ex['txt2'] = 'Enter your channel\'s username without @ '  . "Example: jingo ";;
$ln_ex['txt3'] = 'This channel isn\'t registered with you, please enter your own channel\'s username. (without @)';

$ln_ex['txt4'] = 'Note: ** The times is (UTC +3:30)';
$ln_ex['txt4'] .= unichr(0x25C0).'Note: ** All channels are member of 20 to 22 timeslot permanently.'."\r\n";
$ln_ex['txt4'] .= unichr(0x25C0).'Notice: ** Don\'t remove ad  entering your channel until the end of timeslot.' ;
$ln_ex['txt4'] .= unichr(0x25C0).'Notice: ** Don\'t send any post after input ad until the end of timeslot.' ;
$ln_ex['txt4'] .= '----------------------'. "\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25C0).'Maximum number of advertising in each time is two, One normal like your ad and one VIP' ;
$ln_ex['txt4'] .= ", so your channel don't have much bustle  " . unichr(0x1F60A);;
$ln_ex['txt4'] .= ' Therefore we help you to increase your members. '. unichr(0x1F339) ."\r\n"  ;
$ln_ex['txt4'] .= unichr(0x25C0).'Now you\'re a member of the following timeslot:'."\r\n";
$ln_ex['txt4'] .= unichr(0x1F447);
$ln_ex['t2022'] = '20 To 22  (UTC +3:30)';
$ln_ex['t1417'] = '17 To 17  (UTC +3:30)';
$ln_ex['t2410'] = '00 To 10am  (UTC +3:30)';
$ln_ex['td1417'] = 'Remove 14 To 17 timeslot';
$ln_ex['td2410'] = 'Remove 00 To 10am timeslot';
$ln_ex['ta1417'] = 'Add 14 To 17 timeslot (UTC +3:30)';
$ln_ex['ta2410'] = 'Add 00 To 10am timeslot (UTC +3:30)';
$ln_ex['txt5'] =  'To add or remove timeslots use of the below buttons' . "\r\n ".unichr(0x1F53D)." \r\n" ;
/* exchange.php END */

/* del_channel.php */
$ln_dc['txt1'] = 'Note: ** You can\'t remove channel that isn\'t your own. ' . "\r\n";
$ln_dc['txt1'] .= 'Note: ** You can add your channel again whenever you want.' . "\r\n";
$ln_dc['txt1'] .= 'Note: ** For prevent sinister abuser, be sure to remove the bot 
from the list of your channel administrators.' . "\r\n\r\n";
$ln_dc['txt1'] .= 'For remove your channel enter your channel\'s username without @' . "\r\n" . "Example: jingo";
$ln_dc['txt2'] = 'The channel was removed.' . "\r\n";
$ln_dc['txt3'] = 'Failed to remove channel, probably is on the block list.'. "\r\n";
$ln_dc['txt4'] = 'You are not the owner of this channel.' . "\r\n";
/* del_channel.php END */

/* lang.php */
$ln_ln['txt1'] = 'Bot\'s language changed.';
$ln_ln['txt2'] = 'Please choose your language.';
$ln_ln['txt3'] = 'Menu renewed.';
$ln_ln['fa'] = 'فارسی';
$ln_ln['en'] = 'English';
/* lang.php END */

/* report.php */
$ln_rp['txt1'] ="Under Construction!";
/* report.php END */

/* contactus.php */
$ln_cu['txt1'] = 'Thanks for that you have chosen us.';
$ln_cu['txt2'] = 'Type your message to us:';
$ln_cu['txt3'] = "Your message came to us \r\n".
				 "We read it and will respond if needed \r\n".
				 "Good wishes for you :-) \r\n";
/* contactus.php END */

/* yourstatus.php */
$ln_ys['channel_name'] = 'Channel\'s Name: ';
$ln_ys['username'] = 'Username: @';
$ln_ys['status'] = 'Status: ';
$ln_ys['w4a'] = 'wait for accept';
$ln_ys['accepted'] = 'accepted';
$ln_ys['block'] = 'blocl (black list)';
$ln_ys['ban'] = 'ban';	
$ln_ys['videoad'] = 'Video Ad: ';
$ln_ys['textad'] = 'Text Ad: ';
$ln_ys['has'] = ' Yes ';
$ln_ys['hasnt'] = ' No ';
$ln_ys['your_status'] = "Your channel's status: \r\n";
/* yourstatus.php END */

/* report.php */
$ln_ra['txt1'] =  'Please enter the username of the offending channel. ( without @ ) ' ."\r\n" ."For example: dream_channel ";			 
$ln_ra['txt2'] =  "Please enter a reason for your report:";
$ln_ra['txt3'] =  "Thanks, were recorded your report and we will consider it seriously.";
/* report.php END */

/* rateus.php */
$ln_ru['txt1'] = 'The bot will be effective only if others find it,' ."\r\n".
'this is a way to exchange more and eventually more popular you and increase your member.' ."\r\n". 
'So we need your vote to others find the bot,' ."\r\n" . 
'for this go to the following link and after pressing the Start button, add a good rating for us'."\r\n" . 
"https://telegram.me/storebot?start=tabadol_kanal_bot"."\r\n".
" We hope to have an effective impact on your rise :-) ";
/* rateus.php END */

/* help.php */	
$ln_hlp['txt1'] = 'Hello dear user' . "\r\n" .
	'Thank you for choosing this bot' . "\r\n" .
	"Let's get acquainted with the functioning of the bot system, when you and others register a channel by that Advertising, " ."\r\n".
	"Your channel ad will be shown on other channels with peer to peer mode,". "\r\n" .
	'This means that in each exchange timeslot, your ad will be shown on another channel, and ' .
	'another channel\'s ad will be shown in your channel,' ."\r\n".
	'in the next timeslot, your ad will be shown in new channel and new another channel\'s add will be shown in your channel.' . "\r\n".
	'this cycle continues until you put your ad across all channels in group.'."\r\n".
	'After the end of the cycle will be repeated Advertising in the group.'."\r\n"."\r\n".
	"If members of your channel was more than up to your group you must remove your channel and add again by new member data,".
	" this is because you have your ads in a higher group when appropriate." . "\r\n" .
	"Groups based on the number of members: " . "\r\n" .
	'1 To 20 members' . "\r\n" .
	'21 To 100 members' . "\r\n" .
	'101 To 300 members' . "\r\n" .
	'301 To 500 members' . "\r\n" .
	'501 To 800 members' . "\r\n" .
	'801 To 1000 members' . "\r\n" .
	'1K+1 To 2K members' . "\r\n" .
	'2K+1 To 4K members' . "\r\n" .
	'4K+1 To 7K members' . "\r\n" .
	'7K+1 To 10K members' . "\r\n" .
	'10K+1 To 30K members' . "\r\n" .
	'30K+1 To 60K members' . "\r\n" .
	'60K+1 To 100K members' . "\r\n" .
	'100K+1 To 200K members' . "\r\n" .
	'200K+1 To 300K members' . "\r\n" .
	'300K+1 To 400K members' . "\r\n" .
	'400K+1 To 500K members' . "\r\n" .
	"As you see design groups in a way that by increase your members,you have a chance to participate in a larger group. " ."\r\n"."\r\n".
	"You're three steps to get started:". "\r\n" .
	"1. Add your Channel by 'Add Channel' button.". "\r\n" .
	"2. insert your ad by 'Add Adverisment' button.". "\r\n" .
	"3. Choose your timeslots by pressing 'ShowTimes' button.". "\r\n" .
	"\r\n" .
	"if you need to help, at the time that bot has hang, type /restart or /menu please. ". "\r\n" ."\r\n" .
	"Note: ** Massive propaganda, it causes escape your members, so don't use of same bots in your channel at the same time!" . "\r\n" .
	"Accordingly, we will not have more than two ads at each timeslot, so the way is open for you to climb! " ."\r\n"."\r\n" .
	'You can participate in the development of other languages:' ."\r\n". 'https://github.com/hamid80386/adbot'."\r\n".
	"Good luck to you" ."\r\n".
	"@tabadol_kanal_bot" ."\r\n". "@tabadole_bartar";
?>