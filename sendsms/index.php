<?php

	if(isset($_POST['sendopt']))
	{
		require('textlocal.class.php');
		require('credential.php');
		
		$textlocal = new Textlocal(false, false, API_KEY);

		$numbers = array(MOBILE);
		$sender = 'Textlocal';
		$otp = mt_rand(10000, 99999);
		$message = 'Hello '. $_POST['uname']. '';

		try {
			$result = $textlocal->sendSms($numbers, $message, $sender);
			echo "OTP success Sent";
		} 
		catch (Exception $e) {
			die('Error: ' . $e->getMessage());
		}
	}

?>

<form action="index.php" method="POST">
	Number:<br/>
	<input type="text" size="2" name="numberext"> - <input type="text" size="11" name="number">
	
	<br/><br/>
	
	Sender:<br/>
	<input type="text" name="uname" id="uname">
	
	<br/><br/>
	
	
	
	<button type="submit" name="sendopt" >Send</button>
</form>