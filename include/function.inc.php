<?php
function getAdminDetails()
{
	if($_SESSION['~aname']=='' || $_SESSION['~adid']=='')
	{
		redirect("index.php");
	}
	else
	{
		$sql="select * from admin";
		$res=mysql_query($sql);
		$row=mysql_fetch_object($res);
		return $row;
	}}
	

// For Maximum Ranking
function max_rank($tablename,$type,$value)
{
if($type=="" && $value=="")
{
$cms=mysql_fetch_array(mysql_query("select max(priority) from ".$tablename));
}
else
{
$cms=mysql_fetch_array(mysql_query("select max(priority) from ".$tablename." where ".$type."=".$value));
}
return $cms['max(priority)']+1;
}

// For Property Type Name
function property_type($field)
{
$cms=mysql_fetch_array(mysql_query("select type_name from manage_property_type where ptype='".$field."'"));
return $cms['type_name'];
}

	
// For Floor Plan Category Name
function floorplan_cat_name($field)
{
$cms=mysql_fetch_array(mysql_query("select floor_catname from manage_floor_category where fcat_id='".$field."'"));
return $cms['floor_catname'];
}

//get floor plan category name

function floorsubcategory_name($fcat)
{
	$fcat_name=mysql_fetch_array(mysql_query("select sub_type_name from manage_floor_subcategory where stype='$fcat'"));
	return $fcat_name['sub_type_name'];
}


// For Project Availability
function project_availability($field)
{
$cms=mysql_fetch_array(mysql_query("select project_availability_status from manage_property where pid='".$field."'"));
if($cms['project_availability_status']=='o')
{
$value=_BOOKING_OPEN_;
}
else
{
$value=_RESALE_;
}
return $value;
}
	
	
// Upload Image
function flashUpload($fileName)
{
	$getText=$fileName['name'];
	$rand=rand(5,10000);
	$new_file_name=time().$rand ."-".$getText;
	$path="../banner/".$new_file_name;
	copy($fileName['tmp_name'],$path);
	return $new_file_name;

}
// for all cms
function bulidercms($field)
{
$cms=mysql_fetch_array(mysql_query("select * from manage_cms"));
return $cms[$field];
}




// Upload Image PDF function 
function uploadfile($fileName,$source,$type,$valid,$path) 
	{    
    
	$rand=rand(5,10000);
	$getName=$rand.'-'.$fileName;
	$getSource=$source;
	$getType=$type;
	$getValid=$valid;
	$getPath=$path;
	if(in_array($getType,$getValid))
			{
				if(is_uploaded_file($getSource))
				{
					$targetpath=$getPath .$getName;
					$move_image=move_uploaded_file($getSource,$targetpath);
						if($move_image)
						{ 
							return $getName;
							$upload_images_status=1;
						}
						else
						{
							$error.="<li>Image Not Uploaded.</li>";
							return false;
						}
				 
				}	
				
				}
	}

// Upload only PDf
function pdfUpload($fileName)
	{
		$getext=explode('.',$fileName['name']);
		$ext=$getext[1];
		if($ext=='pdf')
		{
			$rand=rand(5,10000);
			$new_file_name=time().$rand.'.'.$ext;
			$path= "../pdf/".$new_file_name;
			copy($fileName['tmp_name'], $path);
			return $new_file_name;
		}
		else
		{
			$msg="Only pdf file can be upload";
			return $msg;
		}
	}

// Get Project Name from this function

function projectname($id)
{
	$name=mysql_fetch_array(mysql_query("select property_name from manage_property where pid='$id'"));
	return $name['property_name'];
	}
// Get description  Name from this 
function description($id)
{
	$description=mysql_fetch_array(mysql_query("select small_description from manage_property where pid='$id'"));
	return $description['small_description'];
	}
// Get Builder Name from this function

function buildername($id)
{
	$buildername=mysql_fetch_array(mysql_query("select company_name from manage_property_builder where p_bid='$id'"));
	return $buildername['company_name'];
	}

// Get PRoject Type from this function

function project_type($id)
{
	$name=mysql_fetch_array(mysql_query("select type_name from manage_property_type where ptype='$id'"));
	return $name['type_name'];
	}


	
// Get PRoject location  from this function

function project_location($id)
{
	$ptlocation=mysql_fetch_array(mysql_query("select location_name from manage_property_type_location where pt_loc='$id'"));
	return $ptlocation['location_name'];
	}
		
// Get CMS Page Name from this function

