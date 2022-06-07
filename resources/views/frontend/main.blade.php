@extends('frontend.frontendmain')
@section('content')
	<!-- --navbar starts-- -->

	

	<!-- navbar ends -->
	<!-- Banner Starts Here -->
	<div class="main-banner header-text">
		<div class="container-fluid">
			<div class="owl-banner owl-carousel">
				<div class="item">
					<img src="frontendfood/images/C1.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>JUICE</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c4.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>SWEETS</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c2.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>DRINKS</h1>
							</div>

						</div>
					</div>
				</div>
				<div class="item">
					<img src="frontendfood/images/c3.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>SNACKS</h1>
							</div>

						</div>
					</div>
				</div>

				<div class="item">
					<img src="frontendfood/images/c5.png" alt="">
					<div class="item-content">
						<div class="main-content">
							<div class="meta-category">
								<h1>CAKE</h1>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Banner Ends Here -->



	<!-- about section starts -->
	<section id="about" style="margin-top: 5%;">
		<div id="fh5co-about" data-section="about">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Our Story</h2>

					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12">

							<p style="text-align: justify; margin-top: 3%; color: black; font-size: 18px;  letter-spacing: 0.5px; ">Our members constantly tell us how much they like learning about what other independent operators are doing in their restaurants that's working and helping them achieve better results. We do this by conducting member surveys and by showcasing our members' best practices and accomplishments in our Success Stories.Our Success Stories give us the opportunity to showcase the achievements of our members and provide "real world" instruction and inspiration to other independent operators.We hope you enjoying learning about what our members are doing to improve their guest experience, operate more efficiently and build a better, more successful restaurant business.  independent operators are doing in their restaurants that's working and helping them achieve better results. </p>
						</div>

						<div class="col-md-6 col-sm-12 sm-center" style="padding-left: 10%;">
							<div class="industris-space-sm"></div>
							<img src="frontendfood/images/ourstory.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- about section ends here -->


	<!-- menu starts -->
	<section id="menu">
		<div id="fh5co-menus" data-section="menu">

			<div class="container" data-aos="zoom-in-right">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Menu in ChitoMitho</h2>

					</div>
				</div>
				<div class="row row-padded" style="margin-top: 5%;">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 style="font-size: 30px;" class="fh5co-drinks">Drinks</h2>
							@foreach ($menu as $menus)
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="{{asset($menus->image)}}" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>{{$menus->title}}</h3>
											<p style="color: #fb6e14; font-size: 15px;">{{$menus->price}}</p>
										</div>
									</div>
									<form action="addtocart" method="GET">
										@csrf
							        
                                       <a type="button" href="/addtocart/{{$steaks->id}}" class="fh5co-food-pricing" style="font-size: 14px;font-weight: bolder; background-color:white">ORDER NOW </a>
									</form>

								</li>
							
						
								
							</ul>
							@endforeach
						</div>
					</div>


					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 style="font-size: 30px;" class="fh5co-dishes">Lunch</h2>
							@foreach ($lunch as $lunchs)
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="{{asset($lunchs->image)}}" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>{{$lunchs->title}}</h3>
											<p style="color: #fb6e14; font-size: 15px;">$5.5</p>
										</div>
									</div>
									<form action="addtocart" method="GET">
										@csrf
							        
                                       <a type="button" href="/addtocart/{{$steaks->id}}" class="fh5co-food-pricing" style="font-size: 14px;font-weight: bolder; background-color:white">ORDER NOW </a>
									</form>
								</li>
								
								
							@endforeach
							</ul>
						</div>
					</div>

				
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 style="font-size: 30px;" class="fh5co-drinks">juice</h2>
							@foreach ($juice as $juices)
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="{{asset($juices->image)}}" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>{{$juices->title}}</h3>
											<p style="color: #fb6e14; font-size: 15px;">{{$juices->price}}</p>
										</div>
									</div>
									<form action="addtocart" method="GET">
										@csrf
							        
                                       <a type="button" href="/addtocart/{{$steaks->id}}" class="fh5co-food-pricing" style="font-size: 14px;font-weight: bolder; background-color:white">ORDER NOW </a>
									</form>
								</li>
							
							
								@endforeach
							</ul>
						</div>
					</div>

					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 style="font-size: 30px;" class="fh5co-dishes">Steak</h2>
							@foreach ($steak as $steaks)
							<ul>
								<li>
									<div class="fh5co-food-desc">
										<figure>
											<img src="{{asset($steaks->image)}}" class="img-responsive" alt="Free HTML5 Templates by FREEHTML5.co">
										</figure>
										<div>
											<h3>{{$steaks->title}}</h3>
											<p style="color: #fb6e14; font-size: 15px;">{{$steaks->price}}</p>
										</div>
									</div>

									<form action="addtocart" method="GET">
										@csrf
							        
                                       <a type="button" href="/addtocart/{{$steaks->id}}" class="fh5co-food-pricing" style="font-size: 14px;font-weight: bolder; background-color:white">ORDER NOW </a>
									</form>
									
								</li>
								@endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
						<p><a href="viewmenu.html" class="btn btn-primary btn-outline">More Menu</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- menu ends -->




	<!-- services starts here -->
	<section id="service" style="margin-top: -6%;">
		<div id="fh5co-services" data-section="service">

			<div class="container">
				<div class="row">
					<div class="row text-center fh5co-heading row-padded">
						<div class="col-md-8 col-md-offset-2">
							<h2 style="margin-top: 5%;" class="heading to-animate">Our Services</h2>

						</div>
						<div class="col-md-12 col-sm-12 col-lg-12">
							<div class="sec-box">
								<div class="resturent-services remove-ext">
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.2s">
											<figure>
												<img src="frontendfood/images/resource/resto-service1.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s1.png" width="10%" alt=""></i>
												<h4>Healthy Food</h4>
												<span>Food gives us mood. </span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.3s">
											<figure>
												<img src="frontendfood/images/resource/resto-service2.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s2.png" width="10%" alt=""></i>
												<h4>Clean Food</h4>
												<span>Food gives us mood.</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.4s">
											<figure>
												<img src="frontendfood/images/resource/resto-service3.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s3.png" width="10%" alt=""></i>
												<h4> Free Delivery</h4>
												<span>Food gives us mood.</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.5s">
											<figure>
												<img src="frontendfood/images/resource/resto-service4.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s4.png" width="10%" alt=""></i>
												<h4>Best Food</h4>
												<span>Food gives us mood.</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.6s">
											<figure>
												<img src="frontendfood/images/resource/resto-service5.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s5.png" width="10%" alt=""></i>
												<h4>Quick Delivery</h4>
												<span>Food gives us mood.</span>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="servise-box wow fadeIn" data-wow-delay="0.7s">
											<figure>
												<img src="frontendfood/images/resource/resto-service6.jpg" alt="">
											</figure>
											<div class="uper-meta">
												<i><img src="frontendfood/images/s6.png" width="10%" alt=""></i>
												<h4>Easy Payment</h4>
												<span>Food gives us mood.</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<!-- services ends here -->


	<!-- partner starts here -->

	<section id="team" class="parallax-section" style="margin-top: 4%;">
		<div id="fh5co-team" data-section="team">
			<div class="container">
				<div class="row">
					<div class="row text-center fh5co-heading row-padded">
						<div class="col-md-8 col-md-offset-2">
							<h2 style="margin-top: 5%;" class="heading to-animate">Our Partner</h2>

						</div>
						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
							<img src="frontendfood/images/p5.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;">JIGYASHA KATHET</h4>
							<h3>CEO</h3>
						</div>
						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
							<img src="frontendfood/images/p2.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;">DIGGAJ CHAUDHARY</h4>
							<h3>MANAGER</h3>
						</div>

						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
							<img src="frontendfood/images/p3.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;">NIKKI GOYAL</h4>
							<h3>SUPERVISIOR</h3>
						</div>
						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: 5%;">
							<img src="frontendfood/images/p6.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;"> ARJUN KATWAL</h4>
							<h3>HR</h3>
						</div>
						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s" style="margin-top: 5%;">
							<img src="frontendfood/images/p1.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;">ROSNI KARKI</h4>
							<h3>MAIN CHEF</h3>
						</div>
						<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s" style="margin-top: 5%;">
							<img src="frontendfood/images/p4.png" class="img-responsive center-block" alt="team img">
							<h4 style="color: #fb6e14; margin-top: 6%;">SHASHANK KOIRALA</h4>
							<h3>BAKER</h3>
						</div>

					</div>
				</div>
			</div>
		</div>

	</section>
	<!-- Partner ends here -->


	<!-- contact starts -->

	<section class="contact-us" id="contact" data-aos="fade-up" data-aos-duration="3000" style="margin-top: -4%;">
		<div id="fh5co-contact" data-section="contact">
			<div class="container">
				<div class="row">
					<div class="row text-center fh5co-heading row-padded">
						<div class="col-md-8 col-md-offset-2">
							<h2 style="margin-top: 20%;" class="heading to-animate">Contact us</h2>

						</div>
						<div class="col-lg-12">
							<div class="down-contact">
								<div class="row" style="margin-top: 3%;">
									<div class="col-lg-8">
										<div class="sidebar-item contact-form">
											<div class="sidebar-heading">
												<h2>Send us a message if you have any queries</h2>
											</div>
											<div class="content">
												<form id="contact" action="" method="post">
													<div class="row">
														<div class="col-md-6 col-sm-12">
															<fieldset>
																<input name="name" type="text" id="name" placeholder="Your name" required="">
															</fieldset>
														</div>
														<div class="col-md-6 col-sm-12">
															<fieldset>
																<input name="email" type="text" id="email" placeholder="Your email" required="">
															</fieldset>
														</div>
														<div class="col-md-12 col-sm-12">
															<fieldset>
																<input name="subject" type="text" id="subject" placeholder="Subject">
															</fieldset>
														</div>
														<div class="col-lg-12">
															<fieldset>
																<textarea name="message" rows="6" id="message" placeholder="Your Message" required=""></textarea>
															</fieldset>
														</div>
														<div class="col-lg-12">
															<fieldset>
																<button type="submit" id="form-submit" class="main-button">Send Message</button>
															</fieldset>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="sidebar-item contact-information">
											<div class="sidebar-heading">
												<h2>contact information</h2>
											</div>
											<div class="content">
												<ul>
													<li>
														<h5>9810531542</h5>
														<span>PHONE NUMBER</span>
													</li>
													<li>
														<h5>ChithoMitho@gmail.com</h5>
														<span>EMAIL ADDRESS</span>
													</li>
													<li>
														<h5>Itahari Sunsari</h5>
														<span>STREET ADDRESS</span>
													</li>

													  <a id="back-to-top" href="#" class="btn btn-warning  back-to-top " role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
                <i class="fas fa-arrow-up text-light"></i></a>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</section>



@endsection

	

