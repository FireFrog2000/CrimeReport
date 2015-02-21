<?php
#====================================FOR DETAILS CONTACT US
#	Office: FF-04, first floor, deans trade center, Peshawar cantt.
#	Phone: 091-5253258 | E-mail: Business@mcwnetwork.com
#====================================FOR DETAILS CONTACT US



#======================* START - Smile API Class

CLASS SMILE_API
{
	
function get_session()
{
$username="4";	#Put your API Username here
$password="earth6419";	#Put your API Password here
	
$data=file_get_contents("http://api.smilesn.com/session?username=".$username."&password=".$password);
$data=json_decode($data);
$sessionid=$data->sessionid;

//$file2 = fopen('session.txt', 'w');

//$file1 = fopen('session.txt', 'a');
//fputs($file1, $sessionid);
//fclose($file1);

return $sessionid;
}
	


function send_sms($receivenum, $sendernum, $textmessage)
{
$receivenum=urlencode($receivenum);
$sendernum=urlencode($sendernum);
$textmessage=urlencode($textmessage);


//$session_file = file("session.txt");
//$session_id = trim($session_file[0]);

if(!isset($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);

$data2=json_decode($data);
$response_status=$data2->status;

#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/sendsms?sid=".$session_id."&receivenum=".$receivenum."&sendernum=8333&textmessage=".$textmessage);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY

return $data;
}



function receive_sms()
{
$session_file = file("session.txt");
$session_id = trim($session_file[0]);

if(empty($session_id))
{
$session_id = $this->get_session();
}

$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);

$data2=json_decode($data);
$response_status=$data2->status;


#=====* START - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY
if($response_status=="SESSION_EXPIRED")
{
$session_id = $this->get_session();
$data=file_get_contents("http://api.smilesn.com/receivesms?sid=".$session_id);
}
#=====* END - IF SESSION EXPIRED IS RETURN, GENERATE ANOTHER SESSION & RETRY


return $data;
}
	
}
#======================* END - Smile API Class

$object_smile_api = new SMILE_API();
?>