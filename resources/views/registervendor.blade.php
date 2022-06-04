<!DOCTYPE html>
<html>
    <head>
    	
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noindex, nofollow">
        <title>Register Vendor</title>
        
        
        <link href="{{url('assets/img/doubleten_logo.png')}}" rel="icon">
        <link rel="manifest" href="https://partner.weddingku.com/manifest.json">
        <link href="https://partner.weddingku.com/assets/css/pro.css?v=0.7282373" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/libs/toastr/toastr.min.css" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/libs/notificationstyles/ns-default.css" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/libs/notificationstyles/ns-style-growl.css" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/libs/notificationstyles/ns-style-other.css?version=0.7282373" rel="stylesheet" type="text/css">
        <link href="https://assets2.weddingku.com/libs/sweetalert/sweetalert2.min.css" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/libs/jquery/jquery-ui.min.css?v=0.7282373" rel="stylesheet" type="text/css">
        <link href="https://partner.weddingku.com/assets/css/base.css?v=0.7282373" rel="stylesheet" type="text/css">
        <link href="{{url('assets/css/tes.css')}}" rel="stylesheet">
        <link href="{{url('assets/css/custom.css')}}" rel="stylesheet">
        <!--<link href="https://partner.weddingku.com/assets/css/component_ui.css?v=0.7282373" rel="stylesheet" type="text/css">-->
        <!--<link href="https://partner.weddingku.com/assets/css/custom.css?v=0.7282373" rel="stylesheet" type="text/css">-->
        <link href="https://partner.weddingku.com/assets/js/bootstrap/bootstrap-tour.min.css?v=0.7282373" rel="stylesheet" type="text/css">
        <script src="https://www.gstatic.com/firebasejs/4.1.3/firebase.js" type="text/javascript"></script>
        <script src="https://partner.weddingku.com/assets/js/app.js?v=0.7282373" type="text/javascript"></script>
        <script>
         /*   (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:590875,hjsv:5};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');*/
        </script>
        <!-- Global site tag (gtag.js) - Google Analytics 
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-24781983-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'UA-24781983-2');
        </script>-->
        <!-- Facebook Pixel Code 
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '416010802152994');
          fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
          src="https://www.facebook.com/tr?id=416010802152994&ev=PageView&noscript=1"
        /></noscript>-->
        <!-- End Facebook Pixel Code -->
                <!-- dataTables css -->
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <link href="https://partner.weddingku.com/assets/css/register.css" rel="stylesheet" type="text/css">
          
            <style>
            
            </style></head>
	<body>
    <div class="wrapper">
        <div class="wrapper animsition" style="animation-duration: 1500ms; opacity: 1;">
            <header class="main-header" style="margin-bottom: 20px;"> 
            <!-- top navigation -->
            <nav class="navbar top-nav">
                <div class="container">
                <div class="navbar-header"> <a class="navbar-brand" href="dashboard"> <img src="assets/img/doubleten_logo_header.png" alt=""></a> </div> 
                </div>
                <!-- /. container --> 
            </nav>
            <!-- /. top navigation --> 
            <!--  main navigation -->
            <!-- /. main navigation -->
            <div style="margin-top: 0px;text-align:center;"><div class="container"></div></div>
            <div class="clearfix"></div>
            </header>

            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Vendor Registration</h1>
                                <small>Get Started! Enter Your Business Information</small>
                            </div>
                        </div>  
						  <!-- /.Content Header (Page header) -->
                        <!-- Visit -->

                        <form action="{{ url('registervendor') }}" name="frmInput" method="post" onsubmit="return isValid();">
						@csrf
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="panel">
										<div class="content-send">
											<div class="panel-heading border-heading">
												<div class="panel-title" style="text-align:center;">
													<h3 style="color:#749ca1;">Account Information</h3><br>
													<small>You will use this email and password to login!</small>
												</div>
											</div>
											<div class="panel-body">
												
													<div class="form-group">
														<div class="col-md-12 col-sm-12 col-xs-12">
															<label class="control-label" for="picfirstname">First Name <span class="required">*</span></label>
														</div>
														 <div class="col-md-12 col-sm-12 col-xs-12">
															<input type="text" name="picfirstname" id="picfirstname" onblur="checkexfirstname(this.value);" class="form-control input-lg" size="20" required="">
															 <span id="cekfirstnameempty"></span>
														 </div>
													</div>
													<div class="form-group">
														<div class="col-md-12 col-sm-12 col-xs-12">
															<label class="control-label" for="piclastname">Last Name </label>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12">
															<input type="text" name="piclastname" id="piclastname" class="form-control input-lg" size="20">
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12 col-sm-12 col-xs-12">
															<label class="control-label" for="elseif">Email <span class="required">*</span></label>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12">
														
														<input type="text" class="form-control input-lg" name="email" id="email" onblur="checkexemail(this.value);" size="20"><div id="statemail">
														<input name="emailstat" id="emailstat" type="hidden"></div>
														<i id="emailcek">
														 </i>
														 <span id="cekemailempty"></span>
														
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12 col-sm-12 col-xs-12">
															<label class="control-label" for="elseif">Password<span class="required">*</span></label>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12">
														
														<input type="password" class="form-control input-lg" onblur="checkpass(this.value);" name="password" id="Password" size="20">
														 <span id="cekpassempty"></span>
														
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-12 col-sm-12 col-xs-12">
															<label class="control-label" for="elseif">Confirm Password <span class="required">*</span></label>
														</div>
														<div class="col-md-12 col-sm-12 col-xs-12">
														
														<input type="password" class="form-control input-lg" onblur="checkconpass(this.value);" name="confPassword" id="ConfPassword" size="20">
														 <span id="cekconpassempty"></span>
														<span id="conpasscek"></span>
														
														</div>
													</div>
												</div>
											</div>
										<div class="regis-border"></div>
										<div class="content-send">
											<div class="panel-heading border-heading">
												<div class="panel-title" style="text-align:center;">
													<h3 style="color:#749ca1;">Business Information</h3><br>
													<small>Your business related information! further detail can be updated later on.</small>
												</div>
											</div>
											<div class="panel-body">
                                                <div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<label class="control-label" for="brand">Brand Name <span class="required">*</span></label>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
													<ul class="sddm">
															<li>
																<input type="text" name="brand" id="brand" class="form-control input-lg" onblur="checkexbrand(this.value);" value="" maxlength="100" onkeyup="loadCari(this.value)" autocomplete="OFF" size="20" required=""><input id="partnerid" name="partnerid" type="hidden"><input name="txtCek" type="hidden" value="0">
																<small id="emailHelp" class="text-muted">Your brand, i.e. QR Wedding Expert, will be cross-checked with existing data filtered by city.</small>
																<div id="statbrand">
																	<input name="brandstat" id="brandstat" type="hidden" value="1">
																</div>
															</li>
														</ul>
														<span id="cekbrandnameempty"></span>
														<span id="brandcek"></span>
														<div id="checked_isme">
														</div>
													</div>
												</div>

												<div class="form-group" id="txtaddress">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<label class="control-label" for="address">Business Address <span class="required">*</span></label>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
													<textarea type="text" id="address" name="address" class="form-control input-lg" rows="1" onblur="checkexaddress(this.value);" cols="20"></textarea>
													 <small id="emailHelp" class="text-muted">Your outlet address, i.e. ABC street No. 123</small><br>
													 <span id="cekaddressempty"></span>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-6 col-sm-6 col-xs-12">
														<label class="control-label" for="city">City <span class="required">*</span></label>
														<div>
														
                                                            <select class="form-control input-lg" id="zona" name="zona" onchange="loadCity(this.value);">
                                                                    
                                                                    <optgroup label="Barlingmascakeb">
                                                                <option value="1">Purwokerto</option><option value="4">Banyumas</option><option value="16">Purbalingga</option><option value="21">Cilacap</option><option value="5">Banjarnegara</option>
                                                                    
                                                            </optgroup></select>
															
															<span id="cekcitycodeempty"></span>
														</div>
													</div>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
														<label class="control-label" for="phone">Phone <span class="required">*</span></label>
														<div>
															<input type="text" name="phone" id="phone" onblur="checkexphone(this.value);" class="form-control input-lg" size="20">
															<small id="emailHelp" class="text-muted">Your business contact no, +CountryCode + number, i.e. +62216505350</small><br>
															<span id="cekphoneempty"></span>
														</div>
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<label class="control-label" for="deskripsi">Business Deskripsi</label>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
													<input type="text" id="deskripsi" name="deskripsi" class="form-control input-lg" value="" size="20">
													<small id="emailHelp" class="text-muted">Your registered company legal entity, i.e. PT XYZ Ltd.</small>
													</div>
												</div> 

												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<label class="control-label" for="emailbusiness">Business Email</label>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
													<input type="text" id="emailbusiness" name="emailbusiness" class="form-control input-lg" value="" size="20">
													<small id="emailHelp" class="text-muted">Your registered company legal entity, i.e. PT XYZ Ltd.</small>
													</div>
												</div> 

												
												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12">
														<label class="control-label" for="category">Category <span class="required">*</span></label>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-12">
														<select class="form-control input-lg" name="businesscategory" onblur="checkexcategory(this.value);" id="businesscategory">
															@foreach($datakategori as $data)
															<option value="{{ $data->id_kat_vendor}}">{{ $data->nama_kategori}}</option>
															@endforeach
														
														</select>
													<span id="cekcategorynameempty"></span>
													</div>
												</div>
												
												
												
												<div class="col-md-12 col-sm-12 col-xs-12">
												</div>
												<div class="form-group">
													<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="g-recaptcha" id="captcha-verify" data-sitekey="6LevJwoTAAAAAG5FMZ-LjS7Kl8vIZ47dslEWKkJg"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LevJwoTAAAAAG5FMZ-LjS7Kl8vIZ47dslEWKkJg&amp;co=aHR0cHM6Ly9wYXJ0bmVyLndlZGRpbmdrdS5jb206NDQz&amp;hl=en&amp;v=sG0iO6gHcGdWJzjJjW9AY49S&amp;size=normal&amp;cb=brgfcdjvzalb" width="304" height="78" role="presentation" name="a-4nidotog79ad" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
													</div>
												</div>
												<div class="form-group">
												  <div class="col-md-12 col-sm-12 col-xs-12">
													<input type="hidden" value="doSubmit" name="action">
													<input type="submit" id="btnNext" class="btn btn-primary pull-right" value="Next">
													
												  </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </form>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <footer class="main-footer" style="">
    <div class="container">
        <!--div class="pull-right hidden-xs"> <b>Version</b> </div-->
        <strong>Copyright © 2021 <a href="https://www.weddingku.com" target="_blank">Weddingku</a>.</strong> All rights reserved. <i class="fa fa-heart color-green"></i>
    </div>