function pagename($id)
{
	$pagename=mysql_fetch_array(mysql_query("select page_name from manage_pagename where pn_id='$id'"));
	return $pagename['page_name'];
	}
	
// display page name for admin panel



function hotproject()
{	
		$sql="select property_name from manage_property where hot_property='Y'";
		$res=mysql_query($sql);
		$row=mysql_fetch_object($res);
		return $row;

	}

//dispaly Hot Menu 

function hotproname()
{	
		$sql="select * from manage_property where hot_property='Y'";
		$res=mysql_query($sql);
		$row=mysql_fetch_object($res);
		return $row;

	}
	
//dispaly New Menu 

function newproname()
{	
		$sql="select * from manage_property where new_project='Y'";
		$res=mysql_query($sql);
		$row=mysql_fetch_object($res);
		return $row;

	}
	
// display builder logo in forntend 

function view_builder_logo($img,$w,$h,$alt)
{
 if(file_exists("builder/".$img) && $img!='')

 $temp= "<img src=\"include/phpThumb.php?src=../builder/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='mar7L' />";
 else
 $temp ="<img src=\"include/phpThumb.php?src=../builder/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='mar7L'/>";
 
	return $temp;			}
	
// display builder logo inside project	
function view_builder_logo_inside_project($img,$w,$h,$alt)
{
 if(file_exists("../builder/".$img) && $img!='')

 $temp= "<img src=\"../include/phpThumb.php?src=../builder/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='floatL mar12R' />";
 else
 $temp ="<img src=\"../include/phpThumb.php?src=../builder/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
 
	return $temp;}
// display left side banner 
function getimage_addvertise($img,$w,$h)
{
if(file_exists("banner/".$img) && $img!='')

 $temp="include/phpThumb.php?src=../banner/".$img."&w=$w&h=$h&iar=1";
 
	return $temp;			
}

// display best deals side banner 
function getimage_bestdeal($img,$w,$h)
{
if(file_exists("../banner/".$img) && $img!='')


echo "../include/phpThumb.php?src=../banner/".$img."&w=$w&h=$h&iar=1";
//exit;


 $temp="../include/phpThumb.php?src=../banner/".$img."&w=$w&h=$h&iar=1";
 
	return $temp;			
}




// display main banner 
function get_mainbanner_img($img)
{
$w="90";
$h="45";
 if(file_exists("banner/".$img) && $img!='')

$temp ="<img src=\"include/phpThumb.php?src=../banner/".$img."\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
return $temp;			
}

// dispaly main banner inside dlf folder
function get_main_slider($img)
{
$w="20";
$h="10";
 if(file_exists("../banner/".$img) && $img!='')

$temp ="<img src=\"../include/phpThumb.php?src=../banner/".$img."\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
return $temp;			
}


// display logo of projct on builder page

function view_logo_project($img,$w,$h,$alt)
{
 if(file_exists("logo/".$img) && $img!='')

 $temp= "<img src=\"include/phpThumb.php?src=../logo/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='floatL mar12R' />";
 else
 $temp ="<img src=\"include/phpThumb.php?src=../logo/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
 
	return $temp;			}
	
// display logo of projct inside page

function view_project_logo($img,$w,$h,$alt)
{
 if(file_exists("../logo/".$img) && $img!='')

 $temp= "<img src=\"../include/phpThumb.php?src=../logo/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='floatL mar12R' />";
 else
 $temp ="<img src=\"../include/phpThumb.php?src=../logo/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
 
	return $temp;
}

// display location map & master Plan & siteLayout & Numbering Plan

function view_project_plan($img,$w,$h,$alt)
{
 if(file_exists("../project/plans/".$img) && $img!='')

 $temp= "<img src=\"../include/phpThumb.php?src=../project/plans/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='floatL mar12R' />";
 else
 $temp ="<img src=\"../include/phpThumb.php?src=../project/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
 
	return $temp;
}
// display project gallery 
function view_project_gallery($img,$w,$h,$alt)
{
if(file_exists("../gallery/".$img) && $img!='')

 $temp= "<img src=\"../include/phpThumb.php?src=../gallery/".$img."&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" 
 alt='$alt' class='floatL mar12R' />";
 else
 $temp ="<img src=\"../include/phpThumb.php?src=../gallery/nophoto.jpg\"&w=$w&h=$h&iar=1\"; border='0' width=\"$w\" height=\"$h\" alt='$alt' class='floatL mar12R'/>";
 
	return $temp;
}




