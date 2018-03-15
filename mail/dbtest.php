
<?php

	$frm_name = "test1";
	$frm_title = "test2";
	$frm_email = "test3";
	$frm_phone = "test4";
	$frm_message = "test5";
	$frm_con = "test6";
	$frm_sub = "test7";
	
	$dbhost = 'localhost:3036';
	$dbuser = 'gouser';
	$dbpass = 'gosquared';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}
	$sql = "INSERT INTO contact ".
	       "(name, title, email, phone, message, contact, subscribe) ".
	       "VALUES ('$frm_name', '$frm_title', '$frm_email', '$frm_phone', '$frm_message', '$frm_con', '$frm_sub')";
	
	mysql_select_db('corpcontact');
	$retval = mysql_query( $sql, $conn );
	if(! $retval )
	{
	  die('Could not enter data: ' . mysql_error());
	}
//	echo "Entered data successfully\n";
	mysql_close($conn);
//	Database entry end

?>
