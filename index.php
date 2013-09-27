<?php 
///////////////////////////////////////////////////////////////////////////////
//
//  "Llama Libations" 
// 		by Julian Owyong
// 
// 	Zappos Front End Development 
//  	College Intern Application
//
//  Coded with: HTML5, CSS, Twitter Bootstrap, JQuery
// 
// 	Hosted & Deployed w/ Heroku: http://rocky-mountain-4479.herokuapp.com/ 
//	GitHub Address: https://github.com/jowyong/llamalibations
//
//  *Note: I do not own any of the images! 
// 
////////////////////////////////////////////////////////////////////////////////

// PHP tags used for Heroku deployment :P
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Llama Libations: The Official Site of the Church of the Llama Lord</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../docs-assets/js/html5shiv.js"></script>
      <script src="../../docs-assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
    
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Llama Libations</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/sun.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Feeling lonely?</h1>
              <p>The Church of the Llama Lord will cure your llama-loneliness.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Join today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/snowhoofprint.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="darkfont">Ready to take the next steps?</h1>
              <p class="darkfont">We can help you move forward with your life, one hoof at a time.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/mountaintop.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Want to unlock your full potential?</h1>
              <p>The Llama lifestyle will energize your body, heal your spirit, and empower your soul.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"><<</span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right">>></span></a>
    </div><!-- /.carousel -->



    <!-- Llama Testimonials
    ================================================== -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
   		  <p>"I suffer from a rare genetic disorder that gives me poor circulation and used to render me feeling perpetually cold. After praying to the Llama Lord, I was miraculously cured! He has warmed me with his enveloping Llama Love (not to mention all his fur coats)." - Harry Kamel</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
		 <p>"I came here looking for the Church of the Almighty Alpaca. After doing some research I've decided to convert! I now devote myself fully to the Llama Lord and my life is finally fulfilled!" - Nota Jiraf</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <p>"If someone's reading this you have to send help… The only reason I signed up for this CULT was because I thought it was an 'Emperor's New Groove' fan club… now they won't let me leave… I managed to escape and sneak into their server room but… oh god I hear them comi--" - Unknown</p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Llama-lleluia! <span class="text-muted">What is Llama Libations?</span></h2>
          <p class="lead">Welcome to Llama Libations, the official site of the The Church of the Llama Lord. We are a dedicated group of individuals dedicated to spreading our Llama Lord's Loving Liturgy around the world under the guidance of our leader, the Dalai Llama.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/church.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/machupicchu.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">A Rich History. <span class="text-muted">Based on Tradition.</span></h2>
          <p class="lead">Founded in the year 1040 A.D. in the now lost city of Pachu Micchu, the Church of the Llama Lord's belief system has always been grounded in the creed: "Where there are llamas, there is fur. Where there is fur, there is warmth. And where there is warmth, there is peace."</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">A Global Community. <span class="text-muted">Welcome Home.</span></h2>
          <p class="lead">With Churches in 62 countries (and growing!) you will never feel like you're alone ever again. Once you join we will never leave you. We will never abandon you. We will watch over you forever and ever. Llam-amen. </p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/llamagroup.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Holy Hairy Hanimals, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
  </body>
</html>
