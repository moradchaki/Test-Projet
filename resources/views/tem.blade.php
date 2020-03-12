<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Life Coach - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col">
							<p class="mb-0 phone"><span class="fa fa-phone"></span> <a href="#">+00 1234 567</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">Life<span>coach</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="success-stories.html" class="nav-link">Stories</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ url('cvs') }}" class="nav-link">Cvs</a></li>
            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
	      <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-10 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>We are your personal life coach</h2>
			            <h1 class="mb-4">Discover the secrets of life</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_2.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-10 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Improving the world</h2>
			            <h1 class="mb-4">Restart your career to be successful</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	      <div class="slider-item" style="background-image:url(images/bg_3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-10 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2>Welcome to lifecoach</h2>
			            <h1 class="mb-4">We help to reach your goals</h1>
			            <p><a href="#" class="btn btn-white">Connect with us</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>
	    </div>
	  </div>
		
		<section class="intro py-5 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="intro-box w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text pl-3">
								<h4 class="mb-0">Call us: +12 234 456 7890</h4>
								<span> 198 West 21th Street, Suite 721 New York NY 10016</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="intro-box w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-clock-o"></span>
							</div>
							<div class="text pl-3">
								<h4 class="mb-0">Opening Hours</h4>
								<span>Mon - Sat 7:00 AM - 8:00 PM / Sundays closed</span>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="intro-box w-100">
							<p class="mb-0"><a href="#" class="btn btn-primary">Make an Appointment</a></p>
						</div>
					</div>
				</div>
			</div>	
		</section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>We can help you in different situations</h2>
            <span class="subheading">We offer Services</span>
          </div>
        </div>
    		<div class="row">
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-goal"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Career &amp; Business</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-stress"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Mental &amp; Physical Care</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-crm"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">People &amp; Relationships</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch px-4 ftco-animate">
            <div class="d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-marriage"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Life coaching</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>
   	
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Why coaching work?</h2>
            <span class="subheading">Other Services</span>
          </div>
        </div>
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-account"></span></div>
    					<div class="text pl-4">
    						<h4>Accountability</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-skills"></span></div>
    					<div class="text pl-4">
    						<h4>Expertise</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-performance"></span></div>
    					<div class="text pl-4">
    						<h4>Speed</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-event"></span></div>
    					<div class="text pl-4">
    						<h4>Delivery</h4>
    						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
    					</div>
    				</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Successful Entrepreneurs</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="378">0</strong>
              </div>
              <div class="text">
              	<span>Companies Founded</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1200">0</strong>
              </div>
              <div class="text">
              	<span>Book, DVD's and Podcasts</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>



    <section class="ftco-section testimony-section bg-secondary">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
            <span class="subheading">Testimonies</span>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
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

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Latest news from our blog</h2>
            <span class="subheading">News &amp; Blog</span>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">January 30, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		

    <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
      	<div class="row">
	      	<div class="col-md-12">
	      		<div class="bg-secondary w-100 rounded p-4">
	        		<div class="row">
			          <div class="col-md-7 d-flex align-items-center">
			            <h2 class="mb-3 mb-sm-0" style="color:black; font-size: 18px;">Subcribe for our weekly tips</h2>
			          </div>
			          <div class="col-md-5 d-flex align-items-center">
			            <form action="#" class="subscribe-form">
			              <div class="form-group d-flex">
			                <input type="text" class="form-control" placeholder="Enter email address">
			                <input type="submit" value="Subscribe" class="submit px-3">
			              </div>
			            </form>
			          </div>
		          </div>
			      </div>
			    </div>
			  </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Life saving packages</h2>
            <span class="subheading">Price &amp; Plans</span>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <span class="price"><sup>$</sup> <span class="number">49</span></span>
	            <span class="excerpt d-block">Single Session</span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
	              <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
	              <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
	              <li><span class="fa fa-check mr-2"></span>Personal visit</li>
	              <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <span class="price"><sup>$</sup> <span class="number">79</span></span>
	            <span class="excerpt d-block">Personal Session</span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
	              <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
	              <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
	              <li><span class="fa fa-check mr-2"></span>Personal visit</li>
	              <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <span class="price"><sup>$</sup> <span class="number">109</span></span>
	            <span class="excerpt d-block">Single Coaching</span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
	              <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
	              <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
	              <li><span class="fa fa-check mr-2"></span>Personal visit</li>
	              <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <span class="price"><sup>$</sup> <span class="number">149</span></span>
	            <span class="excerpt d-block">Life Coaching</span>
	            
	            <ul class="pricing-text mb-5">
	              <li><span class="fa fa-check mr-2"></span>1 month dedicated training</li>
	              <li><span class="fa fa-check mr-2"></span>24/7 in touch on the phone</li>
	              <li><span class="fa fa-check mr-2"></span>Consultation hours</li>
	              <li><span class="fa fa-check mr-2"></span>Personal visit</li>
	              <li><span class="fa fa-check mr-2"></span>meet &amp; greet</li>
	            </ul>

	            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <footer class="footer">
			<div class="container-fluid px-lg-5">
				<div class="row">
					<div class="col-md-9 py-5">
						<div class="row">
							<div class="col-md-4 mb-md-0 mb-4">
								<h2 class="footer-heading">About us</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								<ul class="ftco-footer-social p-0">
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>
		            </ul>
							</div>
							<div class="col-md-8">
								<div class="row justify-content-center">
									<div class="col-md-12 col-lg-10">
										<div class="row">
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Courses</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Painting</a></li>
						              <li><a href="#" class="py-1 d-block">Sketch</a></li>
						              <li><a href="#" class="py-1 d-block">Drawing</a></li>
						              <li><a href="#" class="py-1 d-block">Sculpture</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Topics</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Accreditation</a></li>
						              <li><a href="#" class="py-1 d-block">Disclosure</a></li>
						              <li><a href="#" class="py-1 d-block">Student Code</a></li>
						              <li><a href="#" class="py-1 d-block">Job Opportunities</a></li>
						            </ul>
											</div>
											<div class="col-md-4 mb-md-0 mb-4">
												<h2 class="footer-heading">Resources</h2>
												<ul class="list-unstyled">
						              <li><a href="#" class="py-1 d-block">Security</a></li>
						              <li><a href="#" class="py-1 d-block">Global</a></li>
						              <li><a href="#" class="py-1 d-block">Charts</a></li>
						              <li><a href="#" class="py-1 d-block">Privacy</a></li>
						            </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-md-5">
							<div class="col-md-12">
								<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
						<h2 class="footer-heading">Free consultation</h2>
						<form action="#" class="form-consultation">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
              	<button type="submit" class="form-control submit px-3">Send A Message</button>
              </div>
            </form>
					</div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>