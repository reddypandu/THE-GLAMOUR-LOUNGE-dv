<?php
require "PHPMailer/class.phpmailer.php";

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['number'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];


    $mail=new PHPMailer(true);
$mail->IsSMTP();

$mail->SMTPAuth=false;
$mail->Port=465;
$mail->Host="localhost";
$mail->Username="infotech@thepatternscompany.com";
$mail->Password="Maruthi@Hanuman";


$mail->IsSendmail();

$mail->From="infotech@thepatternscompany.com";
$mail->FromName="theglamourlounge.in";
$mail->AddAddress($email);
$mail->Subject="Thank You Contacting";
$mail->WordWrap=80;

$body=$name."Thank You";

$mail->MsgHTML($body);
$mail->IsHTML(true);
$mail->Send();

echo'<script language="javascript">';
echo 'alert("Thank you asap")';
echo '</script>';
echo "<script>setTimeout(\"location.href = 'con.html';\"),00);</script>";

}else{
    echo'<script language="javascript">';
echo 'alert("smothing wrong")';
echo '</script>';
echo "<script>setTimeout(\"location.href = 'con.html';\"),00);</script>";
}