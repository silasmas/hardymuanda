@extends('template.modele')


@section('content')
<!-- Banner -->
<section class="banner-2 bg-grey py-7" id="banner-2">
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-6">
                <div class="banner-img">
                    <img src="{{ asset('asset/images/book-2.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner">
                    <p class="font-weight-bold"><span class="text-color">50% discount</span> de réduction sur l'achat anticipé</p>
                    <h1 class="mb-2">
                       TANK MOTIVATION
                    </h1>

                    <p class="lead">A great landing page to sell your eBook!</p>

                    <p class="mb-3 mt-4">
                        Nous travaillons avec nos partenaires pour rationaliser
                        les plans de projet qui ne se contentent pas d'offrir la perfection du
                        produit, mais aussi de respecter les délais.
                    </p>

                    <a href="#" target="_blank" class="btn btn-main-2 mt-2">
                       Achetez Maintenant<i class="ti-check mr-2 ml-2"></i> $10
                    </a>
                    <p class="mt-4">* L'eBook comprend les versions iBooks, PDF et ePub</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--  Section Features -->

<section class="features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="heading">
                    <span>CARACTÉRISTIQUES</span>
                    <h2>Caractéristiques essentielles du livre.</h2>
                    <p>Faut t'expliquer comment cette douleur dénonçant l'éloge a été te donner t'expliquer comment…</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <div class="feature-icon"><i class="ti-heart"></i></div>
                    <h5>More than 10+ award achieved</h5>
					<p>Click edit to change this text. Lorem ipsum dolor sit amet cctetur </p>
                </div>
            </div>
             <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <div class="feature-icon"><i class="ti-mobile"></i></div>
                    <h5> Read On Any Device </h5>
					<p>Fugit ratione, repellendus, dignissimos, ducimus voluptatem, quos.</p>
                </div>
            </div>
             <div class="col-lg-4 col-md-6">
                <div class="feature-item">
                    <div class="feature-icon"><i class="ti-layers-alt"></i></div>
                    <h5>Very high resolution </h5>
					<p>Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Book preview -->
<section class="book" id="book">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="book-preview">
					<img src="{{ asset('asset/images/kindle.png') }}" class="background-device img-fluid" alt="">
					<div class="owl-book owl-carousel owl-theme" style="opacity: 1; display: block;">
						<div class="book-item">
							<img src="{{ asset('asset/images/book_page.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('asset/images/book_page.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>

						<div class="book-item">
							<img src="{{ asset('asset/images/book_page2.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('asset/images/book_page2.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
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

			<div class="col-lg-6 col-md-6">
				<div class="section-heading book-info mt-lg-0 pl-4">
					<h2 class="text-lg mb-4">À propos du livre</h2>
					<p class="lead">
                        Ce beau livre bien écrit concerne la création typographique et est essentiel pour les professionnels qui travaillent régulièrement pour des clients.
                    </p>

					<div class="about-features mt-5">
						<div class="about-item mb-40">
							<h5>Cibler la vision</h5>
							<p>
                                Debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.
                            </p>
						</div>
						<div class="about-item mb-40">
							<h5>Connaissance puissante</h5>
							<p>Debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
						<div class="about-item">
							<h5>Objectifs marketing permanents</h5>
							<p>Possimus debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Call to action -->
<section class="cta-3">
	<div class="container">
		<div class="row justify-content-center cta-wrapper">
            <div class="col-lg-10">
                <div class="cta-content text-center">
                    <span>Inscrivez-vous maintenant pour recevoir votre place</span>
                    <h2>Ne manquez pas l'événement de vernissage du livre de ce Samedi 03 septembre 2022.</h2>
                    <a href="#" target="_blank" class="btn btn-white mt-2"> <i class="fab fa-edite mr-2"></i> Achetez maintenant</a>
                    <a href="#" target="_blank" class="btn btn-main-2 mt-2 ml-lg-2"> <i class="fab fa-plays mr-2"></i> Voir en vidéo</a>
                </div>
            </div>
		</div>
	</div>
</section>

<!-- Chapter -->
<section class="section chapter-2" id="chapter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading text-center">
                    <span class="text-color">Voulez-vous savoir</span>
                    <h2>Qu'y a-t-il à l'intérieur du livre</h2>
                    <p>Une petite rivière nommée Duden coule à leur place et lui fournit les régéliales nécessaires.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Design principles</h4>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Visual hierarchy</h4>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Powerful UI</h4>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Digital Marketing</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>White space</h4>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>UI design</h4>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Marketing Thoughts</h4>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Learning Materials</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Typography</h4>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Web Design </h4>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Color theory</h4>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Design  theory</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Counter -->
