<?php 

$db=mysqli_connect('localhost','root','','parsuram');
if(isset($_POST['submit']))
{

	$name=mysqli_real_escape_string($db,$_POST['name']);
	$consignment=mysqli_real_escape_string($db,$_POST['consignment']);
	$move_from=mysqli_real_escape_string($db,$_POST['move_from']);
	$move_to=mysqli_real_escape_string($db,$_POST['move_to']);
	$mobile=mysqli_real_escape_string($db,$_POST['mobile']);

	$sql="INSERT INTO data (name,consignment,move_from,move_to,mobile) values ('$name','$consignment','$move_from','$move_to',$mobile)";

	if (mysqli_query($db, $sql)) {
		echo "<script>alert('your quotation submitted successfully ')</script>";
		 
	  } 
	  
	  else{
	  
		echo"<script>alert('cannot insert data ')</script>";
	  }
	  }
    
			?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Parsuram Transport</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content=""
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!-- //Web-Fonts -->
    <style>
    .alert {
    padding: 20px;
    background-color: white;
    color: black;
    max-width:200px;
//height:50px;
margin-top:20%;
margin-left:62% ;
//text-align: center;
border-style:double;
border: 5px solid black; border-collapse: separate;
    border-spacing: 15px 50px;
//text-transform:uppercase;
font-size:20px;
font-family: "Times New Roman", Times, serif;
}

@media only screen and (mx-width: 700px) {
.alert {
//width:100%;
position:absolute;
//margin-top:50%;
//margin-left:20px;
margin:auto 0;


}}</style>
</head>

<body>
	<!-- banner -->
	<div class="bannerbg-w3l">
		<!-- header -->
		<header>
			<div class="header_topw3layouts_bar">
				<div class="container">
					<!-- header-top -->
					<!-- <div class="row border-bottom py-lg-4 py-3">
						<div class="col-xl-7 col-lg-6 header_agileits_left">
							<ul>
								<li class="mr-3">
									<i class="fas fa-phone mr-2"></i> +91 9876543210</li>
								<li>
									<i class="fas fa-envelope mr-2"></i>
									<a href="mailto:info@example.com">info@example.com</a>
								</li>
							</ul>
						</div>
						<div class="col-xl-5 col-lg-6 header_right text-center mt-lg-0 mt-2">
							<div class="row">
								
								
							</div>
						</div>
					</div> -->
					<!--// header-top -->

					<!-- navigation -->
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<a class="navbar-brand" href="#">Parshuram
							<span class="logo-b"></span>
							<span class="sub-head">RoadWays</span>
						</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
						    aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item active">
									<a class="nav-link" href="index.html">Home
										<span class="sr-only">(current)</span>
									</a>
								</li>
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="#about">About Us</a>
								</li>
								<!-- <li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
									    aria-expanded="false">
										Dropdown
									</a>
									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item scroll" href="#services">Services</a>
										<a class="dropdown-item scroll" href="#pricings">Pricings</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item scroll" href="#clients">Clients</a>
										<a class="dropdown-item" href="about.html">Our Agents</a>
									</div>
								</li> -->
								<li class="nav-item mx-xl-4 mx-lg-3 my-lg-0 my-3">
									<a class="nav-link" href="#services">Services</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact">Contact Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCenter1">Login</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="" data-toggle="modal" data-target="#exampleModalCenter2">Track Order</a>
								</li>
							</ul>
						</div>
					</nav>
					<!-- //navigation -->
				</div>
			</div>
		</header>
		<!-- //header -->
		<!-- banner text -->
		<div class="banner-text-agile">
			<div class="container">
				<div class="banner-w3lstexts text-white text-center">
					<h1>Track your Consignment</h1>
					<!-- <h4 class="text-uppercase mt-md-3 mt-2 mb-md-4 mb-3">for your home</h4> -->
<!-- <p class="text-white">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation					ullamco laboris</p> -->
					<!-- <a href="" class="banner-button btn mt-md-5 mt-4" data-toggle="modal" data-target="#exampleModalCenter2">Know More</a> -->
				</div>
			</div>
		</div>

