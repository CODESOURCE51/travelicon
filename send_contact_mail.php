<?php

error_reporting(0);

$name = $_REQUEST['name'];

$email = $_REQUEST['email'];

$phn = $_REQUEST['phone'];

$uname = $_REQUEST['uname'];

$pass = $_REQUEST['password'];

$subj = $_REQUEST['subject'];

$type = $_REQUEST['type'];

$platf = $_REQUEST['platform'];
//print_r($_REQUEST);
//exit;

 



$to="paysomeonetodomyonlineclass@gmail.com";

$subject= $name." Posted a QUERY in paysomeonetodomyonlineclass";

//$headers = "From: noreply@paysomeonetodomyonlineclass.com\r\nReply-To: noreply@paysomeonetodomyonlineclass.com";
//
//$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1";



//mail($to, $subject, "mal jache na", $headers);
//
//exit;



$message = '<table align="center" width="700" style="border:outset #B1F05E;">

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><strong>Query Details</strong></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;">Name</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$name.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;">Email</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$email.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Username</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$uname.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Password</span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$pass.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Subject </span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$subj.'</span></td>

  </tr>

  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Needs </span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$type.'</span></td>

  </tr>
  <tr>

    <td style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-align:left; padding:10px;"><span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal; width:150px;">Platform </span>:<span style="font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#666666; font-weight:normal;  width:150px;"> '.$platf.'</span></td>

  </tr>

</table>';

$headers = "From: ".$name."\r\nReply-To: noreply@paysomeonetodomyonlineclass.com";

$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1";

//$headers .= 'Bcc: subhomoy.projukti@gmail.com' . "\r\n";



//send email

mail($to, $subject, $message, $headers);	

header('Location: http://paysomeonetodomyonlineclass.com/index.php?p=s');

?>





