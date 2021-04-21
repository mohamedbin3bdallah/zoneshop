<?php

function exist($table,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select count(*) as count from {$table} $where");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if($row['count'] == 0) return 0;
	else return 1;
}

function getRow($table,$fields,$where)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select $fields from {$table} $where");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if(empty($row)) return 0;
	else return $row;
}

function getAllRCities()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from cities order by title ASC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function insertuser($person)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into users (";
	$lquery = " values (";
	foreach ($person as $key => $value)
	{
		$fquery .= "`".$key."`";
		$lquery .= '"'.$value.'"';
		$data  = array_keys($person);
		$lastkey = array_pop($data);
		if($key != $lastkey) 
		{	
			$fquery .= ",";
			$lquery .= ",";
		}	
	}
	$fquery .= ")";
	$lquery .= ")";
	$query = $fquery.$lquery;
	$result = mysql_query($query);
	if($result) return 1;
	else return 0;
    /*include("../libs/closedb.php");
	unset($data,$lastkey,$person,$fquery,$lquery,$query,$result);*/
}

function insertAdmin($person)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$fquery = "insert into admins (";
	$lquery = " values (";
	foreach ($person as $key => $value)
	{
		$fquery .= "`".$key."`";
		$lquery .= '"'.$value.'"';
		$data  = array_keys($person);
		$lastkey = array_pop($data);
		if($key != $lastkey) 
		{	
			$fquery .= ",";
			$lquery .= ",";
		}	
	}
	$fquery .= ")";
	$lquery .= ")";
	$query = $fquery.$lquery;
	$result = mysql_query($query);
	if($result) return mysql_insert_id();
	else return 0;
    /*include("../libs/closedb.php");
	unset($data,$lastkey,$person,$fquery,$lquery,$query,$result);*/
}

function uploadimgs($folder)
{
	$image_director = "uploads/dealers/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	for($i=0;$i<count($_FILES['file']['name']);$i++)
	{
		if($_FILES['file']['size'][$i] < 1024000)
		{
			$file_extn[$i] = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
			if($_FILES["file"]["type"][$i] == "image/jpg" || $_FILES["file"]["type"][$i] == "image/jpeg" || $_FILES["file"]["type"][$i] == "image/gif" || $_FILES["file"]["type"][$i] == "image/png")
			{
				$_FILES["file"]["name"][$i] = rand().'.'.$file_extn[$i];
				move_uploaded_file($_FILES["file"]["tmp_name"][$i], $image_director.'/'.$_FILES["file"]["name"][$i]);				
			}
		}
	}
}

function sendemail($type,$person)
{
	require_once('../PHPMailer/class.phpmailer.php');
	require_once('../PHPMailer/class.smtp.php');
	require_once('../PHPMailer/PHPMailerAutoload.php');
	$mail             = new PHPMailer(); // defaults to using php "mail()"
	$mail->IsSMTP(); // telling the class to use SMTP
	//$mail->Host       = "smtp.secureserver.net";
	$mail->Host       = "localhost";
	//	$mail->Host       = "smtpout.secureserver.net";      // sets GMAIL as the SMTP server
	//	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	//	$mail->SMTPSecure = 'ssl';
	//	$mail->Port = 465;
	//$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
	//$mail->Username   = "";  // GMAIL username
	//$mail->Password   = "";					
	//$mail->AddReplyTo("name@yourdomain.com","First Last");
	if(isset($person['contactemail'])) $address = $person['contactemail'];
	else $address = "info@spootmedia.com";
	$mail->SetFrom($address, 'INFO');
	$mail->AddAddress($person['email']);
	$mail->Subject    = 'Activation';
	//$mail->AltBody    = "You can active your account on : "; // optional, comment out and test
	$mail->Body    = 'Activation link: http://www.spootmedia.com/'.$type.'active.php?email='.$person['email'].'&code='.$person['code'];
	if($mail->Send()) return 1;
	else return 0;
}

?>