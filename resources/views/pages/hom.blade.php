@extends('template.modele')


@section('content')
<!-- Banner -->
<section class="banner-main-2" id="banner">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="main-banner">
                    {{-- <p class="font-weight-bold"><span class="text-color">50% de réduction</span> sur l'achat anticipé</p> --}}
                    <h1 class="mb-2">
                        TANK <br>MOTIVATION
                    </h1>

                    <p class="mb-3 mt-4">
                        Nous travaillons avec nos partenaires pour rationaliser
                        les plans de projet qui ne se contentent pas d'offrir la perfection du
                        produit, mais aussi de respecter les délais.
                    </p>

                    <a href="#" target="_blank" class="btn btn-main-2 mt-2">
                        Achetez Maintenant
                    </a>
                    <p class="mt-4">* eBook includes iBooks, PDF & ePub versions </p>
                </div>
            </div>
             <div class="col-lg-5">
                <div class="banner-img">
                    <img src="{{ asset('asset/images/i1.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
</section>

<!--  Features Start -->

<section class="feature" id="features">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature-block mb-4 mb-lg-0">
                    <i class="ti-microphone text-danger"></i>
                    <h5 class="mb-3 mt-4">Experience</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
             <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature-block mb-4 mb-lg-0">
                    <i class="ti-rocket text-success"></i>
                    <h5 class="mb-3 mt-4">Marketing Goals</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                 <div class="feature-block mb-4 mb-lg-0 ">
                    <i class="ti-email text-warning"></i>
                    <h5 class="mb-3 mt-4">Targetting Vission</h5>
                    <p class="mb-0">Must explain to you how this denouncing praisig pain was give you explain to you how…</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Book preview -->
<section id="book" class="section">
	<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
               <div class="section-heding text-center mb-70">
                    <h2 class="text-lg mb-4">À propos du livre</h2>
                    <p class="lead">This lovely, well-written book is concerned with creating typography and
                        is essential for clients.</p>
               </div>
            </div>
        </div>
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-12 ">
				<div class="book-preview mb-5 mb-lg-0">
					<img src="{{ asset('asset/images/kindle.png') }}" class="background-device img-fluid" alt="">
					<div class="owl-book owl-carousel owl-theme" style="opacity: 1; display: block;">
						<div class="book-item">
							<img src="{{ asset('asset/images/i2.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('asset/images/i2.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>

						<div class="book-item">
							<img src="{{ asset('asset/images/i3.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('asset/images/i3.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>

						<div class="book-item">
							<img src="{{ asset('asset/images/book_page.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('asset/images/book_page.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12">
				<div class="section-heading book-info mt-5 mt-lg-0 pl-4">
					<div class="about-features mt-5">
						<div class="about-item2 mb-40">
                            <div class="about-icon"><i class="ti-crown"></i></div>
							<h4>More than 10+ award achieved</h4>
							<p>Fugit ratione, repellendus, dignissimos, ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
						<div class="about-item2 mb-40">
                            <div class="about-icon"><i class="ti-book"></i></div>
							<h4>Read On Any Device</h4>
							<p>Debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
						<div class="about-item2">
                            <div class="about-icon"><i class="ti-desktop"></i></div>
							<h4>Very high resolution</h4>
							<p>Possimus debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--  Featured Clients logo -->
<section class="featured-client">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                             <h5 class="mb-5 mb-lg-0">Featured by companies like:</h5>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="client-logo">
                                <img src="{{ asset('asset/images/client/logo1.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3">
                            <div class="client-logo">
                                <img src="{{ asset('asset/images/client/logo2.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="client-logo">
                                <img src="{{ asset('asset/images/client/logo3.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <div class="client-logo">
                                <img src="{{ asset('asset/images/client/logo4.png') }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chapter -->
<section class="section chapter" id="chapter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg text-white">What's inside the book</h2>
                    <p class="lead text-white-50">Libero atque veniam molestiae ipsa aliquid quam facilis dolore.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Design principles</h4>
                            <p>Tips on scouting the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Visual hierarchy</h4>
                            <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>White space</h4>
                           <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Typography</h4>
                            <p> A full chapter just about visas. Overview of work visa options, tips on finding recommendations.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>UI design</h4>
                            <p> Making use of events, networking as a designer/developer How to meet the right people.</p>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Color theory</h4>
                            <p>Understanding how the city works. Best practices for eating out and grocery shopping. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action -->
<section class="cta">
	<div class="container">
		<div class="row justify-content-center cta-wrapper">
            <div class="col-lg-10">
                <div class="cta-content text-center">
                    <span>Inscrivez-vous maintenant pour recevoir votre place</span>
                    <h2>Ne manquez pas l'événement de vernissage du livre de ce Samedi 03 septembre 2022.</h2>
                    <a href="#" target="_blank" class="btn btn-white mt-2"> <i class="fab fa-amazon mr-2"></i> Achetez maintenant</a>
                    <a href="#" target="_blank" class="btn btn-main-2 mt-2 ml-lg-2"> <i class="fab fa-google-play mr-2"></i>  Voir en vidéo</a>
                </div>
            </div>
		</div>
	</div>
</section>


<!--  Pricing Section -->
{{-- <section class="section pb-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-10">
                <div class="heading mb-5 text-center">
                    <span class="featured-text wow fadeInDown" data-wow-delay="300ms">Pricing plan</span>
                    <h2 class="text-lg wow fadeInLeft font-serif" data-wow-delay="400ms" >Pricing made simple</h2>
                    <p class="lead">This lovely, well-written book is concerned with creating typography and is essential for professionals</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pricing-box mb-4 mb-lg-0">
                    <div class="pricing-header">
                        <p>Basic</p>
                        <h2>40$</h2>
                    </div>

                    <ul class="list-unstyled">
                        <li><i class="flaticon flaticon-check"></i>Pdf Version</li>
                        <li><i class="flaticon flaticon-check"></i>10 Audio Playlist</li>
                        <li><i class="flaticon flaticon-check"></i>10 Chapter Ebook</li>
                    </ul>

                    <a href="#" class="btn btn-main-2">Get it now <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pricing-box mb-4 mb-lg-0">
                    <div class="pricing-header">
                        <p>Advanced</p>
                        <h2>70$</h2>
                    </div>

                    <ul class="list-unstyled">
                        <li><i class="flaticon flaticon-check"></i>Pdf Version</li>
                        <li><i class="flaticon flaticon-check"></i>FullAudio Playlist</li>
                        <li><i class="flaticon flaticon-check"></i>Ebook Included</li>
                    </ul>

                    <a href="#" class="btn btn-main-2">Get it now <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="pricing-box mb-4 mb-lg-0">
                    <div class="pricing-header">
                        <p>Premium</p>
                        <h2>90$</h2>
                    </div>

                    <ul class="list-unstyled">
                        <li><i class="flaticon flaticon-check"></i>Pdf Version</li>
                        <li><i class="flaticon flaticon-check"></i>Full Audio Playlist</li>
                        <li><i class="flaticon flaticon-check"></i>Ebook Included</li>
                    </ul>

                    <a href="#" class="btn btn-main-2">Get it now <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!--  Pricing END -->

<!-- Review-->
<div class="section " data-aos="fade-up" id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-lg mb-5">Ce que disent les lecteurs</h2>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-md-12 col-lg-8">
                <div class="owl-carousel home-slider-loop-false owl-theme">
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>A small river named Duden flows by their place and supplies it with the
                                necessary regelialia. It is a paradisematic country, in which roasted parts of
                                sentences fly into your mouth.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="{{ asset('asset/images/about/person_2.jpg') }}" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Maxim Smith</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                and Consonantia, there live the blind texts. Separated they live in
                                Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="{{ asset('asset/images/about/person_3.jpg') }}" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Geert Green</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>Even the all-powerful Pointing has no control about the blind texts it is
                                an almost unorthographic life One day however a small line of blind text by the
                                name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="{{ asset('asset/images/about/person_2.jpg') }}" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Dennis Roman</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>The Big Oxmox advised her not to do so, because there were thousands of
                                bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text
                                didn’t listen. She packed her seven versalia, put her initial into the belt and
                                made herself on the way.&rdquo;</p>
                            <div class="author mt-5">
                                <img src="{{ asset('asset/images/about/person_3.jpg') }}" alt="Image placeholder" class="mb-4">
                                <h4 class="mb-0">Geert Green</h4>
                                <p>CEO, Founder</p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- .section -->

<!-- Counter -->
<section class="counter-4 ">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 wow fadeInLeft" data-wow-delay="100ms">
					<div class="icon">
						<i class="ti-thumb-up"></i>
					</div>
					<div class="content">
                        <h2 class="count">25000</h2>
						<span>Exemplaires vendus</span>
					</div>
				</div>
            </div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 wow fadeInLeft" data-wow-delay="200ms">
					<div class="icon">
						<i class="ti-check"></i>
					</div>
					<div class="content">
                        <h2 class="count">23</h2>
						<span>Fait un don</span>
					</div>
				</div>
            </div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 wow fadeInLeft" data-wow-delay="300ms">
					<div class="icon">
						<i class="ti-bookmark"></i>
					</div>
					<div class="content">
                        <h2 class="count">1</h2>
						<span>Copies publiées</span>
					</div>
				</div>
            </div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0 wow fadeInLeft" data-wow-delay="400ms">
					<div class="icon">
						<i class="ti-heart"></i>
					</div>
					<div class="content">
                        <h2 class="count">45</h2>
						<span>Heureux lecteurs</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Counter End -->

<!-- About Author -->
<section class="author section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{ asset('asset/images/about/i4.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0 pl-md-0">
                    <span>En savoir plus sur l'auteur</span>
                    <h2 class="text-lg">Hardi Muanda <span class="text-sm">- Technical Writer</span></h2>

                    <p class="mb-4 mt-3">
                        C'est un fait établi depuis longtemps qu'un lecteur sera distrait par le contenu
                        lisible d'une page lorsqu'il regarde sa mise en page. et découvrant les mots que nous
                         menons, la culpabilité sera suivie de la douleur de quiconque fait de même, qu'il
                          s'enfuie. Qu'ils soient du corps.
                    </p>
                    <img src="{{ asset('asset/images/about/2.png') }}" alt="" class="img-fluid">


                    <div class="follow mt-5">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="mb-3">Follow Me :</span></li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/Hardyofficiel"  target="_blank"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="https://www.instagram.com/invites/contact/?i=137hm2clehh61&utm_content=hvp6dmg"><i class="ti-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Others books -->
<section class="section-bottom others-book">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="pb-4">
					<h2>Autres livres de l'auteur</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
                    <div class="book-img">
                        <img src="{{ asset('asset/images/l.png') }}" alt="" class="img-fluid">
                        <a href="{{ asset('asset/images/l.png') }}" class="hover-item popup-gallery">
                            <i class="ti-zoom-in"></i>
                        </a>
                    </div>
                    <div class="content">
                        <h4><a href="#" target="_blank">TANK MOTIVATION</a></h4>
                        <span>Detail</span>
                    </div>
				</div>
			</div>
			{{-- <div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<div class="book-img">
                        <img src="images/about/b-2.jpg" alt="" class="img-fluid">
                        <a href="images/about/b-2.jpg" class="hover-item popup-gallery">
                            <i class="ti-zoom-in"></i>
                        </a>
                    </div>

                    <div class="content">
                        <h4><a href="#" target="_blank">The man of book</a></h4>
                        <span>Story</span>
                    </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<div class="book-img">
                        <img src="images/about/b-3.jpg" alt="" class="img-fluid">
                        <a href="images/about/b-3.jpg" class="hover-item popup-gallery">
                            <i class="ti-zoom-in"></i>
                        </a>
                    </div>
                    <div class="content">
                        <h4><a href="#" target="_blank">The man of book</a></h4>
                        <span>Story</span>
                    </div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="book-item mb-4 mb-lg-0">
					<div class="book-img">
                        <img src="images/about/b-4.jpg" alt="" class="img-fluid">
                        <a href="images/about/b-4.jpg" class="hover-item popup-gallery">
                            <i class="ti-zoom-in"></i>
                        </a>
                    </div>
                    <div class="content">
                        <h4><a href="#" target="_blank">The man of book</a></h4>
                        <span>Story</span>
                    </div>
				</div>
			</div> --}}
		</div>
	</div>
</section>

<!-- Call to action -->
<section class="section cta-home">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				 <h2 class="text-lg">Start building a landing page that converts to leads.</h2>
			</div>

			<div class="col-lg-6">
				<form action="#">
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Full Name">
			 		</div>
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Enter Your email">
			 		</div>

			 		<a href="#" class="btn btn-main-2">Get free trial</a>
			 	</form>

			 	<p class="mt-3 mb-0">* Download link will be emailed to you.</p>
			</div>
		</div>
	</div>
</section>

<!--  FAQ Start -->
<section class="section faq border-bottom">
	<div class="container">
		<div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
               <div class="section-heading text-center">
                    <h2 class="mb-2 text-lg">Frequently Asked Questions</h2>
                    <p>Whether you have questions or you would just like to say hello, contact us.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, atque!</p>
               </div>
            </div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingOne">
			                <h4 class="panel-title ">
			                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-controls="collapseOne">
			                        <i class="more-less ti-plus"></i>
			                        How to contact with Customer Service?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			                <div class="panel-body">
			                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingTwo">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"  aria-controls="collapseTwo">
			                        <i class="more-less ti-plus"></i>
			                        New update fixed all bug and issues?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingThree">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  aria-controls="collapseThree">
			                        <i class="more-less ti-plus"></i>
			                        Website reponse taking time, how to improve?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>
			        <div class="panel panel-default">
			            <div class="panel-heading" role="tab" id="headingFour">
			                <h4 class="panel-title ">
			                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-controls="collapseFour">
			                        <i class="more-less ti-plus"></i>
			                        How to purchase the book online?
			                    </a>
			                </h4>
			            </div>
			            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			                <div class="panel-body">
			                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			                </div>
			            </div>
			        </div>

			    </div><!-- panel-group -->

			    <div class="mt-5 text-center">
			    	<a href="#" class="btn btn-main-2">Acheter maintenant</a>
			    </div>
			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section class="section contact " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
               <div class="heading  text-center">
                    <h2 class="mb-2 text-lg">Contacter l'auteur</h2>
                    <p>
                        Que vous ayez des questions ou que vous souhaitiez simplement discuter avec nous laissez nous un message dans le formulaire ci-dessous, ou encore contactez-nous par
                          <b>Whatsapp</b> en cliquant le bouton en-bas à droite . !
                    </p>
               </div>
            </div>
        </div> <!-- / .row -->
<br>
         <div class="row">
            <div class="col-lg-7 col-sm-12 pr-5 col-md-8">
                <form class="contact__form form-row contact-form " method="post" action="mail.php" id="contactForm">
                     <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Votre adresse mail">
                            </div>
                        </div>
                        <div class="col-lg-12 ">
                            <div class="form-group">
                                <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Votre message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between mt-4">
                            <p>* Soyez assuré que nous ne spammerons pas votre boîte de réception.</p>
                            <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Envoyer Message">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="contact-info-block mb-4 mt-5 mt-lg-0 mt-md-0">
                    <h4 class="mb-2">Contact</h4>
                    <p>+243 896 036 592</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Email</h4>
                    <p>contact@hardymuanda.com</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Location</h4>
                    <p>KINSHASA/ RDC</p>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
