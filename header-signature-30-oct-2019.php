<nav class="navbar navbar-default navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="<?=_BASEURL_?>signature.html"><img src="images/logo-signature.jpg" alt="Emaar Palm Heights Signature Tower" /></a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav ">

<li <? if(basename($_SERVER['PHP_SELF'])=='signature.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature.html">Home</a></li>
<?php /*?><li <? if(basename($_SERVER['PHP_SELF'])=='price-list.php') {?> class="active" <? } ?>><a href="price-list.html">Price List</a></li><?php */?>
<li <? if(basename($_SERVER['PHP_SELF'])=='signature-specifications.php') {?> class="active" <? } ?>><a href="signature-specifications.html">Specifications</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='signature-location-map.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature-location-map.html">Location Map</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='signature-master-plan.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature-master-plan.html">Master Plan</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='signature-floor-plan.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature-floor-plan.html">Floor Plan</a></li>
<li <? if(basename($_SERVER['PHP_SELF'])=='signature-gallery.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>signature-gallery.html">Gallery</a></li>
<?php /*?><li><a href="javascript:void(0)"><img src="images/phone_no.png" width="150" height="17" alt="Phone No." /></a></li><?php */?>
</ul>

<ul class="nav navbar-nav navbar-right">

<li <? if(basename($_SERVER['PHP_SELF'])=='index.php') {?> class="active" <? } ?>><a href="<?=_BASEURL_?>">PALM HEIGHTS</a></li>

</ul>

</div>
</div>
</nav>