<div class="container">
		<div class="row">
			<!-- <div class="col-md-8"></div> -->
			<div class="col-md-4 m-auto">

				<form  class="forms-search d-flex" style="margin-top: 30px;">
					<input type="text" name="" class="form-control" placeholder="Enter Consignment No." />
					<input type="submit" name="submit" value="Track Now" class="btn btn-danger" />
				</form>
			</div>
		</div></div>

		<!-- //banner text -->
	</div>

	
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--//register-->
	<!-- //banner -->

<!-- about -->
<div class="features py-5" id="about">
	<div class="container py-xl-5 py-lg-3">
		<div class="text-center mb-lg-5 mb-4">
			<h3 class="tittle mb-2">About Us</h3>
			<p>Parshuram Roadways is providing solution in the transportation industry for more than 10 years. With minimum complaint, trouble free, time bound guaranteed delivery on time.
			
			The company head-office is at Jamshedpur, along with the booking branches in Ranchi, Deoghar, Patna, Hazaribagh, Giridih and approx 15 delivery locations in Jharkhand & Bihar. As of now Parshuram Transport is the pioneer in providing services in Jharkhand & Bihar.
			
			</p>
		</div>
		<div class="row features-row">
			<div class="col-lg-5 features-right mt-3">
				<img src="images/about.jpg" class="img-fluid" alt="" />
			</div>
			<div class="col-lg-7 features-left mt-lg-0 mt-5">
				<div class="row features-grid">
					<div class="col-3 features-grid-left text-right">
						<i class="fab fa-blackberry"></i>
					</div>
					<div class="col-9 features-grid-right">
						<h4 class="mb-2">WE MAKE IT FASTER</h4>
						<p>We provide Cargo transportation services each with varied service types designed to cater both premium and basic requirements. </p>
					</div>
				</div>
				<div class="row features-grid features-grid-mdl my-4">
					<div class="col-3 features-grid-left text-right">
						<i class="fab fa-d-and-d"></i>
					</div>
					<div class="col-9 features-grid-right">
						<h4 class="mb-2">SAVE AND SECURE MOVE</h4>
						<p>Our Service has been specially designed to serve Out of Delivery Area locations refused by most other transporters.</p>
					</div>
				</div>
				<div class="row features-grid">
					<div class="col-3 features-grid-left text-right">
						<i class="fab fa-mixcloud"></i>
					</div>
					<div class="col-9 features-grid-right">
						<h4 class="mb-2">ON TIME DELEVERY </h4>
						<p>We provide Cargo transportation services each with varied service types designed to cater both premium and basic requirements. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //about -->

	<!-- banner-bottom -->
	<div class="serach-w3agile py-5">
		<div class="container py-xl-4 py-lg-3">
			<h3 class="title-w3ls mb-md-5 mb-4 font-weight-bold text-center">Get Quote</h3>
			<div class="place-grids">
				<form action="index.php" method="POST">
					<div class="row">
						<div class="col-sm-2 col-6 place-grid">
							<h5>Name</h5>
							<input name="name" type="text" class="sel" placeholder="Name"/>
						</div>

						<div class="col-sm-3 col-6 place-grid">
							<h5>Consignment Type</h5>
							<input type="text" name="consignment" class="sel" placeholder="Consignment Type"/>
						</div>

						<div class="col-sm-2 col-6 place-grid">
							<h5>Move From</h5>
							<input type="text" name="move_from" class="sel" placeholder="Move From"/>
						</div>

						<div class="col-sm-2 col-6 place-grid">
							<h5>Move To</h5>
							<input type="text" name="move_to" class="sel" placeholder="Move To"/>
						</div>
						
						<div class="col-sm-3 col-6 place-grid mt-sm-0 mt-3">
							<h5>Enter Mobile No</h5>
							<input name="mobile" type="text" class="sel" placeholder="Mobile Number"/>
						</div>
						
						
						<div class="col-sm-12 col-6 place-grid">
							<input name="submit" type="submit" value="Get Quote">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->

	<!-- middle section -->
	<div class="middle-w3l">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-4 button bg-image">

				</div>
				<div class="col-lg-6 col-md-8 left-build-wthree py-5 px-sm-5 px-4">
					<div class="py-xl-5 py-lg-3 px-xl-4">
						<h4>Why We Are Best From Other?</h4>
						
						<ul class="list-beach mt-lg-5 mt-4">
							<li>
								<div class="row">
									
								</div>
							</li>
							<li class="my-3">
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p><b>24/7 Services:- </b><br>For reliable customer service whenever you need it regarding transportation management, we offer 24/7 support</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p><b>Punctual Delivery Time:- </b><br>we give you the guarantee full customer and client satisfaction on delivery time</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p><b>Pack and ship:- </b><br>Packing your orders, print labels and transport it safely</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1 text-center">
										<i class="fas fa-hand-point-right"></i>
									</div>
									<div class="col-10">
										<p><b>Track:- </b><br>Track the order and keep your customers informed via SMS and email notifications</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //middle section -->

	<!-- services -->
	<div class="what-w3ls py-5" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-md-5 mb-4">
				<h3 class="tittle mb-sm-2">Our Services</h3>
				
			</div>
			<div class="what-grids">
				<div class="row">
					<div class="col-md-6 what-grid1">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-10 what-right">
								<h4>End to end Logistics</h4>
								<p class="mt-2">In its role as single source logistics provider, Elite's operations add value to our client's supply chain through integration of land transportation from country of origin to point of sale.
								</p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="fas fa-warehouse"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Warehousing Services</h4>
								<p class="mt-2">We offer warehousing services with full flexibility to a global standard. Thanks to our global footprint, we are ready to meet your exact needs within your supply</p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-user-secret"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Ecommerce Logistics</h4>
								<p class="mt-2">E-Commerce Logistics in Developed Markets · Ability to organize and track shipment no matter what mode · Online order status and documentation · Online dispatch</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 what-grid1 my-md-0 my-4">
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="far fa-building"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Express Distribution</h4>
								<p class="mt-2">Express Distribution Time critical shipments at express delivery speeds. Delivering with speeds that exceed your expectation. Time critical shipments at express</p>
							</div>
						</div>
						<div class="row what-top my-md-5 my-4">
							<div class="col-2 what-left">
								<i class="fas fa-clipboard-list"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Door to Door Transportation </h4>
								<p class="mt-2">we provide door to door transportation service in Jharkhand,Bihar and all other cities around the country.</p>
							</div>
						</div>
						<div class="row what-top">
							<div class="col-2 what-left">
								<i class="fas fa-truck"></i>
							</div>
							<div class="col-10 what-right">
								<h4>Full Truck Load Services</h4>
								<p class="mt-2">Our Full-Truckload (FTL) logistics can help you with all your high volume and high capacity needs in a cost- and time-efficient manner. Full-Truckload services are generally required by businesses that are looking to haul bulk items and heavy loads across long distances.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<div class="middlesection-agile py-5">
		<div class="container-fluid py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-6 left-build-wthree aboutright-agilewthree mt-0">
					<h4>We power Transportation businesses by making shipping easy</h4>
					<!-- <h6 class="mt-3 mb-5">Some words about our property</h6> -->
					<div class="row mb-xl-5 mb-4">
						<div class="col-4 w3layouts_stats_left w3_counter_grid">
							<i class="fas fa-users"></i>
							<p class="counter">100000</p>
							<p class="para-text-w3ls">Happy Customers</p>
						</div>
						<div class="col-4 w3layouts_stats_left w3_counter_grid2">
							<i class="fas fa-boxes"></i>
							<p class="counter">2000</p>
							<p class="para-text-w3ls">Shipments Daily</p>
						</div>
						<div class="col-4 w3layouts_stats_left w3_counter_grid1">
							<i class="fas fa-map-marker-alt"></i>
							<p class="counter">270</p>
							<p class="para-text-w3ls">Pin Codes Covered</p>
						</div>
					</div>
					
				</div>
				<div class="col-lg-6 text-lg-left text-center mt-lg-0 mt-md-5 mt-4">
					<img src="images/middle.jpg" alt="" class="img-fluid" />
				</div>
			</div>
		</div>
	</div>
	<!-- //stats -->

	<!-- testimonials -->
	<div class="testimonials py-5" id="clients">
		<div class="container py-xl-5 py-lg-3">
			<div class="text-center mb-lg-5 mb-4">
				<h3 class="tittle mb-2 text-white">What Clients Say</h3>
				
			</div>
			<div class="w3_testimonials_grids">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_testimonials_grid">
									<p>"Sir your staff was so corporative and patience they did not charge extra for rearranging my belongings. Professionals transporter in Jamshedpur".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
										
										</div>
										<div class="col-6 agile-right-test text-center mt-4">
											<h5>Neha Singh</h5>
											<p> Jamshedpur</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"They were very polite and made my car delivery without any scratch.charges are a little bit high but the delivery was good. Best transportation company in Ranchi.".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-right">
											
										</div>
										<div class="col-6 agile-right-test text-center mt-4">
											<h5>Ravipratap Verma

