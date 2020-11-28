<?php
$displayForm = True;
if (isset($_POST['submitted'])){
	$displayForm = False;
	$dbc = mysqli_connect('localhost','root','');
	mysqli_select_db($dbc, 'contact_us');
	$problem = False;
	
	if (empty($_POST['email']) && empty($_POST['message'])){
		echo "<script type='text/javascript'>
			alert('Email and Message are required');
			window.location.href = 'index.html#contact';
		</script>";
		$problem = True;
	}		
	else{
		if (empty($_POST['email'])){
			echo "<script type='text/javascript'>
				alert('Email is required');
				window.location.href = 'index.html#contact';
			</script>";
			$problem = True;
		}
		else{
			$email = test_input($_POST['email']);
			if (filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email = trim($_POST['email']);
			}
			else{
				echo "<script type='text/javascript'>
					alert('Invalid email format');
					window.location.href = 'index.html#contact';
				</script>";
			}
		}
	
		if (empty($_POST['message'])){
			echo "<script type='text/javascript'>
				alert('Message is required');
				window.location.href = 'index.html#contact';
			</script>";
			$problem = True;
		}
		else{
			$message = trim($_POST['message']);
		}
	}

	if(!$problem){
		$query = "INSERT INTO contact(email, message, date_entered)
				VALUES ('$email', '$message', NOW())";
	
		if (@mysqli_query($dbc, $query)){
			echo "<script type='text/javascript'>
				alert ('The message has been sent!');
				window.location.href = 'index.html#contact';
			</script>";
		}
		else{
			echo "<script type='text/javascript'>
				alert('Could not sent the message');
				window.location.href = 'index.html#contact';
			</script>";
		}
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>