// get property id
function projectid($page)
{
$name2=mysql_fetch_array(mysql_query("select pid from pagemgn where new_pagename ='$page'"));
return $name2['pid'];
}
// get original page name id
function ori_pagename($page)
{
$name2=mysql_fetch_array(mysql_query("select pn_id  from pagemgn where new_pagename ='$page'"));
return $name2['pn_id'];
}
// get original page name
function orignal_page($pnid)
{
$name2=mysql_fetch_array(mysql_query("select page_name from manage_pagename where pn_id='$pnid'"));
return $name2['page_name'];

}

// orginal inner page

function ori_pagename_inner($page)
{
$name2=mysql_fetch_array(mysql_query("select pn_id from pagemgn where new_pagename='$page'"));
return $name2['pn_id'];
}




// get new page name
function page_name($pid,$pn_id)
{
$name2=mysql_fetch_array(mysql_query("select new_pagename from pagemgn where pid ='$pid' and pn_id ='$pn_id'"));
return $name2['new_pagename'];
}

function pro_pagename($pid)
{
	$name2=mysql_fetch_array(mysql_query("select new_pagename from pagemgn where pid='$pid'"));
	return $name2['new_pagename'];
}

// get footer link 

function get_link($pid)
{
	$link=mysql_fetch_array(mysql_query("select links from manage_property_footer where pid='$pid'"));
	return $link['links'];
}

//get project url in forntend area

function project_url($pid)
{
	$name4=mysql_fetch_array(mysql_query("select new_pagename from pagemgn where pid='$pid' and pn_id='1'"));
	return $name4['new_pagename'];
	
}

function project_homeurl($pid)
{
	$name4=mysql_fetch_array(mysql_query("select new_pagename from pagemgn where pid='$pid' and pn_id='20'"));
	return $name4['new_pagename'];
	
}


// get feature heading name

function feature_name($pid)
{
	$fHead=mysql_fetch_array(mysql_query("select features from manage_property where pid='$pid' and status='active'"));
	return $fHead['features'];
}

// display google analytics function

function googleanlytics()
{
	$gname=mysql_query("select * from manage_google_webmaster");
	$grow=mysql_fetch_object($gname);
	return $grow;
}
//dispaly builder information 

function builder_information()
{
	$bname=mysql_query("select * from manage_cms where status='active'");
	$brow=mysql_fetch_object($bname);
	return $brow;
}
// display builder contact number 
function builder_contact()
{
	$bname2=mysql_query("select * from manage_property_builder");
	$brow2=mysql_fetch_object($bname2);
	return $brow2;
}
// View features content

function specification_property($pid)
{
	$fname=mysql_fetch_array(mysql_query("select specification from manage_property where pid='$pid'"));
	return $fname['specification'];
}


// View Overview content

function overview_property($pid)
{
	$fname=mysql_fetch_array(mysql_query("select overview from manage_property where pid='$pid'"));
	return $fname['overview'];
}


// view press release content

function press_release($pid)
{

	$pname=mysql_fetch_array(mysql_query("select press_release from manage_property where pid='$pid'"));
	 return $pname['press_release'];
}
// view Blog in Forntend
function blog($pid)
{

	$pname=mysql_fetch_array(mysql_query("select blog from manage_property where pid='$pid'"));
	 return $pname['blog'];
}

// view contact us content

function contactus($pid)
{
	$cname=mysql_fetch_array(mysql_query("select contact_us_desc from manage_property where pid='$pid'"));
	return $cname['contact_us_desc'];
}

function changecolor($pid)
{
	$ccolor=mysql_fetch_array(mysql_query("select css_color from manage_property where pid='$pid'"));
	return $ccolor['css_color'];
}


// view mail content 

function mailcontent($pid)
{
$name=mysql_fetch_array(mysql_query("select mail_desc from manage_mail where pid ='$pid'"));
return $name['mail_desc'];}

// view mail content 
function mailheading($pid)
{
$name2=mysql_fetch_array(mysql_query("select mail_heading from manage_mail where pid ='$pid'"));
return $name2['mail_heading'];}

// get from name 

function mailfromheading($pid)
{
$name2=mysql_fetch_array(mysql_query("select from_heading from manage_mail where pid ='$pid'"));
return $name2['from_heading'];
}

// get from name 

function mailfromemail($pid)
{
$name2=mysql_fetch_array(mysql_query("select from_email from manage_mail where pid ='$pid'"));
return $name2['from_email'];
}
function property_location($pid)
{
$name2=mysql_fetch_array(mysql_query("select state from manage_property_type_location where pt_loc='$pid'"));
return $name2['state'];
}

