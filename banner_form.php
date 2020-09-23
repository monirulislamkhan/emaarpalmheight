<div class="bannersection" style="background-image:url(<?=_BASEURL_?>images/emaar-palm-heights-banner.jpg);"></div>
<div class="contact_form"><div class="container">
<div class="row">
<div class="col-lg-8"></div>
<div class="col-lg-4 col-sm-12">
<div class="form_bg">
<div class="enq_form">
<div class="phone_no"><a href="tel:+919811999666">Call us: +91 9811 999 666</a><div class="or_con">Or</div></div>
<div class="enq_heading"><span>Express Your Interest</span></div>
<?php echo $msg->display();?>
<form role="form"  name="form1" method="post" onSubmit="return validate(true);">
<div class="row">
<div class="col-md-12 col-sm-6 col-xs-6 xmall_414"><div class="form-group"><input type="text" name="name" class="form-control" placeholder="Enter Your Name" required></div></div>
<div class="col-md-12 col-sm-6 col-xs-6 xmall_414"><div class="form-group"><input type="email" name="email" class="form-control" placeholder="Enter email" required></div></div>
<div class="col-md-12 col-sm-6 col-xs-6 xmall_414"><div class="form-group"><select name="country" id="country" onchange="countrycode(this.options[this.selectedIndex].value)" class="form-control" required><option value="">Select Country</option></select></div></div>
<div class="col-md-12 col-sm-6 col-xs-6 xmall_414"><div class="input-group">
<span class="input-group-addon" id="phonecode"></span>
<input type="tel" name="phone" placeholder="Phone No." class="form-control" value="" required="required"></div></div>
<?php /*?><div class="col-md-12 col-sm-12 col-xs-12 xmall_414"><div class="form-group"><textarea class="form-control" name="comment" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">I need to know more about this project.</textarea></div></div><?php */?>
<input  type="hidden" name="comment" value="I need to know more about this project." />
<div class="col-md-12 col-sm-12 col-xs-12 xmall_414"><div class="text-center"><input type="submit" name="Submit" class="btn btn-warning btn-block" value="Get Call Back"></div></div>
</div>
</form>
</div>
</div>
</div>
</div>
</div></div>