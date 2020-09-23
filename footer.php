<div class="footer_bg">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12">
<?php /*?><ul>
<li><a href="<?=_BASEURL_?>index.html">Home</a></li>
<li><a href="<?=_BASEURL_?>specification.html">Specifications</a></li>
</ul><?php */?>
<?php /*?><div class="dis" id="rera_con"></div><?php */?><div class="ftr_copyright">Copyright &copy; EmaarPalmHeightsGurgaon.org.in <span id="curr_date"></span> | All Right Reserved | <a href="disclaimer.html" rel="nofollow">Disclaimer</a></div>

</div>
</div>
</div>
</div>
<div id="toTop"><i class="glyphicon glyphicon-menu-up"></i> <span>Enquire Now</span></div>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130168502-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-130168502-1');
</script>
<script>
$(window).scroll(function() {
if ($(this).scrollTop() > 450) {
$('#toTop').fadeIn('fast');
} else {
$('#toTop').fadeOut('fast');
}});
$("#toTop").click(function (){ $("html, body").animate({scrollTop:$('.contact_form').offset().top -50},'slow');});
var c_date = new Date();
cyear = c_date.getFullYear();
document.getElementById('curr_date').innerHTML=cyear;
</script>