function property_location_name($pid)
{
$name2=mysql_fetch_array(mysql_query("select location_name from manage_property_type_location where pt_loc='$pid'"));
return $name2['location_name'];
}

function tabname($pid)
{
$name2=mysql_fetch_array(mysql_query("select tab_name from manage_property_tab where pn_id='$pid'"));
return $name2['tab_name'];
}

function page_title($pid,$pageid)
{
$name2=mysql_fetch_array(mysql_query("select page_title from manage_seo where pid ='$pid' and page_id='$pageid'"));
return $name2['page_title'];
}
function meta_desc($pid,$pageid)
{
$name2=mysql_fetch_array(mysql_query("select meta_description from manage_seo where pid ='$pid' and page_id='$pageid'"));
return $name2['meta_description'];
}
function meta_keyword($pid,$pageid)
{
$name2=mysql_fetch_array(mysql_query("select meta_keyword from manage_seo where pid ='$pid' and page_id='$pageid'"));
return $name2['meta_keyword'];
}

function pageid($newpagename)
{
	$name2=mysql_fetch_array(mysql_query("select page_id from pagemgn where new_pagename='$newpagename'"));
	return $name2['page_id'];
}


function staticpagenamefromseo($newpagename)
{
	$name2=mysql_fetch_array(mysql_query("select pn_id from pagemgn where page_id='$newpagename'"));
	return pagename($name2['pn_id']);
}

function read_file($filename,$folder)
{
	$full_path = $folder.$filename;
	if($file = @fopen("$full_path", "r"))  
	{ 
		$len=0;
		while(!feof($file))
		{
			fgetc($file);
			$len++;
		}
		$file = @fopen("$full_path", "r");
		$ft=file_read_delim($file,'',$len);
		fclose($file);  
	}
	return $ft;
}	
function file_read_delim($fh,$delim,$len)
{
   $rec = '';
   while(!feof($fh))
   {
	   $buf = fread($fh,$len);
   }  
   return $buf;
}



function location_mapname($id)
{
$lsect_log=mysql_fetch_array(mysql_query("select location_image from manage_property where pid='$id'"));
$img=$lsect_log['location_image'];
return $img;
}
function site_layoutname($id)
{
$name2=mysql_fetch_array(mysql_query("select site_layout from manage_property where pid='$id'"));
$image=$name2['site_layout'];
return $image;
}	
function unitplanfarmvilla($id)
{
$val=mysql_num_rows(mysql_query("select * from manage_floor_category where floor_catname='farmvilla'"));
//$val = $name2['type'];
return $val;
}
function unitplancountryfloor($id)
{
$val=mysql_num_rows(mysql_query("select * from manage_floor_category where fcat_id='$id' and floor_catname='countryfloor'"));
//$val = $name2['type'];
return $val;
}

function property_subtype($field)
{
$cms=mysql_fetch_array(mysql_query("select sub_type_name from manage_property_sub_type where stype='".$field."'"));
return $cms['sub_type_name'];
}

function country_fetch($cid_val)
{
$sql=mysql_fetch_array(mysql_query("select con_name from gs_country where con_id='$cid_val'"));
return $sql['con_name'];

}

function floorheading($proid)
{ 
   $name=mysql_fetch_array(mysql_query("select distinct heading2 from manage_floorplan where pid='$proid' limit 0,1"));
	//$name=mysql_fetch_array(mysql_query("select heading2 from manage_floorplan where pid='$proid'"));
	return $name['heading2'];
}

function floorcategory_name($fcat)
{
	$fcat_name=mysql_fetch_array(mysql_query("select floor_catname from manage_floor_category where fcat_id='$fcat'"));
	return $fcat_name['floor_catname'];
}

function orgpagename($id,$pageid)
{

	$pagename=mysql_query("select new_pagename from pagemgn where page_id='$pageid'");
	$fetch=mysql_fetch_array($pagename);
	
	$val=$fetch['new_pagename'];
	
	return $val;
	}
	
	
	
function current_tab($tb_id,$projectid)
{
$sql = mysql_query("SELECT * FROM `pagemgn` WHERE pn_id ='$tb_id' and pid='$projectid'"); 
if(mysql_num_rows($sql)>0)
{
$fe=mysql_fetch_array($sql);
return $fe['new_pagename'];
}
else
{
return false;
}

}

function floorplan_subcat_name($field)
{
$fcat_name=mysql_fetch_array(mysql_query("select sub_type_name from manage_floor_subcategory where stype='$field'"));
	return $fcat_name['sub_type_name'];
}

