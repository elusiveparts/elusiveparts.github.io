<?PHP
	if(isset($_POST['wf-form-Contact-Form'],$_POST['First-Name'],$_POST['Last-Name'],$_POST['Email'],$_POST['Phone'],$_['Message'])){
		$fname=$_POST['First-Name'];
		$lname=$_POST['Last-Name'];
		$email=$_POST['Email'];
		$phone=$_POST['Phone'];
		$msg=$_POST['Message'];
		
		$to = "hello@elusive.parts";
        $subject = "Contact from" $fname $lname;
		$headers = "From:" $email . "\r\n";
		$message= $msg "/n/n Phone:" $phone;
		
		mail($to, $subject, $message, $headers);
	}
?>