<section class="section counter-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-world"></i>
                    <h2 class="count">23,500</h2>
                    <p>Copies Sold</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item  mb-5 mb-lg-0">
                    <i class="ti-face-smile"></i>
                    <h2 class="count">53,246</h2>
                    <p>Cup Of Coffee</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
                <div class="counter-item  mb-5 mb-lg-0">
                    <i class="ti-bookmark-alt"></i>
                    <h2 class="count">32,456</h2>
                    <p>Copies Released</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="counter-item mb-5 mb-lg-0">
                    <i class="ti-heart"></i>
                    <h2 class="count">45,522</h2>
                    <p>Happy Readers</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- About Author -->
<section class="author section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="{{ asset('asset/images/about/auteur.jpg') }}" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0">
                    <div class="heading">
                        <span class="text-color">À PROPOS DE L'AUTEUR</span>
                        <h2>Hardy Maunda</h2>
                        <div class="follow">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.facebook.com/Hardyofficiel"><i class="ti-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a target="_blank" href="https://www.instagram.com/invites/contact/?i=137hm2clehh61&utm_content=hvp6dmg"><i class="ti-instagram"></i></a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <p class="mb-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. et inventore dicta quos ducimus, consectetur culpa dolore quisquam ipsum facere, fugiat. Corporis eaque, sint.</p>
                    <img src="{{ asset('asset/images/about/2.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="featured-client section-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="heading text-center">
                    <span class="text-color">SUJET VEDETTE</span>
                    <h2>Présenté par eux. </h2>
                    <p>Une petite rivière nommée Duden coule à leur place et lui fournit les régéliales nécessaires.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center border p-4">
                    <div class="row align-items-center">
                        <div class="col">
                            <img src="{{ asset('asset/images/about/award-1.p') }}ng" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('asset/images/about/award-2.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('asset/images/about/award-3.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col">
                            <img src="{{ asset('asset/images/about/award-4.png') }}" alt="" class="img-fluid">
                        </div>
                         <div class="col">
                            <img src="{{ asset('asset/images/about/award-2.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Review-->
<div class="section bg-grey reviews" data-aos="fade-up" id="reviews">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="heading text-center">
                    <span class="text-color">TÉMOIGNAGES</span>
                    <h2>Avis des lecteures. </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center" data-aos="fade-up">
            <div class="col-md-8">
                <div class="owl-carousel home-slider-loop-false owl-theme">
                    <div class="testimonial-item">
                        <blockquote class="testimonial2">
                            <p>&ldquo;A small river named Duden flows by their place and supplies it with the
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
                            <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia
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
                            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is
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
                            <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of
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
</div> <!-- .section -->

<!-- Call to action -->
{{-- <section class="cta-home">
	<div class="container">
		<div class="row justify-content-center bg-main">
			<div class="col-lg-6">
                 <h2 class="text-lg">Start building a landing page that converts to leads.</h2>
			 	<p class="mt-3 mb-0">* Download link will be emailed to you.</p>
			</div>

			<div class="col-lg-6">
				<form action="#" class="subscribe-form">
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Full Name">
			 		</div>
			 		<div class="form-group">
			 			<input type="text" class="form-control" placeholder="Enter Your email">
			 		</div>

			 		<a href="#" class="btn btn-main-2">Get free trial</a>
			 	</form>

			</div>
		</div>
	</div>
</section> --}}

<!-- Contact -->
<section class="section contact " id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-6">
                <div class="heading text-center">
                    <span class="text-color">Prendre contact</span>
                    <h2>Contacter l'auteur </h2>
                    <p>
                        Que vous ayez des questions ou que vous souhaitiez simplement
                         dire bonjour, contactez-nous par <b>Whatsapp</b> en cliquant le bouton en-bas à droite . !
                    </p>
                </div>
            </div>
        </div> <!-- / .row -->

        {{-- <div class="row">
            <div class="col-lg-12">
                <form class="contact__form form-row contact-form w-100" method="post" action="mail.php" id="contactForm">
                     <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center w-100">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>

                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
                            </div>

                            <div class="form-group">
                                <textarea id="message" name="message" cols="30" rows="8" class="form-control" placeholder="Your Message"></textarea>
                            </div>

                            <div class="text-center">
                                <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> --}}
    </div>
</section>
@endsection
