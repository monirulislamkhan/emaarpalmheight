<?
if(@isset($_POST['Submit'])){
$time_offset=date_default_timezone_set ("Asia/Calcutta");
$time_a = ($time_offset * 120);
$time = date("Y-m-d H:i:s",time() + $time_a);
if(strlen(trim(@$_POST['name'])) == 0 ) { $msg->add('e', 'Name is required!');}
else if(strlen(trim(@$_POST['email'])) == 0 ){ $msg->add('e', 'Email ID is required!');}
else if(!filter_var(trim(@$_POST['email']), FILTER_VALIDATE_EMAIL)) { $msg->add('e', 'Email ID is not valid!'); }
else if(trim(@$_POST['country']) == 0 ) { $msg->add('e', 'Country is required!'); }
else if(strlen(trim(@$_POST['comment'])) == 0 ) { $msg->add('e', 'message is required!'); }
else if(strpos(@$_POST['comment'],"https")!==false || strpos(@$_POST['comment'],"www")!==false || strpos(@$_POST['comment'],"/")!==false) { $msg->add('e', 'Invalid message');}
else if(checkEnquiryLimit(@$_POST['email'],@$_POST["phone"],$time)>=4){$msg->add('e', 'Sorry.You have exceed the the limit!'); @header('Location:'._BASEURL_.$url);exit();}
else if( !$msg->hasErrors() ) {
sendMail(trim(@$_POST['name']),trim(@$_POST['email']),'Emaar Properties','Emaar Palm Heights Signature',trim(@$_POST['country']),trim(@$_POST['comment']),$_POST["phone"],$time);
$country_n=country_fetch(trim($_POST['country']));
sendToRemoteServer("www.emaarpalmheightsgurgaon.org.in",'Emaar Palm Heights Signature',trim(@$_POST['name']),$_POST["phone"],trim(@$_POST['email']),trim(@$country_n),trim(@$_POST['comment']));
$msg->add('s', 'Enquiry sent successfully!');
@header('Location:thank-you.html');
exit();	 
} else { }
}
?>