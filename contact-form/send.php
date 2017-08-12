<?php //ob_start();
if(isset($_REQUEST['event']) && $_REQUEST['event']!=''){$event=$_REQUEST['event'];}else{$event='';}
define('SITE_EMAIL', 'info@macalogic.com');
 
    /* recipients */
    $to1= SITE_EMAIL;
    /* subject */
    $subject1 = "Macalogic.com Webmail Inquiry";

    /* message */
    $message_v1 = '<table width="100%" border="0" cellspacing="0" cellpadding="0">
     <tr>
        <td width="100px">Name:</td>
        <td>'.$_POST['name'].'</td>
      </tr>
        <td width="100px">Email:</td>
        <td>'.$_POST['email'].'</td>
      </tr>
       <tr>
        <td width="100px">Message:</td>
        <td>'.$_POST['message'].'</td>
      </tr>
    </table>';

    /* To send HTML mail, you can set the Content-type header. */
    $headers1  = "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
    /* additional headers */
    $headers1 .= "From: ".$_POST['name']." <".$_POST['email'].">\r\n";
    /* and now mail it */

    /*
    if($_POST['work'] === NULL) {
      $message = $message_v1;
    } else {
      $message = $message_v2;
    }
    */
    $message = $message_v1;
     
     
  mail($to1, $subject1, $message, $headers1);
  
  echo "<div class='alert alert-email-success'>Thank you, we have received your message and will get back to you shortly.</div>";   
 
?>