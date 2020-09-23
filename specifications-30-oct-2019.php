<?php	
ob_start();
session_start();
include("include/db.inc.php");
include("include/var.inc.php");
include("include/function.inc.php");
include("include/class.messages.php");
$db1=new db();
$db1->open();
$msg=new Messages();
$page="Overview";
include("mail.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Specifications | Features & Amenities | Emaar Palm Heights </title>
<meta name="description" content="Specifications - Find here specifications, features & amenities of Emaar Palm Heights Gurgaon Sector 77 nearby national highway-8"/>
<?php require_once("common-part.php");?>
<link rel="canonical" href="<?=_BASEURL_?>specifications.html" />
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("banner_form.php");?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-sm-12 col-md-12">
<div class="location_area">
<h1>Specifications - <?=_heading1_?></h1>

<table class="table table-bordered table-stripped">
<tbody>
<tr>
<td class="topplan">Specifications</td>
</tr>
<tr>
  <td><strong>Highlights</strong></td>
</tr>
<tr>
  <td><ul><li>Aesthetically pleasing neighbourhood with lively self sustaining ecosystem</li>
    <li>Part of large planned secure gated community</li>
    <li>All  3 BHK + Lounge + Utility apartments with spacious layouts</li>
    <li>A grand two-level clubhouse with state of the art amenities</li>
  </ul></td>
</tr>
<tr>
  <td><strong>Features &amp; Amenities</strong></td>
</tr>
<tr>
  <td><ul>
    <li>G + 24 - Tall towers with breathtaking   sky views</li>
    <li>24x7 security and controlled access</li>
    <li>Covered car parks</li>
    <li>Well lit &amp; marked roads</li>
    <li>Modern clubhouse</li>
    <li>Large landscaped green acreage</li>
    <li>Low density housing clusters</li>
    <li>Power back-up</li>
    <li>Jogging paths</li>
    <li>Yoga break out areas</li>
    <li>L-shaped swimming pool with deck</li>
    <li>Tennis &amp; Badminton courts</li>
    <li>Half-Basketball court </li>
    <li>Kids play area</li>
  </ul></td>
</tr>
<tr>
  <td><strong>Clubhouse</strong></td>
</tr>
<tr>
  <td>RELAXED SOCIAL LIFE<ul><li>Reception lounge </li>
    <li>Multi-purpose hall</li>
    <li>Dining room</li>
    <li>Proposed business center</li>
    <li>Party terrace garden</li>
  </ul>
  WELLNESS & HEALTH <ul><li>Fully equipped Gymnasium</li>
    <li>Steam &amp; sauna treatment room </li>
    <li>Yoga terrace</li>
    <li>L-shaped swimming pool with deck</li>
    <li>Crèche, play room &amp; kids pool</li>
  </ul>
  </td>
</tr>
<tr>
  <td><strong>Specifications</strong></td>
</tr>
<tr>
  <td><ul><li>1.5 Ton ACs - each in Living Room,Dinning/Lobby, Master Bedroom and Other Bedrooms</li>
    <li>Modular Switches</li>
    <li>Laminated Wooden Flooring - Master and Other Bedrooms</li>
    <li>Integrated Modular Kitchen (Upper + Lower Cabinet)+ Chimney + Hob + Geyser</li>
    <li>Shower cubicle in master bathroom</li>
    <li>Weather Proof Paint - Balconies(Walls &amp; Ceiling) </li>
    <li>Power Back-up of 5 KVAper apartment</li>
    <li>Perimeter Security</li>
    <li>Kitchen, Bathrooms and Balconies - Anti-Skid Tiles (Flooring) </li>
  </ul></td>
</tr>
<tr>
  <td><strong>Connectivity</strong></td>
</tr>
<tr>
  <td><ul>
    <li>Centrally located at the intersection of NH-8, Dwarka Expressway and 60 mtr. wide sector road</li>
    <li>Proposed metro station in vicinity</li>
    <li>Proximity to well established schools, world-class hospitals, malls, markets and banks </li>
    <li>15 mins. drive to IMT Manesar</li>
    <li>20 mins. drive to MG Road and Cyber Hub</li>
    <li>30 mins. drive to IG International Airport (T3)</li>
  </ul></td>
</tr>
</tbody>
</table>

</div>
</div>
</div>
</div>
<?php require_once("footer.php");?>
<script type="text/javascript" src="js/global.js"></script>
</body>
</html>