function checkEnquiryLimit($email,$contact,$time)
	{
    $sql=mysql_query("SELECT  inq_id FROM inquiry WHERE ( email_id='".$email."' || contact_no='".$contact."') and date(posted_date)=date('".$time."')"); 
	$num= mysql_num_rows($sql); 
	return $num;
	}
	
function sendMail($name,$email,$bulider,$project,$country,$query,$alerts,$contact,$time) {

$pr_enquiry_email_id="enquiry@hcorealestates.com";
$system_ip2=$_SERVER['REMOTE_ADDR'];
$country_name=country_fetch(trim($country));
$sql="insert into inquiry set name='".$name."',email_id='".$email."',comment='".$query."',contact_no='".$contact."',project_name='".$project."',CountryName='".$country."',prefer='$alerts', posted_date='$time'";


$ins=mysql_query($sql) or die(mysql_error());

if($ins)
{
$subject="Enquiry - Emaar Palm Heights";
$abc=$project;
$message = "<table width='500' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#F0F0F0' style='border:1px solid #dddddd;'>
<tr>
<td align='center' style='padding:10px 0; border-bottom:1px solid #dddddd'><img src='"._BASEURL_."images/logo.jpg'></td>
</tr>
<tr>
<td align='center'>
<table width='100%' align='center' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' style='padding:15px;'>
<tr>
<td style='font-family:arial,Arial,sans-serif;font-size:18px;line-height:24px;color:#333333; padding-bottom:15px'>Hello,
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Thanks for showing your wholehearted interest in ".$project.".</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>We make sure our expertise meets all your expectations, ASAP</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Someone will assist you very soon.</div>
<div style='font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'>Thanks</div>
</td>
</tr>
</table>
</td>
</tr>
<tr>
<td align='left' style='padding:15px; border-top:1px solid #dddddd;font-family:arial,Arial,sans-serif;font-size:13px;color:#333333;'><strong>Note:</strong> Replies to this e-mail will not be responded to.</td>
</tr>
</table>";


$admsg='<table width="331" border="0" cellpadding="0" cellspacing="0" style="width:310px; background-color:#ffffff; border:1px solid #cccccc; font-family:Arial, Helvetica, sans-serif; font-size:12px; float:left; overflow:hidden;">
<tr>
<td valign="middle" colspan="2" height="45" style="border-right:1px solid #cccccc; font-size:12px; font-weight:bold; text-align:center;" width="55%"><img src="'._BASEURL_.'images/logo.jpg"></td>

</tr>
<tr>
<td colspan="2" style="border-top:1px solid #cccccc;">
<table width="100%" border="0" cellspacing="0" cellpadding="0" style=" font-family:Arial, Helvetica, sans-serif; font-size:12px;">
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="18%">Name</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="3%">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;" width="79%">'.$name.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Email</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $email.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Phone</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">&nbsp;'. $contact.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">Country</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'. $country_name.'</td>
</tr>
<tr style="background-color:#f0f0f0;">
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;"><span class="resale_1">Project</span></td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">:</td>
<td style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$project.'</td>
</tr>
<tr style="background-color:#ffffff;">
<td colspan="3" style="padding:5px 2px 5px 4px; border-bottom:1px solid #cccccc;">'.$query.'</td>
</tr>
</table>
</td>
</tr>
</table>'; 
$body=$message;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<info@emaarpalmheightsgurgaon.org.inn>" . "\r\n";
$x=mail($email,$subject,$body,$headers);

$to=$pr_enquiry_email_id;
$subject.=" - Contact us ";
$body=$admsg."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: ".$abc."<info@emaarpalmheightsgurgaon.org.in>" . "\r\n";
$x1=mail($to,$subject,$body,$headers);
return true;
}
else
{
return false;	
}
$_SESSION['flashmessage']=$errmsg;
echo "<script>window.location.href='"._BASEURL_.$url."'</script>";

}

function sendToRemoteServer($website,$project_name=null,$client,$phone,$email,$country=null,$message=null)
	{
	
	$url = 'crmtech.co.in/data-via-remote-server/data-via-remote-server.php';
	$fields = array(
	'website' => $website,
	'project_name' => $project_name,
	'client' => $client,
	'phone' => $phone,
	'email' => $email,
	'country' => $country,
	'message' => $message
	);
	
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	@rtrim($fields_string, '&');
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	$result = curl_exec($ch);
	if ($result==2) {curl_close($ch); return true; } else { curl_close($ch);return false;}
	}


?>