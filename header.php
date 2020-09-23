<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="<?=_BASEURL_?>"><img src="images/logo.jpg" alt="<?=_heading1_?> Sector 77" /></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav ">

<li <? if(basename($_SERVER['PHP_SELF'])=='index.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>">Home</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='price-list.php') {?> class="active" <? } ?>><a href="price-list.html">Price List</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='specifications.php') {?> class="active" <? } ?>><a href="specifications.html">Specifications</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='location-map.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>location-map.html">Location Map</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='master-plan.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>master-plan.html">Master Plan</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='floor-plan.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>floor-plan.html">Floor Plan</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='gallery.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>gallery.html">Gallery</a></li>
<?php /*?><li><a href="javascript:void(0)"><img src="images/phone_no.png" width="150" height="17" alt="Phone No." /></a></li><?php */?>
</ul>

<ul class="nav navbar-nav navbar-right">

<?php /*?><li <? if(basename($_SERVER['PHP_SELF'])=='signature.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature.html">SIGNATURE</a></li><?php */?>

</ul>

</div>
</div>
</nav>