</footer> 
<script src="https://assets2.weddingku.com/libs/jquery/jquery.min.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/jquery/jquery-ui.min.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/bootstrap/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="https://assets2.weddingku.com/libs/notificationstyles/modernizr.custom.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/notificationstyles/classie.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/notificationstyles/notificationFx.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/notificationstyles/snap.svg-min.js" type="text/javascript"></script>
script src="https://assets2.weddingku.com/libs/toastr/toastr.min.js" type="text/javascript"></script-->
<script src="https://partner.weddingku.com/assets/libs/toastr.min.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/animsition/animsition.min.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/bootsnav/bootsnav.js" type="text/javascript"></script>
<script src="https://assets2.weddingku.com/libs/sweetalert/sweetalert2.min.js" type="text/javascript"></script>

        </div>
        <!-- /.content-wrapper -->
        <script src="https://partner.weddingku.com/assets/js/main.js?version=0.7282373" type="text/javascript"></script>
		 <!-- dataTables js -->
		
		 <script>
			var notification = "";
		 </script>
		<script src="https://assets2.weddingku.com/libs/loadpage/loadpage.js" type="text/javascript"></script>
		<script src="https://assets2.weddingku.com/libs/drop/drop.js" type="text/javascript"></script>
		<script src="https://partner.weddingku.com/assets/js/register/default.js?v=0.4" type="text/javascript"></script>
		<script>
		
			loadCity('1');
		
		var emailsend = 0
		</script>
		
    
</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<script src="js/main.js"></script>
		<!-- Template created and distributed by Colorlib -->
</body>
</html>
