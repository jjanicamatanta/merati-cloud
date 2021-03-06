<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap Min CSS --> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Owl Theme Default Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <!-- Animate Min CSS --> 
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Boxicons Min CSS --> 
		<link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Flaticon CSS --> 
		<link rel="stylesheet" href="assets/css/flaticon.css">
        <!-- Meanmenu Min CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- Nice Select Min CSS -->
		<link rel="stylesheet" href="assets/css/nice-select.min.css">
		<!-- Odometer Min CSS-->
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<!-- Magnific Min CSS-->
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="{{asset('assets/img/white-logo.png')}}">
        <!-- Title -->
        <title>Hola Mundo | MeratiCloud </title>
    </head>

    <body>

		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<img src="assets/img/white-logo.png" style="width:50px" alt="Logo">
				{{-- <div>
					<img src="assets/img/white-logo.png" style="width:50px" alt="Logo">
				</div>
				<div>
					<img src="assets/img/white-logo.png" style="width:50px" alt="Logo">
				</div> --}}
			</div>
		</div>
		<!-- End Preloader Area -->

		<!-- Start Arduix Navbar Area -->
		<div id="header" class="arduix-nav-style">
			<div class="navbar-area">
				<!-- Menu For Mobile Device -->
				<div class="mobile-nav">
					<a href="index.html" class="logo">
						<img src="assets/img/white-logo.png" style="width:50px" alt="Logo">
					</a>
				</div>
				<!-- Menu For Desktop Device -->
				<div class="main-nav">
					<nav class="navbar navbar-expand-md navbar-light">
						<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="{{asset('assets/img/white-logo - copia.png')}}" style="position: absolute;height:100%;margin: -35px 60px -35px 0px;" alt="Logo">
							</a>
							<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
								<ul class="navbar-nav m-auto">
									{{-- <li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle active">
											Home
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="index.html" class="nav-link">Home One</a>
											</li>
											<li class="nav-item">
												<a href="index-2.html" class="nav-link active">Home Two</a>
											</li>
											<li class="nav-item">
												<a href="index-3.html" class="nav-link">Home Three</a>
											</li>
											<li class="nav-item">
												<a href="index-4.html" class="nav-link">Home Four</a>
											</li>
											<li class="nav-item">
												<a href="index-5.html" class="nav-link">Home Five</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											About
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="about-style-one.html" class="nav-link">About Style One</a>
											</li>
											<li class="nav-item">
												<a href="about-style-two.html" class="nav-link">About Style two</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Pages
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="pricing.html" class="nav-link">Pricing</a>
											</li>
											<li class="nav-item">
												<a href="team.html" class="nav-link">Team</a>
											</li>
											<li class="nav-item">
												<a href="faq.html" class="nav-link">FAQ</a>
											</li>
											<li class="nav-item">
												<a href="testimonial.html" class="nav-link">Testimonial</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link dropdown-toggle">
													User
													<i class='bx bx-chevron-down'></i>
												</a>
												<ul class="dropdown-menu">
													<li class="nav-item">
														<a href="log-in.html" class="nav-link">Log In</a>
													</li>
													<li class="nav-item">
														<a href="sign-up.html" class="nav-link">Sign Up</a>
													</li>
													<li class="nav-item">
														<a href="recover-password.html" class="nav-link">Recover Password</a>
													</li>
												</ul>
											</li>
											<li class="nav-item">
												<a href="terms-conditions.html" class="nav-link">Terms Conditions</a>
											</li>
											<li class="nav-item">
												<a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
											</li>
											<li class="nav-item">
												<a href="coming-soon.html" class="nav-link">Coming Soon</a>
											</li>
											<li class="nav-item">
												<a href="404.html" class="nav-link">404 Error</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Services
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="services-style-one.html" class="nav-link">Services Style One</a>
											</li>
											<li class="nav-item">
												<a href="services-style-two.html" class="nav-link">Services Style two</a>
											</li>
											<li class="nav-item">
												<a href="services-style-three.html" class="nav-link">Services Style Three</a>
											</li>
											<li class="nav-item">
												<a href="services-style-four.html" class="nav-link">Services Style Four</a>
											</li>
											<li class="nav-item">
												<a href="services-details.html" class="nav-link">Services Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Shop
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="product-grid.html" class="nav-link">Product Grid</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link">Cart</a>
											</li>
											<li class="nav-item">
												<a href="single-product.html" class="nav-link">Single Product</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											News
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="news-grid.html" class="nav-link">News Grid</a>
											</li>
											<li class="nav-item">
												<a href="news-left-sidebar.html" class="nav-link">News Left Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-right-sidebar.html" class="nav-link">News Right Sidebar</a>
											</li>
											<li class="nav-item">
												<a href="news-details.html" class="nav-link">News Details</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="#" class="nav-link dropdown-toggle">
											Contact
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="contact-style-one.html" class="nav-link">Contact Style One</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-two.html" class="nav-link">Contact Style two</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-three.html" class="nav-link">Contact Style Three</a>
											</li>
											<li class="nav-item">
												<a href="contact-style-four.html" class="nav-link">Contact Style Four</a>
											</li>
										</ul>
									</li> --}}
								</ul>
								<!-- Start Other Option -->
								<div class="others-option">
									<a class="default-btn" href="https://api.whatsapp.com/send?phone=51915131033&text=Hola%2C%20estoy%20interesado%20en%20..." target="_blank" title="Contacta con MeratiCloud">
										Contacto
										<i class="bx bx-log-in-circle"></i>
									</a>
								</div>
								<!-- End Other Option -->
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<!-- End Arduix Navbar Area -->
 
		<!-- Start Main Banner Area -->
		<section class="main-banner-area main-banner-area-two">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 align-middle justify-content-center align-self-center">
						<div class="banner-text">
							<h1>DESAROLLO DE SOLUCIONES TECNOL??GICAS</h1>
							<p>Nuestro objetivo es servir a la sociedad creando <br> productos y servicios de calidad.</p>	
							<div class="banner-btn">
								<a class="default-btn" href="#services">
									Nuestros Servicios
								</a>
								<a class="default-btn" href="https://api.whatsapp.com/send?phone=51915131033&text=Hola%2C%20estoy%20interesado%20en%20..." target="_blank">
                                    Cont??ctanos
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-6 text-center" style="text-align:left">
                        <img src="./assets/img/landing-page.png" alt="" style="width: 80%;
                            /* transform: translateY(-5rem);
                            padding-left: 3rem;" */
							>
						{{-- <div class="banner-main-img banner-one-main-img">
							<img src="assets/img/home-two-banner/banner-two-main-img.png" alt="Image">
						</div>
						<div class="banner-img">
							<img class="wow fadeInDown" data-wow-delay=".1s" src="	https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/1.png" alt="Image">
							<div class="wow fadeInDown" data-wow-delay=".3s">
								<div class="square-img">
									<img class="wow fadeInDown" data-wow-delay=".3s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/2.png" alt="Image">
								</div>
							</div>
							<img class="wow fadeInDown" data-wow-delay=".6s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/3.png" alt="Image">
							<div class="wow zoomIn" data-wow-delay=".9s">
								<div class="circle-img">
									<img  src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/4.png"  alt="Image">
								</div>
							</div>
							<img src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/5.png" alt="Image">
							<img class="wow fadeInDown" data-wow-delay=".6s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/6.png" alt="Image">
							<img class="wow fadeInDown" data-wow-delay=".6s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/7.png" alt="Image">
							<img class="wow fadeInRight" data-wow-delay=".9s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/8.png" alt="Image">
							<img class="wow fadeInRight" data-wow-delay=".9s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/9.png" alt="Image">
							<img class="wow fadeInRight" data-wow-delay="1s" src="https://templates.envytheme.com/arduix/default/assets/img/home-two-banner/banner-two-shape/10.png" alt="Image">
						</div> --}}
					</div>
				</div>
			</div>
			<div class="over-shape">
				<img src="assets/img/home-one-banner/banner-one-shape/1.png" alt="Image">
				<img src="assets/img/home-one-banner/banner-one-shape/2.png" alt="Image">
				<img src="assets/img/home-one-banner/banner-one-shape/3.png" alt="Image">
			</div>
		</section>
		<!-- End Main Banner Area --> 

		<!-- Start features Area -->
		<section class="features-area mt-minus-70 pb-70" id="que-ofrecemos">
			<div class="container">
				<div class="row">
                    <div class="col-lg-3 col-sm-6 offset-sm-3 offset-lg-0 p-0">
						<div class="single-features">
							<i class="flaticon-success"></i>
							<h3>Enfrentando desaf??os de Machine Learning</h3>
							<p>Nuestros productos y servicios est??n orientados a la captura de datos para personalizar la experiencia de su cliente.</p>
							<a class="read-more-icon" href="services-details.html">
								<span class="flaticon-right-arrow"></span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
						<div class="single-features">
                            <i class="flaticon-engineer"></i>
							<h3>Productos TI</h3>
							<p>Ofrecemos un amplio cat??logo de productos TI. Contamos con herramientas de gesti??n de la informaci??n, log??stica, CRMs, POS, ERP, etc.							</p>
							<a class="read-more-icon" href="services-details.html">
                                <span class="flaticon-right-arrow"></span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
                        <div class="single-features">
                            <i class="flaticon-cloud-computing-1"></i>
							<h3>Servicios Cloud</h3>
							<p>
								Desarrollamos soluciones a medida para la nube, ofreciendo 100% de garant??a de poder usar y consultar su app en cualquier momento y lugar, y desde cualquier dispositivo.
							</p>
							<a class="read-more-icon" href="services-details.html">
								<span class="flaticon-right-arrow"></span>
							</a>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 p-0">
                        <div class="single-features">
                            <i class="flaticon-cloud-computing-1"></i>
							<h3>F??brica de Software</h3>
							<p>Acompa??amos y aplicamos las mejores pr??cticas e integramos distintas t??cnicas ??giles para el desarrollo a medida de soluciones de software seg??n tus necesidades.</p>
							<a class="read-more-icon" href="services-details.html">
								<span class="flaticon-right-arrow"></span>
							</a>
						</div>
					</div>
                    
				</div>
                
			</div>
		</section>
		<!-- End features Area -->

		<!-- Start About Area -->
		<section class="about-area pb-100" id="acerca-merati">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img">
							<img src="assets/img/about-img.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="about-content">
							<span>Merati Cloud</span>
							<h2>Completamos cada proyecto seg??n las necesidades del nuestros clientes</h2>
							<p>
								Desarrollamos su app con adaptaci??n perfecta a su negocio preparandola para el an??lisis de datos.
							</p>
							
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<ul>
										<li>
											<i class="flaticon-checked"></i>
											Se adapta perfectamente a la empresa
										</li>
										<li>
											<i class="flaticon-checked"></i>
											Alta optimizaci??n de la app o web
										</li>
										<li>
											<i class="flaticon-checked"></i>
											SEO Profesional
										</li>
									</ul>
								</div>
								<div class="col-lg-6 col-sm-6">
									<ul>
										<li>
											<i class="flaticon-checked"></i>
											Garant??a sin vencimiento
										</li>
										<li>
											<i class="flaticon-checked"></i>
											Registros de Click Path
										</li>
										<li>
											<i class="flaticon-checked"></i>
											An??lisis de datos
										</li>
									</ul>
								</div>
							</div>
							{{-- <a class="default-btn" href="about-style-two.html">
								Learn More
							</a> --}}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Area -->

		<!-- Start What We Offer Area -->
		<section class="offer-area offer-area-two pt-100 pb-70" id="services">
			<div class="container">
				<div class="section-title">
					<span>Servicios</span>
					<h2>Nuestros Servicios Profesionales para ti</h2>
					<p>
						Desarollamos todo tipo de apps y webs: Blog, E-commerce, Log??stica, etc. Siempre considerando la mejor experiencia de usuario.
					</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-chip"></i>
							<h3>F??brica de Software</h3>
							<p>Acompa??amos y aplicamos las mejores pr??cticas e integramos distintas t??cnicas ??giles para el desarrollo.</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-vr"></i>
							<h3>Tiendas E-commerce</h3>
							<p>
								Dise??o 100% personalizado y registrando toda interacci??n de sus clientes con su app.
							</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-blockchain"></i>
							<h3>Puntos de venta</h3>
							<p>M??dulo dise??ado para cubrir las funciones principales de su nuevo local o punto de venta. </p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-target"></i>
							<h3>Contabilidad</h3>
							<p>Automatizaci??n de los procesos contables, incluyendo reportes y dasboards personalizados</p>
						</div>
					</div>
                    <div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-deep-learning"></i>
							<h3>Inventario</h3>
							<p>M??dulo para gestiiones ingreso y salida de sus productos, incluyendo reportes y dashboards</p>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-offer">
							<i class="flaticon-choice"></i>
							<h3>Mucho m??s..</h3>
							<p>Realizamos todo tipo de apps y webs para que su negocio compita en el mundo moderno.</p>
						</div>
					</div>
					
				</div>
			</div>
			<div class="offer-shape">
				<img src="assets/img/shape/offer-shape/1.png" alt="Image">
				<img src="assets/img/shape/offer-shape/2.png" alt="Image">
				<img src="assets/img/shape/offer-shape/3.png" alt="Image">
				<img src="assets/img/shape/offer-shape/4.png" alt="Image">
				<img src="assets/img/shape/offer-shape/5.png" alt="Image">
				<img src="assets/img/shape/offer-shape/5.png" alt="Image">
				<img src="assets/img/shape/offer-shape/6.png" alt="Image">
			</div>
		</section>
		<!-- End What We Offer Area -->

		<!-- Start Pricing Area -->
		{{-- <section class="pricing-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span>What We Offer</span>
					<h2>Our Pricing Plan For You</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ipsum suspendisse.</p>
				</div>
				<div class="tab quote-list-tab">
					<ul class="tabs">
						<li>
							<a href="#">
								Monthly
							</a>
						</li>
						<li>
							<a href="#">
								Yearly
							</a>
						</li>
					</ul>
					<div class="tab_content">
						<div class="tabs_item">
							<div class="row">
								<div class="col-lg-4 col-sm-6">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Basic</h3>
											<p>Build A Website</p>
										</div>
										<span>$29<sub>/Mon</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												10GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Standard</h3>
											<p>Build A Website</p>
										</div>
										<span>$59 <sub>/Mon</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												80GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												90GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
											70GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Sub-Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
										<strong class="popular">Popular</strong>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Premium</h3>
											<p>Build A Website</p>
										</div>
										<span>$79 <sub>/Mon</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs_item">
							<div class="row">
								<div class="col-lg-4 col-sm-6">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Basic</h3>
											<p>Build A Website</p>
										</div>
										<span>$39 <sub>/Yea</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												10GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Standard</h3>
											<p>Build A Website</p>
										</div>
										<span>$79 <sub>/Yea</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												80GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												90GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												10 Free Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
											70GB Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												50GB Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Sub-Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
										<strong class="popular">Popular</strong>
									</div>
								</div>
								<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
									<div class="single-pricing">
										<div class="pricing-top-heading">
											<h3>Premium</h3>
											<p>Build a website</p>
										</div>
										<span>$99 <sub>/Yea</sub></span>
										<ul>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Sub-Domains
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Storage Space
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Bandwidth
											</li>
											<li>
												<i class="flaticon-checked-1"></i>
												Unlimited Domains
											</li>
										</ul>
										<a class="default-btn" href="shared-hosting.html">
											Get Started
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Pricing Area -->

		<!-- Start Newsletter Area -->
		{{-- <section class="newsletter-area ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-5">
						<div class="newsletter-wrap">
							<h2>Suscr??base al bolet??n gratuito</h2>
							<form class="newsletter-form" data-toggle="validator">
								<input type="email" class="form-control" placeholder="Tu eamil" name="EMAIL" required autocomplete="off">

								<button class="default-btn" type="submit">
									Suscribete
								</button>

								<div id="validator-newsletter" class="form-result"></div>
							</form>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="newsletter-img">
							<img src="assets/img/newsletter-img.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-5">
						<div class="call-us">
							<h2>Cont??ctanos por Whatsapp</h2>
							<a href="https://api.whatsapp.com/send?phone=51915131033&text=Hola%2C%20estoy%20interesado%20en%20..." target="_blank">+51 915131033</a>
						</div>
					</div>
				</div>
			</div>
			<div class="newsletter-shape">
				<img src="assets/img/shape/newsletter-shape-one.png" alt="Image">
				<img src="assets/img/shape/newsletter-shape-one.png" alt="Image">
				<img src="assets/img/shape/newsletter-shape-two.png" alt="Image">
			</div>
		</section> --}}
		<!-- End Newsletter Area -->

		<!-- End Case Area -->
		{{-- <section class="case-area case-area-five pb-100 pt-100">
			<div class="container">
				<div class="section-title">
					<span>Nuestros proyectos</span>
					<h2>Nuestros ??ltimos proyectos</h2>
				</div>
				<div class="row">
					<div class="case-top-wrap owl-carousel owl-theme">
						<div class="case-wrap">
							<div class="single-case">
								<img src="assets/img/case/1.png" alt="Image">
								<a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
							</div>
							<h3>
								<a href="#">
									EquipoG SAC
								</a>
							</h3>
						</div>
						<div class="case-wrap">
							<div class="single-case">
								<img src="assets/img/case/2.png" alt="Image">
								<a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
							</div>
							<h3>
								<a href="#">
									Pantoja
								</a>
							</h3>
						</div>
						<div class="case-wrap">
							<div class="single-case">
								<img src="assets/img/case/3.png" alt="Image">
								<a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
							</div>
							<h3>
								<a href="#">
									Oasis SAC
								</a>
							</h3>
						</div>
						<div class="case-wrap">
							<div class="single-case">
								<img src="assets/img/case/4.png" alt="Image">
								<a class="link-icon" href="#"><i class="bx bx-plus"></i></a>
							</div>
							<h3>
								<a href="#">
									InverFuturo SAC
								</a>
							</h3>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End Case Area -->

		<!-- Start Client Area -->
		<section class="client-area ptb-100" id="testimonios">
			<div class="container">
				<div class="section-title">
					<span>Testimonios</span>
					<h2>Que dicen nuestos clientes de nosotros</h2>
				</div>
				<div class="client-wrap owl-carousel owl-theme">
					<div class="single-client">
						<i class="quotes flaticon-left-quotes-sign"></i>
						<p>Jos?? not?? r??pidamente las ineficiencias en la comunicac??on de nuestros equipo con otras ??reas y desaroll?? un proceso que nos ahorr?? varias horas de documentaci??n diaria.</p>
						{{-- <ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul> --}}
						<div class="client-img">
							<img src="assets/img/client/1.jpg" alt="Image">
							<h3>Paulino Montalvo</h3>
							<span class="text-white">Gerente de Pantoja</span>
						</div>
					</div>
					<div class="single-client">
						<i class="quotes flaticon-left-quotes-sign"></i>
						<p>Nos ha inspirado confianza absoluta y se basan en los resultados que brindan.</p>
						<br>
						<br>
						{{-- <ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul> --}}
						<div class="client-img">
							<img src="assets/img/client/2.jpg" alt="Image">
							<h3>Yonatan Human??</h3>
							<span class="text-white">Gerente de RRHH de Equipo G SAC</span>
						</div>
					</div>
					<div class="single-client">
						<i class="quotes flaticon-left-quotes-sign"></i>
						<p>
							Siempre que consultamos con su equipo nos da la tranquilidad que necesito para dirigir mi esfuerzo neto a mi empresa.
						</p>
						<br>
						
						{{-- <ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul> --}}
						<div class="client-img">
							<img src="assets/img/client/3.jpg" alt="Image">
							<h3>Melany Rodriguez Borja</h3>
							<span class="text-white">Admin. Negocios Internaciones</span>
						</div>
					</div>
					{{-- <div class="single-client">
						<i class="quotes flaticon-left-quotes-sign"></i>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium qui nam tenetur ab temporibus harum dolorum a quaerat error repellendus</p>
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<div class="client-img">
							<img src="assets/img/client/4.jpg" alt="Image">
							<h3>Jon Smith</h3>
							<span>Developer</span>
						</div>
					</div> --}}
				</div>
			</div>
		</section>
		<!-- End Client Area -->

		<!-- Start Industries Serve Area -->
		<section class="industries-serve-area pt-100" id="industrias">
			<div class="container">
				<div class="section-title">
					<span>Lo que ofrecemos</span>
					<h2>Industrias a las que servimos</h2>
					<p>
						Desarollamos apps y webs para todos los rubros 100% adaptable. Algunas de las ??ltimas industrias a las que servimos son:
					</p>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-4">
						<div class="row">
							{{-- <div class="col-lg-12 col-md-6">
								<div class="single-industries">
									<i class="flaticon-machine-learning"></i>
									<h3>Heavy Industry</h3>
									<span>All kind of industry</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div> --}}
							{{-- <div class="col-lg-12 col-md-6">
								<div class="single-industries">
									<i class="flaticon-artificial-intelligence"></i>
									<h3>Transportation</h3>
									<span>All kind of industry</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div> --}}
							{{-- <div class="col-lg-12 col-md-6">
								<div class="single-industries">
									<i class="flaticon-health"></i>
									<h3>Health Care</h3>
									<span>All kind of industry</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div> --}}
							<div class="col-lg-12 col-md-6">
								<div class="single-industries">
									<i class="flaticon-choice"></i>
									<h3>Log??stica</h3>
									<span>Procesos de optimizaci??n</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div>
                            <div class="col-lg-12 col-md-6">
							 
                                <div class="single-industries">
                                    <i class="flaticon-blockchain"></i>
                                    <h3>Transporte</h3>
                                    <span>Tracking, GPS, optimizaci??n de recursos</span>
                                    <a class="right-icon" href="services-details.html">
                                        <span class="bx bx-chevrons-right"></span>
                                    </a>
                                </div>
                            </div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="industries-img">
							<img src="assets/img/industries-img-two.png" alt="Image">
						</div>
					</div>
					<div class="col-lg-4">
						<div class="row">
							<div class="col-lg-12 col-md-6">
								<div class="single-industries right-item">
									<i class="flaticon-choice"></i>
									<h3>Educaci??n</h3>
									<span>Plataformas para examenes, cursos, post, etc.</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="single-industries right-item">
									<i class="flaticon-deep-learning"></i>
									<h3>Bienes ra??ces</h3>
									<span>Registro y seguimiento de cobros, graficas, etc.</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div>
							{{-- <div class="col-lg-12 col-md-6">
								<div class="single-industries right-item">
									<i class="flaticon-cyber-security"></i>
									<h3>Banking</h3>
									<span>All kind of industry</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div> --}}
							{{-- <div class="col-lg-12 col-md-6">
								<div class="single-industries right-item">
									<i class="flaticon-blockchain"></i>
									<h3>Automobile</h3>
									<span>All kind of industry</span>
									<a class="right-icon" href="services-details.html">
										<span class="bx bx-chevrons-right"></span>
									</a>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Industries Serve Area -->

		<!-- Strat News Area -->
		{{-- <section class="news-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>News</span>
					<h2>Nuestros Post</h2>
					<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut ipsum fugit temporibus possimus itaque accusamus voluptatibus dignissimos nobis eaque.</p>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<div class="single-news">
							<div class="blog-img">
								<a href="news-details.html">
									<img src="assets/img/blog/1.png" alt="Image">
								</a>
								<div class="dates">
									<span>20 February</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Is Machine Learning Right For You</h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis minima in amet consectetur.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="bx bx-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6">
						<div class="single-news">
							<div class="blog-img">
								<a href="news-details.html">
									<img src="assets/img/blog/2.png" alt="Image">
								</a>
								<div class="dates">
									<span>21 February</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>The State Of Artificial Intelligence</h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis minima in amet consectetur.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="bx bx-plus"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 offset-md-3 offset-lg-0">
						<div class="single-news">
							<div class="blog-img">
								<a href="news-details.html">
									<img src="assets/img/blog/3.png" alt="Image">
								</a>
								<div class="dates">
									<span>22 February</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comment
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Our Company Machine Learning </h3>
								</a>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga veritatis veniam corrupti perferendis minima in amet consectetur.</p>
								<a class="read-more" href="news-details.html">
									Read More
									<i class="bx bx-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> --}}
		<!-- End News Area -->

		<!-- Start Brand Area -->
		{{-- <div class="brand-area pb-70">
			<div class="container">
				<div class="brand-list">
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/1.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/2.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/3.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/4.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/5.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/6.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/7.png" alt="Image">
						</a>
					</div>
					<div class="single-brand">
						<a href="#">
							<img src="assets/img/brand/8.png" alt="Image">
						</a>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- End Brand Area -->

		<!-- Start Footer Top Area -->
		<footer class="footer-top-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-widget" style="">
							<a href="index.html" style="background: white;
							padding: 5px;
							margin-bottom: 10px;
							border-radius: 10px;
							width: 80%;">
								<img src="{{asset('assets/img/white-logo - copia.png')}}" alt="Image" class="mb-0">
							</a>
							<p>Desarollamos la app ideal para tu negocio para el mundo moderno.</p>
							<ul class="social-icon">
								<li>
									<a href="https://www.facebook.com/MeratiCloud" target="_blank">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								{{-- <li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li> --}}
								<li>
									<a href="#">
										<i class="bx bxl-linkedin"></i>
									</a>
								</li>
								{{-- <li>
									<a href="#">
										<i class="bx bxl-youtube"></i>
									</a>
								</li> --}}
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<h3>Links importantes</h3>
							<ul>
								<li>
									<a href="#que-ofrecemos">
										<i class="right-icon bx bx-chevrons-right"></i>
										??Qu?? ofrecemos?
									</a>
								</li>
								<li>
									<a href="#acerca-merati">
										<i class="right-icon bx bx-chevrons-right"></i>
										Acerca de nosotros
									</a>
								</li>
								<li>
									<a href="#services">
										<i class="right-icon bx bx-chevrons-right"></i>
										Nuestros servicios
									</a>
								</li>
								<li>
									<a href="#services">
										<i class="right-icon bx bx-chevrons-right"></i>
										Testimonios
									</a>
								</li>
								<li>
									<a href="#services">
										<i class="right-icon bx bx-chevrons-right"></i>
										Servimos a todas las industrias
									</a>
								</li>
							</ul>
							 
						</div>
					</div>
					{{-- <div class="col-lg-3 col-md-6">
						<div class="single-widget">
							<h3>Important Links</h3>
							<ul>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Search Engine
									</a>
								</li>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Online Support
									</a>
								</li>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Development
									</a>
								</li>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Pay  Per  Click
									</a>
								</li>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Support
									</a>
								</li>
								<li>
									<a href="#">
										<i class="right-icon bx bx-chevrons-right"></i>
										Application
									</a>
								</li>
							</ul>
						</div>
					</div> --}}
					<div class="col-lg-4 col-md-6">
						<div class="single-widget">
							<h3>Informaci??n</h3>
							<ul class="information">
								<li class="address">
									<i class="flaticon-call"></i>
									<span>Tel??fono</span>
									<a href="tel:+882-569-756">
										+915-131-033
									</a>
								</li>
								<li class="address">
									<i class="flaticon-envelope"></i>
									<span>Email</span>
									<a href="mailto:hello@arduix.com">
										contacto@merati.cloud
									</a>
								</li>
								<li class="address">
									<i class="flaticon-maps-and-flags"></i>
									<span>Direcci??n</span>
									En la nube
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-shape">
				<img src="assets/img/shape/footer-shape-one.png" alt="Image">
				<img src="assets/img/shape/footer-shape-two.png" alt="Image">
			</div>
		</footer>
		<!-- End Footer Top Area -->

		<!-- Start Footer Bottom Area -->
		<footer class="footer-bottom-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-4">
						<div class="copy-right">
							<p>
								Copyright <i class="bx bx-copyright"></i>2021 MeratiCloud
							</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="privacy">
							<ul>
								<li>
									<a href="terms-conditions.html">T??rminos y Condiciones</a>
								</li>
								<li>
									<a href="privacy-policy.html">Pol??ticas de Privacidad</a>
								</li>
							</ul>
						</div>
					</div>
					{{-- <div class="col-lg-4">
						<div class="designed">
							<p>Designed By <i class='bx bx-heart'></i> <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
						</div>
					</div> --}}
				</div>
			</div>
		</footer>
		<!-- End Footer Bottom Area -->

		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up bx-fade-up"></i>
		</div>
		<!-- End Go Top Area --> 

        
        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="assets/js/meanmenu.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Owl Carousel Min JS -->
		<script src="assets/js/owl.carousel.min.js"></script>
        <!-- Nice Select Min JS -->
		<script src="assets/js/nice-select.min.js"></script>
		<!-- Appear Min JS --> 
        <script src="assets/js/appear.min.js"></script>
		<!-- Odometer Min JS --> 
		<script src="assets/js/odometer.min.js"></script>
		<!-- Magnific Min JS --> 
		<script src="assets/js/magnific-popup.min.js"></script>
		<!-- Ajaxchimp Min JS --> 
		<script src="assets/js/ajaxchimp.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
		<script src="assets/js/custom.js"></script>
    </body>
</html>