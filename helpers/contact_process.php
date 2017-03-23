<?php

//if(!$_POST) exit;

	$name     = $_POST['name'];
	$surname  = $_POST['surname'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $company  = $_POST['company'];
    $country  = $_POST['country'];
    $message  = $_POST['message'];
    $sendto  = $_POST['sendto'];

	//$address = ($sendto=="americas") ? "sales@ozonia.com, farchad.kaviani@degtec.com, Gaspar.LESZNIK@ozonia.com" : "Gaspar.LESZNIK@ozonia.com, farchad.kaviani@degtec.com, cristina.trachsel@degtec.com";
	$address = ($sendto=="americas") ? "sales@ozonia.com, farchad.kaviani@degtec.com, Gaspar.LESZNIK@ozonia.com" : "Gaspar.LESZNIK@ozonia.com, farchad.kaviani@degtec.com, lara.bloechlinger@degtec.com";
	//$address = ($sendto=="americas") ? "mike@novocentpartners.com" : "art@novocentpartners.com";
	$error = '';
	$phonemsg = '';

		if(trim($name) == '') {
        	$error .= '<li>Please enter your name.</li>';
		}
		if(trim($surname) == '') {
        	$error .= '<li>Please enter your surname.</li>';
		}

		if(trim($country) == '') {
        	$error .= '<li>Please enter your country.</li>';
		}
		if(trim($message) == '') {
        	$error .= '<li>Please enter your message.</li>';
		}

		if(trim($email) == '') {
        	$error .= '<li>Please enter your e-mail address.</li>';
	    } elseif(!isEmail($email)) {
        	$error .= '<li>You have entered an invalid e-mail address.</li>';
        }

		if($error != '') {
			echo '<div class="error_message"><h3>Correct the following errors</h3>';
			echo '<ul class="error_messages">' . $error . '</ul>';
			echo '</div>';

		} else {

         $email_subject = 'Email from ' .$name. ' via the ozonia&reg; website ';

		 $msg  = "$name $surname filled out the contact form on the ozonia&reg; website.\r\n\n";
		 $msg .= "Contact info ======= \r\n\n";
		 $msg .= "Email address: $email \r\n";
		 if($phone!="") $msg .= "Phone number: $phone \r\n";
		 if($company!="") $msg .= "Company Name: $company \r\n";
		 $msg .= "Country: $country \r\n\n";
		 $msg .= "Message:\r\n";
		 $msg .= "$message \r\n\n";

		if(mail($address, $email_subject, $msg, "From: $email")) {


		 //echo "<div id='success_page'>";
		 echo "<h3>Email Sent Successfully</h3>";
		 echo "<p>Thanks <strong>$name</strong>, your contact has been sent!</p>";
		// echo "</div>";


		 } else {

		 echo 'ERROR!';

		 }

	}


function isEmail($email) {

return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));

}
?>