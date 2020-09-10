<?php
	   $regno= $_POST['reg_no'];
       $name = $_POST['name'];
	   $yb= $_POST['yb'];
       $email = $_POST['email'];
	   $contact= $_POST['mob'];
	   $body = "Reg No.: $regno\n Name: $name\n Year,Branch: $yb E-Mail: $email\n Contact:\n $contact\r\n";
	
      $fp = fopen("data.txt",'a+');
	  if($fp)
	    if(fwrite($fp, $body))
		 { echo "<h1 style='text-align:center; background-color:#da1;'>
		   Message Sent Successfully!</h1>";}
		 else{echo "failed";}
	  else 
	   echo "Couldn't open file for writing!";
    
      fclose($fp);
 ?>