</h5>
											<p>Ranchi</p>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid">
									<p>"I was looking for transportation services in Patna online then iI found Parsuram Roadways and got there quotes the charges were so reasonable than other transport services Patna and the service was so good.".</p>
									<ul class="testi-w3ls-rate mt-4">
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
										<li class="mx-2">
											<i class="fas fa-star"></i>
										</li>
										<li>
											<i class="fas fa-star"></i>
										</li>
									</ul>
									<div class="row person-w3ls-testi mt-5">
										<div class="col-6 agile-left-test text-center">
											
										</div>
										<div class="col-6 agile-right-test text-left mt-4">
											<h5>Mr.Anil Sharma</h5>
											<p>Patna</p>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</section>

			</div>
		</div>
	</div>
	<!-- //testimonials -->
<!-- slider -->
	

	<!-- footer top -->
	<div class="footer-top py-5 text-center" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<h2 class="text-white mb-4">Get In Touch</h2>
			<h5 class="text-white mb-sm-5 mb-4 pb-sm-5 pb-4">Contact Us</h5>
			<i class="fas fa-map-marker-alt"></i>
		</div>
	</div>
	<!-- //footer top -->

	<!-- footer -->
	<div class="footer py-5 text-center">
		<div class="container py-xl-5 py-lg-3">
			<div class="address row mb-4">
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-envelope"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Email</h6>
							<p>
								<a href="mailto:example@email.com"> mail 1@example.com</a>
							</p>
							<p>
								<a href="mailto:example@email.com"> mail 2@example.com</a>
							</p>
						</div>

					</div>
				</div>
				<div class="col-lg-4 address-grid my-lg-0 my-4">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="fas fa-mobile-alt"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">call us</h6>
							<p>+1 234 567 8901</p>
							<p>+1 567 567 9876</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 address-grid">
					<div class="row address-info">
						<div class="col-md-3 address-left text-center">
							<i class="far fa-map"></i>
						</div>
						<div class="col-md-9 address-right text-left">
							<h6 class="ad-info text-uppercase mb-2">Address</h6>
							<p> 786 Main Road, hollies</p>
							<p> California, USA</p>
						</div>
					</div>
				</div>
			</div>
			<!-- social icons footer -->
			
			<!-- // our quotes -->

  <section id="">
    <div class="container">
      
        <div class="row title-bar" style="padding:10px 0px;">
          <div class="col-md-12">
            <h1 class="wow fadeInUp" style="font-size: 1.8em;">Our Branches</h1>
            <div class="heading-border"></div> 
        </div>
      </div> 
	  <div class="container">
        <div class="row">
            <div class="col-md-4">
              <div class="container collapsed">
                <a href="#demo" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Patna </a>
                <div id="demo" class="collapse">
                  OPP SONALI PETROL PUMP, NEAR AJIT TYRE BYPASS ROAD,PAHARI,PATNA-800007. <br>Email-parsuram.patna@gmail.com
                </div>
                <a href="#demo1" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Jamshedpur</a>
                <div id="demo1" class="collapse">
                  M.E.SCHOOL ROAD,NEAR ELECTRICAL SUB STATION JUGSALAI,JAMSHEDPUR-831006.<br>Mob No-9334284815, 9334560085,ph.No :0657-2291824,2292170.
                </div>
                <a href="#demo2" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Chaibasa</a>
                <div id="demo2" class="collapse">
                  Sadar Bazar, chaibasa,<br>Mob No-6202063924.
                </div>
                <a href="#demo3" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Ranchi</a>
                <div id="demo3" class="collapse">
                  NEAR SUKHDEO NAGAR,NEW SUKHDEO NAGAR P.S OPP LAXMI -GANESH TEMPLE KHADGARA. <br>Ranchi-834005,Jharkhand.
               
                </div>
                <a href="#demo4" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Ramgarh</a>
                <div id="demo4" class="collapse">
                  JHANDA CHOWK,RAMGARH CANTT,RAMGARH-829122.
                
				</div>
					
						

			
   
					<a href="#demo6" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Hazaribagh</a>
					<div id="demo6" class="collapse">
					  MONIKA BAGICHA,KANI BAZAR,HAZARIBAG-825301.Mob No- 9334962613.
					</div>
					<a href="#demo7" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Jhaumritellaiya</a>
					<div id="demo7" class="collapse">
					  SANTANO PETROL PUMP,NEAR ICICI BANK CHHABRA GALI , JHUMRITALAIYA -825409.
					</div>
					<a href="#demo8" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Chas</a>
					<div id="demo8" class="collapse">
					  NEAR JORA MANDIR,JADBANSH NAGAR,CHAS-827013.
					</div>
					<a href="#demo9" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Jharia</a>
					<div id="demo9" class="collapse">
					  BORA PATTI,NEAR RAJESH LIGHT,JHARIA-828111.
					</div>
					
					<a href="#demo10" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Dhanbad</a>
					<div id="demo10" class="collapse">
						NEAR GODHAR POWER HOUSE.<br>DHANBAD-826007.
					</div>
		
			
					<a href="#demo11" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Giridih</a>
					<div id="demo11" class="collapse">
					  TUNDI ROAD ,NEAR AASHIRWAD HOTEL GIRIDIH-815301.
					</div>
					<a href="#demo12" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Deoghar</a>
					<div id="demo12" class="collapse">
					  NEAR SADAR HOSPITAL,KUSTH ASHRAM ROAD DEOGHAR -814112.
					</div>
					<a href="#demo13" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Dumka</a>
					<div id="demo13" class="collapse">
					  BAKSHIBANDH,SINGRA POKHAR-814101.
					</div>
					<a href="#demo14" class="btn btn-secondary text-left mb-2" data-toggle="collapse" style="width:100%;"><i class="fa fa-star" aria-hidden="true"></i> Booking office in Daltonganj</a>
					<div id="demo14" class="collapse">
					  MALI MOHALLA,NEAR LAL KOTHA, DALTONGANJ-822101.
					</div>
				</div>
				</div>
              </div>
              
            </div>
        </div>
    </div>
	</section>
	
	<!-- footer -->

	<!-- copyright -->
	<div class="copy_right py-4 text-center">
		<p class="text-white" >© 2021 Parsuram Roadways. All rights reserved | Design by
			<a href="https://insightinfosystem.com/">Insightinfosystem</a>
		</p>
	</div>
	<!-- //copyright -->

	<!-- whatsapp -->
	<a href="https://api.whatsapp.com/send?phone=918797457758&amp;text=Text here about your  Enquiry%20Demo%20 and Support" class="float">
		<i class="fab fa-whatsapp my-float" style="font-size: 1.5rem;" aria-hidden="true"></i>
		</a>
	<!-- //whatsapp -->

	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- flexSlider (for testimonials) -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		   $('#alert').fadeOut(1000);
			//$('#alert').delay(5000).fadeIn(2000);
		});
		</script>
	<script>
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider (for testimonials) -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/district.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //Js files -->
	<script src="js/jquery.desoslide.js"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>
</body>

</html>