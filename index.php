<?PHP
require_once("./include/fgcontactform.php");
$formproc = new FGContactForm();
$formproc->AddRecipient('krazy@moonchildvisuals.co.za');
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');
if(isset($_POST['submitted']))
{
if($formproc->ProcessForm())
{
$formproc->RedirectToURL("thank-you.php");
}
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>NGOHO</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="" name="keywords">
		<meta content="" name="description">
		<!-- Favicons -->
		<link href="img/favicon.png" rel="icon">
		<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
		<!-- Bootstrap CSS File -->
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Contact form css -->
		<link rel="stylesheet" type="text/css" href="css/contactstyle.css" />
		<!-- Libraries CSS Files -->
		<link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
		<link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
		<link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
		<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="lib/animate/animate.min.css" rel="stylesheet">
		<link href="lib/venobox/venobox.css" rel="stylesheet">
		<!-- Nivo Slider Theme -->
		<link href="css/nivo-slider-theme.css" rel="stylesheet">
		<!-- Main Stylesheet File -->
		<link href="css/style.css" rel="stylesheet">
		<!-- Responsive Stylesheet File -->
		<link href="css/responsive.css" rel="stylesheet">
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	</head>
	<!-- contact form css -->
	<link rel="STYLESHEET" type="text/css" href="contact.css" />
	<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	<body data-spy="scroll" data-target="#navbar-example">
		<div id="preloader"></div>
		<header>
			<!-- header-area start -->
			<div id="sticker" class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<!-- Navigation -->
							<nav class="navbar navbar-default">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
									<!-- Brand -->
									<a class="navbar-brand page-scroll sticky-logo" href="index.html">
										<h1>NGOHO</h1>
									</a>
								</div>
								<div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
									<ul class="nav navbar-nav navbar-right">
										<li class="active">
											<a class="page-scroll" href="#home">Home</a>
										</li>
										<li>
											<a class="page-scroll" href="#about">About</a>
										</li>
										<li>
											<a class="page-scroll" href="#services">Services</a>
										</li>
										<li>
											<a class="page-scroll" href="#contact">Contact</a>
										</li>
									</ul>
								</div>
								<!-- navbar-collapse -->
							</nav>
							<!-- END: Navigation -->
						</div>
					</div>
				</div>
			</div>
			<!-- header-area end -->
		</header>
		<!-- header end -->
		<!-- Start Slider Area -->
		<div id="home" class="slider-area">
			<div class="bend niceties preview-2">
				<div id="ensign-nivoslider" class="slides">
					<img src="img/slider/4.jpg" alt="" title="#slider-direction-1" />
					<img src="img/slider/2.jpg" alt="" title="#slider-direction-2" />
					<img src="img/slider/3.jpg" alt="" title="#slider-direction-3" />
				</div>
				<!-- direction 1 -->
				<div id="slider-direction-1" class="slider-direction slider-one">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content">
									<!-- layer 1 -->
									<div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
										<h2 class="title1">NGOHO ACCOUNTING AND BUSINESS CONSULTANTS </h2>
									</div>
									<!-- layer 2 -->
									<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
										<h1 class="title2">We Bring your Accounting books to Life </h1>
									</div>
									<!-- layer 3 -->
									<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
										<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
										<a class="ready-btn page-scroll" href="#about">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- direction 2 -->
				<div id="slider-direction-2" class="slider-direction slider-two">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content text-center">
									<!-- layer 1 -->
									<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
										<h2 class="title1">ACCOUNTING</h2>
									</div>
									
									<!-- layer 3 -->
									<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
										<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
										<a class="ready-btn page-scroll" href="#about">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- direction 3 -->
				<div id="slider-direction-3" class="slider-direction slider-two">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="slider-content">
									<!-- layer 1 -->
									<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
										<h2 class="title1">TAXATION</h2>
									</div>
									<!-- layer 2 -->
									<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
										<a class="ready-btn right-btn page-scroll" href="#services">See Services</a>
										<a class="ready-btn page-scroll" href="#about">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Slider Area -->
		<!-- Start About area -->
		<div id="about" class="about-area area-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h2>About NGOHO</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- single-well start-->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="well-left">
							<div class="single-well">
								<a href="#">
									<img src="img/clogo.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
					<!-- single-well end-->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="well-middle">
							<div class="single-well">
								<a href="#">
									<h4 class="sec-head"></h4>
								</a>
								<p>
									Ngoho Accounting and Business Consultants is a firm established by young professionals with vast experience in accounting, tax, secretarial and related services.
								</p>
								<ul>
									<li>
										<i class="fa fa-check"></i> accounting
										<li>
											<i class="fa fa-check"></i> consulting
										</li>
										<li>
											<i class="fa fa-check"></i> taxation
										</li>
										<li>
											<i class="fa fa-check"></i> secretarial
										</li>
										<li>
											<i class="fa fa-check"></i> other professional services
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End col-->
					</div>
				</div>
			</div>
			<!-- End About area -->
			<!-- Start Service area -->
			<div id="services" class="services-area area-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="section-headline services-head text-center">
								<h2>Our Services</h2>
							</div>
						</div>
					</div>
					<div class="row text-center">
						<div class="services-contents">
							<!-- Start Left services -->
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="about-move">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="#">
												<i class="fas fa-search-dollar"></i>
											</a>
											<h4>ACCOUNTING</h4>
											<p>
												We provide the following accounting services: Preparation of annual financial statements, Monthly management accounts, Bookkeeping,Payroll Services.
											</p>
										</div>
									</div>
									<!-- end about-details -->
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="about-move">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="#">
												<i class="fas fa-money-bill-alt"></i>
											</a>
											<h4>TAXATION</h4>
											<p>
												Completion and submission of VAT, PAYE, and Income tax returns, PAYE and Income Tax, Calculation and submission of Provisional taxes, Tax planning,Dealing with SARS queries etc.
											</p>
										</div>
									</div>
									<!-- end about-details -->
								</div>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<!-- end col-md-4 -->
								<div class=" about-move">
									<div class="services-details">
										<div class="single-services">
											<a class="services-icon" href="#">
												<i class="fa fa-address-book"></i>
											</a>
											<h4>SECRETARIAL</h4>
											<p>
												We provide the following company secretarial services: CIPC registrations and amendments, BEE Certificates, Commissioner of oaths, Change in year end, CIDB registrations.
											</p>
										</div>
									</div>
									<!-- end about-details -->
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Service area -->
	<!-- our-skill-area start -->
	<div class="our-skill-area fix hidden-sm">
		<div class="test-overly"></div>
		<div class="skill-bg area-padding-2">
			<div class="container">
				<!-- section-heading end -->
				<div class="row">
					<div class="skill-text">
						<!-- single-skill start -->
						<div class="col-xs-12 col-sm-3 col-md-4 text-center">
							<div class="single-skill">
								<div class="progress-circular">
									<input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
									<h3 class="progress-h4">Customer service</h3>
								</div>
							</div>
						</div>
						<!-- single-skill end -->
						<!-- single-skill start -->
						<div class="col-xs-12 col-sm-3 col-md-4 text-center">
							<div class="single-skill">
								<div class="progress-circular">
									<input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
									<h3 class="progress-h4">Competency</h3>
								</div>
							</div>
						</div>
						<!-- single-skill end -->
						<!-- single-skill start -->
						<div class="col-xs-12 col-sm-3 col-md-4 text-center">
							<div class="single-skill">
								<div class="progress-circular">
									<input type="text" class="knob" value="0" data-rel="100" data-linecap="round" data-width="175" data-bgcolor="#fff" data-fgcolor="#3EC1D5" data-thickness=".20" data-readonly="true" disabled>
									<h3 class="progress-h4">Quality</h3>
								</div>
							</div>
						</div>
						<!-- single-skill end -->
						<!-- single-skill start -->
						
						<!-- single-skill end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- our-skill-area end -->
	<!-- Start Suscrive Area -->
	<div class="suscribe-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
					<div class="suscribe-text text-center">
						<h3>Welcome to Ngoho consultants </h3>
						<a class="sus-btn" href="#">Get A quote</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Suscrive Area -->
	<!-- Start contact Area -->
	<div id="contact" class="contact-area">
		<div class="contact-inner area-padding">
			<div class="contact-overly"></div>
			<div class="container ">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
							<h2>Contact us</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fa fa-mobile"></i>
								<p>
									Call: +27 73 886 7668<br>
								</p>
							</div>
						</div>
					</div>
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fa fa-envelope"></i>
								<p>
									Email: info@ngoho.co.za<br>
								</p>
							</div>
						</div>
					</div>
					<!-- Start contact icon column -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="contact-icon text-center">
							<div class="single-icon">
								<i class="fa fa-map-marker"></i>
								<p>
									Location: 96 Albertyn Street Vonna Valley <br>
									<span>Midrand, Johannesburg</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- Start Google Map -->
					<div class="col-md-6 col-sm-6 col-xs-12">
						<!-- Start Map -->
						<iframe src="https://maps.google.com/maps?q=96%20Albertyn%20Street%20Vonna%20Valley&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
						<!-- End Map -->
					</div>
					<!-- End Google Map -->
					<!-- Start  contact -->
					<div class="col-md-6 col-sm-6 col-xs-12" >
						
						<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
							<fieldset >
								<legend>Contact us</legend>
								<input type='hidden' name='submitted' id='submitted' value='1'/>
								<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
								<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
								<div class='short_explanation'>* required fields</div>
								<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
								<div class='container'>
									<label for='name' >Your Full Name*: </label><br/>
									<input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
									<span id='contactus_name_errorloc' class='error'></span>
								</div>
								<div class='container'>
									<label for='email' >Email Address*:</label><br/>
									<input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
									<span id='contactus_email_errorloc' class='error'></span>
								</div>
								<div class='container'>
									<label for='message' >Message:</label><br/>
									<span id='contactus_message_errorloc' class='error'></span>
									<textarea rows="10" cols="50" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
								</div>
								<div class='container'>
									<input type='submit' name='Submit' value='Submit' />
								</div>
							</fieldset>
						</form>
					</div>
					<!-- End Left contact -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Area -->
	<!-- Start Footer bottom Area -->
	<footer>
		<div class="footer-area-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="copyright text-center">
							<p>
								&copy; Copyright Ngoho consultants
							</p>
						</div>
						<div class="credits">
							Site by: <a href="https://www.linkedin.com/in/benard-charumbira-62a77711b"> Benard Charumbira</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<script type='text/javascript'>
	var frmvalidator  = new Validator("contactus");
	frmvalidator.EnableOnPageErrorDisplay();
	frmvalidator.EnableMsgsTogether();
	frmvalidator.addValidation("name","req","Please provide your name");
	frmvalidator.addValidation("email","req","Please provide your email address");
	frmvalidator.addValidation("email","email","Please provide a valid email address");
	frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
	</script>
	<!-- JavaScript Libraries -->
	<script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="lib/venobox/venobox.min.js"></script>
	<script src="lib/knob/jquery.knob.js"></script>
	<script src="lib/wow/wow.min.js"></script>
	<script src="lib/parallax/parallax.js"></script>
	<script src="lib/easing/easing.min.js"></script>
	<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="lib/appear/jquery.appear.js"></script>
	<script src="lib/isotope/isotope.pkgd.min.js"></script>
	<!-- Contact Form JavaScript File -->
	<script src="contactform/contactform.js"></script>
	<script src="js/main.js"></script>
</body>
</html>