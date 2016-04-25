<?php
$myemail = 'fajar@wcs.co.id';
if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$jabatan = strip_tags($_POST['jabatan']);
$company = strip_tags($_POST['company']);
$email = strip_tags($_POST['email']);
$mobile = strip_tags($_POST['mobile']);
$office = strip_tags($_POST['office']);
$k1 = strip_tags($_POST['kebutuhan1']);
$k2 = strip_tags($_POST['kebutuhan2']);
$k3 = strip_tags($_POST['kebutuhan3']);
$k4 = strip_tags($_POST['kebutuhan4']);
$lainnya = strip_tags($_POST['lainnyaText']);
$message = strip_tags($_POST['message']);
echo "<span class=\"alert alert-success\" >Your message has been received.</span>";


$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n Name: $name \n Jabatan: $jabatan \n Nama Perusahaan: $company \n".
"Email: $email\n Phone number: $mobile \n Office phone number: $office \n". 
"Kebutuhan: \n 1. $k1 \n 2. $k2 \n 3. $k3 \n 4. $k4 $lainnya \n Message \n $message";
$headers = "From: $myemail\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
}?>