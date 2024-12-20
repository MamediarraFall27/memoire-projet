{{--@extends('layouts.app')

@section('content')
    <h1>Liste des Locations</h1>
    <a href="{{ route('locations.create') }}">Nouvelle Location</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Bien Immobilier</th>
                <th>Client</th>
                <th>Montant</th>
                <th>État</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($locations as $location)
                <tr>
                    <td>{{ $location->id }}</td>
                    <td>{{ $location->bienImmobilier->adresse }}</td>
                    <td>{{ $location->client->nom }} {{ $location->client->prenom }}</td>
                    <td>{{ $location->montant }}</td>
                    <td>{{ $location->etat }}</td>
                    <td>
                        <a href="{{ route('locations.show', $location->id) }}">Voir</a>
                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection--}}

<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/projects-classic.html  30 Nov 2019 03:50:50 GMT -->
<head>
<meta charset="utf-8">
<title>Stella Orr'e - Interior and Home Renovation HTML Template | Projects Classic</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>

    <header class="main-header header-style-one">
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container clearfix">
                <div class="top-left clearfix">
                    <div class="text"><span class="icon flaticon-call-answer"></span> Besoin d'aide ? Appelez-nous maintenant : <a href="tel:1800-456-7890" class="number">+221 774783855</a></div>

                </div>
                <div class="top-right clearfix">
                    <!-- Info List -->
					<ul class="info-list">
                        <li><a href="about.html">Notre histoire</a></li>
                        <li><a href="blog.html">Inspiration</a></li>
						<li class="quote"><a href="contact.html">Obtenez un devis gratuit</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Header Top -->

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="inner-container">
                <div class="auto-container clearfix">
                    <!--Info-->
                    <div class="logo-outer">
                        <div class="logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler For Mobile--><div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="navbar-header">
                                <!-- Togg le Button -->
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-1"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="accueil">Accueil</a></li>
                                    <li class=" dropdown"><a href="propos">À propos</a> </li>
                                    <li class="dropdown"><a href="locations">Louer</a>  </li>
                                    <li class="dropdown"><a href="vente">Vente</a></li>
                                    <li><a href="contact">Contact</a></li>
                                    <li class="dropdown"><a href="login">Connexion</a></li>
                                    <li class="dropdown"><a href="register">Inscription</a></li>

                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->

						<!-- Outer Box -->
                        <div class="outer-box clearfix">
                            <div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

    	<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
				<!--Social Links-->
				<div class="social-links">
					<ul class="clearfix">
						<li><a href="#"><span class="fab fa-twitter"></span></a></li>
						<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
						<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
						<li><a href="#"><span class="fab fa-instagram"></span></a></li>
						<li><a href="#"><span class="fab fa-youtube"></span></a></li>
					</ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg)">

    </section>
    <!--End Page Title-->

	<!-- Portfolio Page Section -->
	<section class="portfolio-page-section">
		<div class="auto-container">
			<!--MixitUp Galery-->
            <div class="mixitup-gallery">

                <!--Filter-->
                <div class="filters clearfix">

                	<ul class="filter-tabs filter-btns text-center clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Tous les travaux</li>
                        <li class="filter" data-role="button" data-filter=".residential-interior">Intérieur résidentiel</li>
                        <li class="filter" data-role="button" data-filter=".interior">Intérieur commercial</li>
                        <li class="filter" data-role="button" data-filter=".kitchen">Cuisine Modulaire</li>
                        <li class="filter" data-role="button" data-filter=".wardrobe">Armoire moderne</li>
						<li class="filter" data-role="button" data-filter=".furniture">Mobilier moderne</li>
                    </ul>

                </div>

                <div class="filter-list row clearfix">

					<!-- Gallery Item -->
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/17.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/17.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all wardrobe kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/18.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/18.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all wardrobe residential-interior interior col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/19.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/19.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all wardrobe furniture kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/20.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/20.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all interior residential-interior col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/21.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/21.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all wardrobe furniture kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/22.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/22.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all interior furniture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/23.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/23.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all furniture kitchen col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/24.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/24.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

					<!-- Gallery Item -->
					<div class="gallery-item mix all furniture col-lg-4 col-md-6 col-sm-12">
						<div class="inner-box">
							<figure class="image-box">
								<img src="images/gallery/25.jpg" alt="">
								<!--Overlay Box-->
								<div class="overlay-box">
									<div class="overlay-inner">
										<div class="content">
											<h3><a href="projects-fullwidth.html">Cuisine Modulaire</a></h3>
											<a href="images/gallery/25.jpg" data-fancybox="gallery-4" data-caption="" class="link"><span class="icon flaticon-magnifying-glass-1"></span></a>
											<a href="louer" class="link"><span class="icon flaticon-unlink"></span></a>
										</div>
									</div>
								</div>
							</figure>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
	<!-- End Story Section -->

	<!--Main Footer-->
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">

                    <!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
									<div class="logo">
                                    	<a href="index-2.html"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <div class="text">Stella Orr'e is a WordPress theme to build Interior websites. It has good features and you will love.</div>
                                    <ul class="social-icons">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
                                    </ul>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                	<h2>Quick links</h2>
									<div class="widget-content">
										<ul class="list">
                                        	<li><a href="#">About Gaille</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Terms & Conditionis</a></li>
                                            <li><a href="#">Faq</a></li>
                                        </ul>
                                    </div>
								</div>
							</div>

						</div>
					</div>

					<!--big column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h2>Contact Info</h2>
									<div class="widget-content">
										<a href="tel:1800-574-9687" class="contact-number">(1800) 574 9687</a>
										<ul>
											<li>256, Stella Orr'e, New York 24</li>
											<li>Email :<a href="mailto:info@stellaorre.com"> info@stellaorre.com</a></li>
										</ul>
									</div>
								</div>
							</div>

							<!--Footer Column-->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
                                	<h2>Newsletter</h2>
									<div class="text">Get Special offers & Discounts</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="templateshub.net">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
												<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
			</div>

			<!--Footer Bottom-->
            <div class="footer-bottom clearfix">
                <div class="pull-left">
                    <div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
                </div>
                <div class="pull-right">
                    <a href="templateshub.net">Templates Hub</a>
                </div>
            </div>

		</div>
	</footer>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
	<div class="popup-inner">
		<div class="overlay-layer"></div>
    	<div class="search-form">
        	<form method="post" action="templateshub.net">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>

            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Home Interiors</a></li>
                <li><a href="#">Offices Interiors</a></li>
                <li><a href="#">Showroom Interiors</a></li>
                <li><a href="#">Building Interiors</a></li>
                <li><a href="#">Shops Interiors</a></li>
            </ul>

        </div>

    </div>
</div>

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/appear.js"></script>
<script src="js/scrollbar.js"></script>
<script src="js/script.js"></script>
</body>

<!-- stella-orre/projects-classic.html  30 Nov 2019 03:51:15 GMT -->
</html>
