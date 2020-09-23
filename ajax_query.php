<?php
ob_start();
session_start();
	include("include/db.inc.php");
	include("include/var.inc.php");
	include("include/function.inc.php");
		
	$db1=new db();
	$db1->open();

///////////////////////////////////////////////////// Adding Remarks to last place//////////////////////																		
if(!empty($_GET['remarking']))
{
$remarks_hain=mysql_fetch_array(mysql_query("select con_phone_code from gs_country where con_id='".$_GET['remarking']."'"));
echo "+".$remarks_hain['con_phone_code'];
}
									
?>