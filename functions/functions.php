<?php

/*************helper functions***************/

function clean($string) {

	return htmlentities($string);
}

function redirect($location) {

	return header("Location: {$location}");
}


function set_message($message) {

	if(!empty($message)) {

		$_SESSION['message'] = $message;

		}else {

			$message = "";
		}
}


function token_generator() {

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token; 
}


function display_message() {

	if(isset($_SESSION['message'])) {

		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}


function validation_errors($error_message) {

$error_message = <<<DELIMITER

<div style="background: #000000; color: white;" class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" style="color: white;" class="col-md-12 close sucess-op" data-dismiss="modal" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p style="color: white;"><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}



function validator($error_message) {

$error_message = <<<DELIMITER
<div style="background: #000000; color: white;" class="col-md-12 alert alert-danger alert-mg-b alert-success-style6 alert-st-bg3 alert-st-bg14">
    <button type="button" style="color: white;" class="col-md-12 close sucess-op" data-dismiss="modal" aria-label="Close">
		<span class="icon-sc-cl" aria-hidden="true">&times;</span>
									</button>
                 <p style="color: white;"><strong>$error_message </strong></p>
                            </div>
DELIMITER;

   return $error_message;     

}


/********** validate user functions *******/


function email_exist($email) {

	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}


function username_exist($usname) {

	$sql = "SELECT * FROM user WHERE usname = '$usname'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}


function semail_exist($sbmail) {

	$sql = "SELECT * FROM subscribe WHERE email = '$sbmail'";
	$result = query($sql);

	if(row_count($result) == 1) {

		return true;

	}else {

		return false;
	} 
}



//------------- subscription email ------------//
if (isset($_POST['sbemail'])) {
	
		$sbmail 		= escape(clean($_POST['sbemail']));

		if (semail_exist($sbmail)) {
			
			echo "This email is registered already";
		} else {

			$date = date("Y-m-d h:i:sa");

			//insert records to db
			$sql = "INSERT INTO subscribe(`email`, `date`, `sn`)";
			$sql .= "VALUES('$sbmail', '$date', '1')";
			$res = query($sql);

			echo "Your email has been registered successfully. Kindly check your email for details";


	//notify user by mail
	$to 		= $sbmail;
    $from 		= "noreply@teensyouths.com.ng";

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "You Joined the Revolution";

    $logo = 'https://teensyouths.com.ng/img/2.png';
    $url  = 'https://teensyouths.com.ng';
    $link = 'https://teensyouths.com.ng/./';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TeensYouths.. Let the revolution begin</title></head><link rel='stylesheet' href='https://teensyouths.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #c92f2f; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='TeensYouths'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>You joined the revolution</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for joining the revolution. You will start receiving blog updates;</p>
		<br/>";
	$body .= '<table class="text-center" style="width:90%; margin-left: 45px; color: white; border: 1px solid #f9f9ff;">
   <tr>
    <th style="border: 1px solid #f9f9ff;">Email</th>
    <th style="border: 1px solid #f9f9ff;">Date</th>
  </tr>
  <tr style="border: 1px solid #f9f9ff;">
    <td style="border: 1px solid #f9f9ff;">'.$to.'</td>
    <td style="border: 1px solid #f9f9ff;">'.date('D, M d, Y h:i:sa', strtotime($date)).'</td>
  </tr>
</table><br/>';
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";
	$body .= "<p style='text-align: center; padding-bottom: 50px;'></p>";	
	$body .= "<script src='https://teensyouths.com.ng/js/bootstrap/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
		}
}


//--------- user signup -----------//
if (isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['usname']) && isset($_POST['pword']) && isset($_POST['cpword']) && isset($_POST['tel'])) {
	
	$fname 		= escape(clean($_POST['fname']));
	$email 		= escape(clean($_POST['email']));
	$usname		= escape(clean($_POST['usname']));
	$pword 		= escape(clean(md5($_POST['pword'])));
	$cpword		= escape(clean(md5($_POST['cpword'])));
	$tel 		= escape(clean($_POST['tel']));


	if (email_exist($email)) {
		
		echo "This email has been registered with an account.";
	} else {

		if (username_exist($usname)) {
			
			echo "That username is taken. Kindly create another username";
		} else {

		register_user($fname, $email, $usname, $pword, $cpword, $tel);
	}
}
}

//register user details into db
function register_user($fname, $email, $usname, $pword, $cpword, $tel) {

	//contants
	$datereg = date("Y-m-d h:i:sa");
	$verify  = token_generator();

	$sql = "INSERT INTO user(`sn`, `name`, `email`, `pword`, `usname`, `tel`, `activator`, `datereg`, `active`)";
	$sql.= "VALUES('1', '$fname', '$email', '$pword', '$usname', '$tel', '$verify', '$datereg', '0')";
	$res = query($sql);

	//send verification link to email
	verify_user($verify, $email);
}


//verify user
function verify_user($verify, $email) {

	$to 		= $email;
    $from 		= "noreply@teensyouths.com.ng";

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "Activate Email";

    $logo = 'https://teensyouths.com.ng/img/2.png';
    $url  = 'https://teensyouths.com.ng';
    $link = 'https://teensyouths.com.ng/./activate?id='.$verify;

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TeensYouths.. Let the revolution begin</title></head><link rel='stylesheet' href='https://teensyouths.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #c92f2f; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='TeensYouths'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>Activate your email to continue</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> Thank you for signing up. Kindly click on the link below to activate your email;</p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #fbb710; text-decoration: none'>Click here to activate your email</a></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Do not bother replying this email. This is a virtual email</p>";
	$body .= "<p style='text-align: center; padding-bottom: 50px;'></p>";	
	$body .= "<script src='https://teensyouths.com.ng/js/bootstrap/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);

    echo "Loading...Please wait!";												
   echo '<script>window.location.href ="./verify"</script>';
}




//------------ user signin field ------------//
if (isset($_POST['snemail']) && isset($_POST['snpword'])) {
	
	$email  = escape(clean($_POST['snemail']));
	$pword  = escape(clean(md5($_POST['snpword'])));

	if (!email_exist($email)) {
		
		echo "Sorry! The email inputed does not have an account";
	} else {

		signin_user($email, $pword);
	}
}

//sigin user
function signin_user($email, $pword) {

	$sql = "SELECT * FROM user WHERE `email` = '$email' AND `pword` = '$pword'";
	$rsl = query($sql);

	if (row_count($rsl) == 1) {
	
	$row = mysqli_fetch_array($rsl);

	$user 	 = $row['email'];
	$active  =  $row['active'];
	$email   = $row['email'];
	$hey     = $row['usname'];
	$verify  = token_generator();

	if ($active == 0) {
		
		echo "Loading... Please wait";
		verify_user($verify, $email);
		echo '<script>window.location.href ="./verify"</script>';
	} else {

		if ($email == $user) {
			
		$_SESSION['user'] = $email;
		$_SESSION['Username'] = $hey;

		echo "Loading...Please wait!";												
		echo '<script>window.location.href ="dashboard/./"</script>';
		} else {

		echo "Invalid login details";
		}

	}

	} else {

		echo "Wrong password";
	}
}




//--------- forgot password ----------//
if (isset($_POST['fgtemail'])) {
	
	$email 		= escape(clean($_POST['fgtemail']));

	if (!email_exist($email)) {
		
		echo "The email you inputed is not registered";
	} else {

		$activate  = token_generator();

		//update activator
		$sql = "UPDATE user SET `activator` = '$activate' WHERE `email` = '$email'";
		$rsl = query($sql);


	//send reset link via email
	$to 		= $email;
    $from 		= "noreply@teensyouths.com.ng";

	$headers  = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $from . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
    $headers .= "X-Priority: 1 (Highest)\n";
    $headers .= "X-MSMail-Priority: High\n";
    $headers .= "Importance: High\n";

    $subject = "Forgot Password";

    $logo = 'https://teensyouths.com.ng/img/2.png';
    $url  = 'https://teensyouths.com.ng';
    $link = 'https://teensyouths.com.ng/./recovery?id='.$activate;

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>TeensYouths.. Let the revolution begin</title></head><link rel='stylesheet' href='https://teensyouths.com.ng/css/bootstrap.min.css'><body style='text-align: center;'>";
	$body .= "<section style='margin: 30px; margin-top: 50px ; background: #c92f2f; color: white;'>";
	$body .= "<img style='margin-top: 35px' src='{$logo}' alt='TeensYouths'>";
	$body .= "<h1 style='margin-top: 45px; color: #fbb710'>Reset Password</h1>
		<br/>";
	$body .= "<p style='margin-left: 45px; margin-top: 34px; text-align: left; font-size: 17px;'>Hi there! <br/> You requested for a password reset. Kindly click on the link below to reset your password;</p>
		<br/>";
	$body .= "<p style='margin-left: 45px; text-align: left;'><a target='_blank' href='{$link}' style='color: #fbb710; text-decoration: none'>Click here to reset your password</a></p>
		<br/>";
	$body .= "<p style='margin-left: 45px; padding-bottom: 80px; text-align: left;'>Kindly ignore this mail if you didn`t request for a password reset.</p>";
	$body .= "<p style='text-align: center; padding-bottom: 50px;'></p>";	
	$body .= "<script src='https://teensyouths.com.ng/js/bootstrap/bootstrap.min.js'></script>";
	$body .= "</section>";	
	$body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);

   echo "Loading...Please wait!";												
   echo '<script>window.location.href ="./recover"</script>';

	}
}


//----------- reset password ------------//
if (isset($_POST['fnxpword']) && isset($_POST['fnxcpword']) && isset($_POST['fnztci'])) {
	
	$pword 		= escape(clean(md5($_POST['fnxpword'])));
	$active 	= escape(clean($_POST['fnztci']));

	//update passsword and clear reset link
	$sql = "UPDATE user SET `pword` = '$pword', `activator` = '' WHERE `activator` = '$active'";
	$res = query($sql);

   echo "Loading...Please wait!";												
   echo '<script>window.location.href ="./recovered"</script>';
}



//-------- post comment ---------//
if (isset($_POST['cfname']) && isset($_POST['cemail']) && isset($_POST['cpost']) && isset($_POST['cxt'])) {
	
	$cfname 	=   escape(clean($_POST['cfname']));
	$cemail		= 	escape(clean($_POST['cemail']));
	$cpost		= 	escape(clean($_POST['cpost']));
	$cxt		= 	escape(clean($_POST['cxt']));
	$date       =   date("Y-m-d h:i:sa");

	//insert records into db
	$sql  = "INSERT INTO comment(`fname`, `email`, `text`, `post_url`, `date`)";
	$sql .= "VALUES('$cfname', '$cemail', '$cxt', '$cpost', '$date')";
	$res  = query($sql);

   echo "Loading...Please wait!";												
   echo '<script>window.location.href ="'.$cpost.'"</script>';

}










//---------------  admin dashboard functions ---------//
if (isset($_POST['password'])) {
	
		$admission       = escape(clean("teenstoyouth"));
		$password   	 = escape(clean(md5($_POST['password'])));

		$sql 	= "SELECT `password` FROM `admin` WHERE `user` = '$admission'";
		$result = query($sql);

		if(row_count($result) == 1) {
			$row = mysqli_fetch_array($result);

			$user_password = $row['password'];

			if($password == $user_password) {

				$_SESSION['admin'] = $admission;

				 echo 'Loading.. Please wait';	
				 echo '<script>window.location.href ="./"</script>';

		} else {

	echo "Incorrect Password";
}
} else {

	echo "Wrongly typed password";
}
}




//upload profile picture
if (!empty($_FILES["file"]["name"])) {
	
			$target_dir = "../artfile/dp/";
			$target_file =  basename($_FILES["file"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			   
			// Check if file already exists
			if (file_exists($targetFilePath)) {
			    echo "Sorry, this apartment Image is already registered on our database. Kindly rename your file and try again.";
			    $uploadOk = 0;
			} else {

			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, your apartment Image was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
			   img_prod($target_file);
			   echo 'Loading.. Please wait!';
   			echo '<script>window.location.href ="./"</script>';
		}
	}	    	
}
}


///sql update product image
function img_prod($target_file) {

	$proid    = $_SESSION['user'];

	$sql 	  = "UPDATE user SET `propix` = '$target_file' WHERE `email` = '$proid'";
	$res = query($sql);

	echo 'Loading.. Please wait!';
}




//post article first step
if(isset($_POST['ptit']) && isset($_POST['pdet'])) {

	$title 		= clean(escape($_POST['ptit']));
	$details    = $_POST['pdet'];  


	//echo $details;

	/*if(str_word_count($details) > 3000) {

		echo "Your article can not be greater than 3,000 words";
	} else {*/

	//constants
    $date       = date("Y-m-d h:i:sa");
    $author     = $_SESSION['Username'];
    $authormail = $_SESSION['user'];
    $post_url   = str_replace(' ', '-', $title);

    //get user profile
    $fred = "SELECT * FROM user WHERE `email` = '$authormail'";
    $trd  = query($fred);
    $trf  = mysqli_fetch_array($trd);

    $propix = $trf['propix'];


     //check if title exist
    $ssl = "SELECT * FROM article WHERE `post_url` = '$post_url'";
    $rsl = query($ssl);
    if (row_count($rsl) == 1) {


    //asign a new post_url 
      $post_url = str_replace(' ', '-', $title).rand(0, 99);

    } else {
 
    $post_url   = str_replace(' ', '-', $title); 
    }

    //insert details into db
  /* $sql = "INSERT INTO article(`sn`, `details`, `title`, `author`, `author_mail`, `view`, `datepost`, `post_url` , `propix`)";
    $sql.= "VALUES('1', '$details', '$title', '$author', '$authormail', '0', '$date', '$post_url', '$propix')";
    $res = query($sql);*/


	$_SESSION['prl'] = $post_url;

    //redirect to upload image
     echo $_SESSION['det'] = $details;
    //echo "Loading... Please wait";
  // echo '<script>window.location.href ="../test"</script>';

}





//upload post picture
if (!empty($_FILES["fle"]["name"])) {
	
			$target_dir = "../artfile/";
			$target_file =  basename($_FILES["fle"]["name"]);
			$targetFilePath = $target_dir . $target_file;
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
			
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "jpeg") {
			    echo "Sorry, only JPG and JPEG files are allowed.";
			    $uploadOk = 0;
			} else {
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			   echo "Sorry, your ads image was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			   
			   move_uploaded_file($_FILES["fle"]["tmp_name"], $targetFilePath);
			   img_ads($target_file);
   			
		
	}	    	
}
}


///sql update ads image
function img_ads($target_file) {

	$code     = $_SESSION['prl'];

	$sql 	  = "UPDATE article SET `pix` = '$target_file' WHERE `post_url` = '$code'";
	$res 	  = query($sql);

	echo 'Loading.. Please wait';
	echo '<script>window.location.href ="./done"</script>';

}
?>