<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Optima 2k18</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
      <link rel="stylesheet" href="css/estyle.css">
      <link rel="stylesheet" href="css/emodelcss.css">
			<link rel="stylesheet" media="screen" href="css/astyle.css">

	      <link rel="stylesheet" media="screen" href="css/menu.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>














<body>

<?php require_once('partical.php');?>
<?php require_once('menu.php');?>
<?php require_once('logo.php');?>

  
  

		


  <main class="grid-container" >
	


  <!-- Starating of first card code -->
    <div class="grid-item">
		<div class="wrapper">
			<div class="card-container">
				<div class="flip-animation">
					<!--Front of the card-->
					<section class="item-card">
						<div class="item-summary">
							<h2 class="title">Web Design</h2>
							<p class="venue">Ideas as infinite as space </p>
							<address class="address">
								<p class="street-address"></p>
								<p class="locality"></p>
							</address>
						</div>
						<div class="image-wrapper">
							<img class="featured-image" src="images\wd.jpg" alt="The Paper Kites performing, overlooking a crowd" />
						</div>
						<div class="item-time-date">
							<time class="date" datetime="2018-10-16">July 16, 2018</time>
							<time class="time" datetime="19:00">7:00 PM</time>
						</div>
						<div class="item-buttons front-buttons">
							<button class="btn-details grey" aria-label="Learn more about the band and venue"> Details</button>
							<!-- <a class="btn-tickets blue" aria-label="Purchase tickets for this event"  href="#">Register</a> -->
						</div>
					</section>
					<!--Back of the card-->
					<section class="item-card-details">
						<div class="bio-block">
							<h2 class="bio-band">Web Design</h2>
							<h3 class="bio-title">About Events</h3>
						</div>
						<div class="scroll-block">
							<p class="bio-text">
                                    Design doesn't mean that every person gonna like, love it .
                                    but that's the creativity of those eye which creates something different.
							</p>
						</div>
						<div class="more-info">
						<p>
							<!-- <a class="info" aria-label="Visit The Paper Kites website" href="#">Ditikrushna Giri</a> -->
                            <button class="Button button" data-modal="webModal"><span><a href="PDF\web.pdf" download>Read More..</a></span></button>  

						</p>
					</div>
					<div class="item-buttons back">
						<button class="btn-details grey back-arrow" aria-label="Learn more about the band and venue"></button>
						<!-- <a class="btn-tickets blue on-back" aria-label="Purchase tickets for this event" href="#">Register</a>
					</div> -->
				</section>
			 </div>
			</div>
		</div>
  </div>
  
  <!-- Model box for webdesign -->
<!--   
<div id="webModal" class="modal">

	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Optima Webdesign</h2>
	  </div>
	  <div class="modal-body">
		<p>Some text in the Modal Body</p>
		<p>Some other text...</p>
	  </div>
	  <div class="modal-footer">
		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
	  </div>
	</div>
  
  </div> -->




  <!-- Model box script  -->
  





  <!-- end of one card  code -->




<!-- Debugining events-->
<div class="grid-item">
	<div class="wrapper">
		<div class="card-container">
			<div class="flip-animation">
				<!--Front of the card-->
				<section class="item-card">
					<div class="item-summary">
						<h2 class="title" style="font-size: 22px">Coding and Debugging</h2>
						<p class="venue">Think Different</p>
						<address class="address">
							<p class="street-address"></p>
							<p class="locality"></p>
						</address>
					</div>
					<div class="image-wrapper">
						<img class="featured-image" src="images\d.png" alt="Odesza performing onstage" />
					</div>
					<div class="item-time-date">
						<time class="date" datetime="2018-10-16">Sept 01, 2018</time>
						<time class="time" datetime="19:00">8:20 PM</time>
					</div>
					<div class="item-buttons front-buttons">
						<button class="btn-details grey" aria-label="Learn more about the band and venue" href="#">Details</button>
						<!-- <a class="btn-tickets blue" aria-label="Purchase tickets for this event" href="#">Register</a> -->
					</div>
				</section>
				<!--Back of the card-->
				<section class="item-card-details">
					<div class="bio-block">
						<h2 class="bio-band">Coding and Debugging </h2>
						<h3 class="bio-title">About Event</h3>
					</div>
					<div class="scroll-block">
						<p class="bio-text">This event aims to measure your analytical, technical and programming skills set to
								solve and debug the code and also test your ability to work as a team. The participants who are
								interested in the hunt of coding excellency are heartly welcome.</p>
					</div>
					<div class="more-info">
					<p>
						<button class="Button button" data-modal="debugModal"><span><a href="PDF\debug.pdf" download>Read More..</a></span></button>
					</p>
					<p>
					
					</p>
				</div>
				<div class="item-buttons back">
					<button class="btn-details grey back-arrow" aria-label="Learn more about the band and venue" href="#"></button>
					<!-- <a class="btn-tickets blue on-back" aria-label="Purchase tickets for this event" href="#">Register</a> -->
				</div>
			</section>
		 </div>
		</div>
	</div>
</div>


<!-- endo of debuging card  -->




<!-- // <div id="debugModal" class="modal">


// 	<div class="modal-content">
// 	  <div class="modal-header">
// 		<span class="close">&times;</span>
// 		<h2>Optima Debugging</h2>
// 	  </div>
// 	  <div class="modal-body">
// 		<p>Some text in the Modal Body</p>
// 		<p>Some other text...</p>
// 	  </div>
// 	  <div class="modal-footer">
// 		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
// 	  </div>
// 	</div>
  
//   </div> -->







<div class="grid-item">
	<div class="wrapper">
	<div class="card-container">
		<div class="flip-animation">
			<!--Front of the card-->
			<section class="item-card">
				<div class="item-summary">
					<h2 class="title">Gaming</h2>
					<p class="venue"> Life is short, play more.</p>
					<address class="address">
						<p class="street-address"></p>
						<p class="locality"></p>
					</address>
				</div>
				<div class="image-wrapper">
					<img class="featured-image" 
						 	 src="images\game.png" 
						   alt="ODESZA performing onstage" />
				</div>
				<div class="item-time-date">
					<time class="date" datetime="2018-10-16">Aug 08, 2018</time>
					<time class="time" datetime="19:00">9:00 PM</time>
				</div>
				<div class="item-buttons front-buttons">
					<button class="btn-details grey" 
									aria-label="Learn more about the band and venue" 
									href="#">Details</button>
					<!-- <a class="btn-tickets blue" 
				 		 aria-label="Purchase tickets for this event"
				 		 href="#">Register</a> -->
				</div>
			</section>
			<!--Back of the card-->
			<section class="item-card-details">
				<div class="bio-block">
					<h2 class="bio-band">Gaming</h2>
					<h3 class="bio-title">About Event</h3>
				</div>
				<div class="scroll-block">
					<p class="bio-text">Games give you a chance to excel, and if you're playing in good company you don't 
                        even mind if you lose because you had the enjoyment of the company during the course of the game
				</div>
				<div class="more-info">
				<p>
					<button class="Button button" data-modal="gameModal"><span><a href="#" download>Read More..</a></span></button>
				</p>
				<p>



				</p>
			</div>
			<div class="item-buttons back">
				<button class="btn-details grey back-arrow" 
								aria-label="Learn more about the band and venue" 
								href="#">
				</button>
				<!-- <a class="btn-tickets blue on-back" 
				 	 aria-label="Purchase tickets for this event"
				 	 href="#">Register</a> -->
			</div>
		</section>
	 </div>
	</div>
	</div>
</div>




<!-- Modal Gaming  -->


<!--  
// <div id="gameModal" class="modal">

// 	
// 	<div class="modal-content">
// 	  <div class="modal-header">
// 		<span class="close">&times;</span>
// 		<h2>Optima Gaming</h2>
// 	  </div>
// 	  <div class="modal-body">
// 		<p>Some text in the Modal Body</p>
// 		<p>Some other text...</p>
// 	  </div>
// 	  <div class="modal-footer">
// 		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
// 	  </div>
// 	</div>
  
//   </div>


 -->


<!--End of gaming card coding -->


<div class="grid-item">
	<div class="wrapper">
	<div class="card-container">
		<div class="flip-animation">
			<!--Front of the card-->
			<section class="item-card">
				<div class="item-summary">
					<h2 class="title">Mind Boggler</h2>
					<p class="venue">Imagination at work</p>
					<address class="address">
						<p class="street-address"></p>
						<p class="locality"></p>
					</address>
				</div>
				<div class="image-wrapper">
					<img class="featured-image" 
                src="images\bt.jpg" 
						   alt="ODESZA performing onstage" />
				</div>
				<div class="item-time-date">
					<time class="date" datetime="2018-10-16">Dec 11, 2018</time>
					<time class="time" datetime="19:00">6:00 PM</time>
				</div>
				<div class="item-buttons front-buttons">
					<button class="btn-details grey" 
									aria-label="Learn more about the band and venue" 
									href="#">Details</button>
					<!-- <a class="btn-tickets blue" 
				 		 aria-label="Purchase tickets for this event"
				 		 href="#">Register</a> -->
				</div>
			</section>
			<!--Back of the card-->
			<section class="item-card-details">
				<div class="bio-block">
					<h2 class="bio-band">Mind Boggler</h2>
					<h3 class="bio-title">About Event</h3>
				</div>
				<div class="scroll-block">
					<p class="bio-text">Is your logical thinking smart enough? Then this game is for you! You will be given questions such 
						as puzzles or riddles that test your critical thinking, and checks 
						your ability to connect information to find a solution. Sounds easy? Then why don’t you try doing it with a group of different set of minds. 
					</p>
				</div>
				<div class="more-info">
				<p>

					<button class="Button button" data-modal="brainModal"><span><a href="#" download>Read More..</a></span></button>
				</p>
				<p><a class="info" 
							aria-label="Visit the venue's website" 
							href="#">
				</a></p>
			</div>
			<div class="item-buttons back">
				<button class="btn-details grey back-arrow" 
								aria-label="Learn more about the band and venue" 
								href="#">
				</button>
				<!-- <a class="btn-tickets blue on-back" 
				 	 aria-label="Purchase tickets for this event"
				 	 href="#">Register</a> -->
			</div>
		</section>
	 </div>
	</div>
	</div>
</div>




<!--  
<div id="brainModal" class="modal">

	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Optima Brain Teaser</h2>
	  </div>
	  <div class="modal-body">
		<p>Some text in the Modal Body</p>
		<p>Some other text...</p>
	  </div>
	  <div class="modal-footer">
		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
	  </div>
	</div>
  
  </div> -->




<!--End of brain teaser card code -->



<div class="grid-item">
	<div class="wrapper">
	<div class="card-container">
		<div class="flip-animation">
			<!--Front of the card-->
			<section class="item-card">
				<div class="item-summary">
					<h2 class="title">MEDIAMORA</h2>
					<p class="venue">The wins of change</p>
					<address class="address">
						<p class="street-address"></p>
						<p class="locality"></p>
					</address>
				</div>
				<div class="image-wrapper">
					<img class="featured-image" 
						 	 src="images\m.jpg" 
						   alt="ODESZA performing onstage" />
				</div>
				<div class="item-time-date">
					<time class="date" datetime="2018-10-16">Aug 08, 2018</time>
					<time class="time" datetime="19:00">9:00 PM</time>
				</div>
				<div class="item-buttons front-buttons">
					<button class="btn-details grey" 
									aria-label="Learn more about the band and venue" 
									href="#">Details</button>
					<!-- <a class="btn-tickets blue" 
				 		 aria-label="Purchase tickets for this event"
				 		 href="#">Register</a> -->
				</div>
			</section>
			<!--Back of the card-->
			<section class="item-card-details">
				<div class="bio-block">
					<h2 class="bio-band">MEDIAMORA</h2>
					<h3 class="bio-title">About</h3>
				</div>
				<div class="scroll-block">
					<p class="bio-text">This event is to challenge the participants on their intuitive creativity and ability in
						multimedia streams. 
					</p>
				</div>
				<div class="more-info">
				<p>
					<button class="Button button" data-modal="multimediaModal"><span><a href="PDF\mul.pdf" download>Read More..</a></span></button>
				</p>
				<p><a class="info" 
							aria-label="Visit the venue's website" 
							href="#">
				</a></p>
			</div>
			<div class="item-buttons back">
				<button class="btn-details grey back-arrow" 
								aria-label="Learn more about the band and venue" 
								href="#">
				</button>
				<!-- <a class="btn-tickets blue on-back" 
				 	 aria-label="Purchase tickets for this event"
				 	 href="#">Register</a> -->
			</div>
		</section>
	 </div>
	</div>
	</div>
</div>







<div class="grid-item">
	<div class="wrapper">
	<div class="card-container">
		<div class="flip-animation">
			<!--Front of the card-->
			<section class="item-card">
				<div class="item-summary">
					<h2 class="title">MIME</h2>
					<p class="venue">Mime is not an imitator .</p>
					<address class="address">
						<p class="street-address"></p>
						<p class="locality"></p>
					</address>
				</div>
				<div class="image-wrapper">
					<img class="featured-image" 
						 	 src="images/mime.jpg" 
						   alt="ODESZA performing onstage" />
				</div>
				<div class="item-time-date">
					<time class="date" datetime="2018-10-16">Dec 11, 2018</time>
					<time class="time" datetime="19:00">6:00 PM</time>
				</div>
				<div class="item-buttons front-buttons">
					<button class="btn-details grey" 
									aria-label="Learn more about the band and venue" 
									href="#">Details</button>
					<!-- <a class="btn-tickets blue" 
				 		 aria-label="Purchase tickets for this event"
				 		 href="#">Register</a> -->
				</div>
			</section>
			<!--Back of the card-->
			<section class="item-card-details">
				<div class="bio-block">
					<h2 class="bio-band">MIME</h2>
					<h3 class="bio-title">About Event</h3>
				</div>
				<div class="scroll-block">
					<p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.laoreet, nibh quis tincidunt blandit, urna lorem lobortis odio, quis luctus mauris orci ut nunc. Suspendisse potenti. Nullam rhoncus mi quis mauris blandit malesuada. Vivamus eget lacus sem. Integer metus leo, pellentesque in feugiat vel, ornare ac ante. Sed sit amet tincidunt lacus, at condimentum elit. Vivamus ut erat eu sem luctus bibendum in in purus. Etiam ornare lectus sed erat ornare, quis placerat libero dapibus. Nullam nec quam eget arcu elementum vestibulum.
					</p>
				</div>
				<div class="more-info">
				<p>
					<button class="Button button" data-modal="mimeModal"><span><a href="PDF\mime.pdf" download>Read More..</a></span></button>
				</p>
				<p><a class="info" 
							aria-label="Visit the venue's website" 
							href="#">
				</a></p>
			</div>
			<div class="item-buttons back">
				<button class="btn-details grey back-arrow" 
								aria-label="Learn more about the band and venue" 
								href="#">
				</button>
				<!-- <a class="btn-tickets blue on-back" 
				 	 aria-label="Purchase tickets for this event"
				 	 href="#">Register</a> -->
			</div>
		</section>
	 </div>
	</div>
	</div>
</div>

<!-- MIME Modal Box-->




<!--  
<div id="mimeModal" class="modal">


	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Optima MIME</h2>
	  </div>
	  <div class="modal-body">
		<p>Some text in the Modal Body</p>
		<p>Some other text...</p>
	  </div>
	  <div class="modal-footer">
		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
	  </div>
	</div>
  
  </div> -->






	<div class="grid-item">
	<div class="wrapper">
			<div class="card-container">
				<div class="flip-animation">
					<!--Front of the card-->
					<section class="item-card">
						<div class="item-summary">
							<h2 class="title">Paper presentation</h2>
							<p class="venue">Imagine What You Can Do</p>
							<address class="address">
								<p class="street-address"></p>
								<p class="locality"></p>
							</address>
						</div>
						<div class="image-wrapper">
							<img class="featured-image" src="images\paper.jpg" alt="The Paper Kites performing, overlooking a crowd" />
						</div>
						<div class="item-time-date">
							<time class="date" datetime="2018-10-16">July 16, 2018</time>
							<time class="time" datetime="19:00">7:00 PM</time>
						</div>
						<div class="item-buttons front-buttons">
							<button class="btn-details grey" aria-label="Learn more about the band and venue"> Details</button>
							<!-- <a class="btn-tickets blue" aria-label="Purchase tickets for this event" href="#">Register</a> -->
						</div>
					</section>
					<!--Back of the card-->
					<section class="item-card-details">
						<div class="bio-block">
							<h2 class="bio-band">Paper Presentation</h2>
							<h3 class="bio-title">About Event</h3>
						</div>
						<div class="scroll-block">
							<p class="bio-text">Paperpresentation is a great opportunity to expose your
									talent and in depth knowledge on your research
									areas.Present your innovative ideas and weare ready to
									appreciate it.We provide you a platform to present your
									thoughts that woulden lighten people and also that
									would create agreat development in technology.Just
									createa presentation of your idea and present it.
									
							</p>
						</div>
						<div class="more-info">
						<p>
							<button class="Button button" data-modal="paperModal"><span><a href="PDF\pp.pdf" download>Read More..</a></span></button>
						</p>
						<!-- <p>
							<a class="info" aria-label="Visit the venue's website" href="#"></a>
						</p> -->
					</div>
					<div class="item-buttons back">
						<button class="btn-details grey back-arrow" aria-label="Learn more about the band and venue" href="#"></button>
						<!-- <a class="btn-tickets blue on-back" aria-label="Purchase tickets for this event" href="#">Register</a> -->
					</div>
				</section>
			 </div>
			</div>
		</div>
</div>




<!-- paper Presentation Modal Box -->







<!-- marketing events-->
<div class="grid-item">
	<div class="wrapper">
		<div class="card-container">
			<div class="flip-animation">
				<!--Front of the card-->
				<section class="item-card">
					<div class="item-summary">
						<h2 class="title">Marketing</h2>
						<p class="venue">You are in good hands</p>
						<address class="address">
							<p class="street-address"></p>
							<p class="locality"></p>
						</address>
					</div>
					<div class="image-wrapper">
						<img class="featured-image" src="images\mark.jpg" alt="Odesza performing onstage" />
					</div>
					<div class="item-time-date">
						<time class="date" datetime="2018-10-16">Sept 01, 2018</time>
						<time class="time" datetime="19:00">8:20 PM</time>
					</div>
					<div class="item-buttons front-buttons">
						<button class="btn-details grey" aria-label="Learn more about the band and venue" href="#">Details</button>
						<!-- <a class="btn-tickets blue" aria-label="Purchase tickets for this event" href="#">Register</a> -->
					</div>
				</section>
				<!--Back of the card-->
				<section class="item-card-details">
					<div class="bio-block">
						<h2 class="bio-band">Marketing</h2>
						<h3 class="bio-title">About Event</h3>
					</div>
					<div class="scroll-block">
						<p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 	Aenean venenatis ex non risus vulputate semper. Sed laoreet, nibh quis tincidunt blandit, urna lorem lobortis odio, quis luctus mauris orci ut nunc. Suspendisse potenti. Nullam rhoncus mi quis mauris blandit malesuada. Vivamus eget lacus sem. Integer metus leo, pellentesque in feugiat vel, ornare ac ante. Sed sit amet tincidunt lacus, at condimentum elit. Vivamus ut erat eu sem luctus bibendum in in purus. Etiam ornare lectus sed erat ornare, quis placerat libero dapibus. Nullam nec quam eget arcu elementum vestibulum.
						</p>
					</div>
					<div class="more-info">
					<p>
						<button class="Button button" data-modal="marketModal"><span><a href="PDF\mark.pdf" download>Read More..</a></span></button>
					</p>
					<p>
						<a class="info" aria-label="Visit the venue's website" href="#"></a>
					</p>
				</div>
				<div class="item-buttons back">
					<button class="btn-details grey back-arrow" aria-label="Learn more about the band and venue" href="#"></button>
					<!-- <a class="btn-tickets blue on-back" aria-label="Purchase tickets for this event" href="#">Register</a> -->
				</div>
			</section>
		 </div>
		</div>
	</div>
</div>

<!-- Marketing Modal Box -->


<!-- 
 
<div id="marketModal" class="modal">

	
	<div class="modal-content">
	  <div class="modal-header">
		<span class="close">&times;</span>
		<h2>Optima Marketing</h2>
	  </div>
	  <div class="modal-body">
		<p>Some text in the Modal Body</p>
		<p>Some other text...</p>
	  </div>
	  <div class="modal-footer">
		<h3>Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</h3>
	  </div>
	</div>
  
  </div>
 -->





</main>


</div>



  <!-- Model box script  -->
  <script>
	// Get the modal
	
// var modalBtns = [...document.querySelectorAll(".Button")];
// modalBtns.forEach(function(btn){
//   btn.onclick = function() {
//     var modal = btn.getAttribute('data-modal');
//     document.getElementById(modal).style.display = "block";
//   }
// });

// var closeBtns = [...document.querySelectorAll(".close")];
// closeBtns.forEach(function(btn){
//   btn.onclick = function() {
//     var modal = btn.closest('.modal');
//     modal.style.display = "none";
//   }
// });

// window.onclick = function(event) {
//   if (event.target.className === "modal") {
//     event.target.style.display = "none";
//   }
// }
	
	
	</script>







  


	<script  src="js/eindex.js"></script>
	<div class="footer1"  style = "position: relative;" >
            <div class="flex-center">
                <i class="fa fa-twitter fa-2x icon-3d"></i>
                <i class="fa fa-facebook fa-2x icon-3d"></i>
                <i class="fa fa-instagram fa-2x icon-3d"></i>
                <i class="fa fa-envelope fa-2x icon-3d"></i>
            </div>
            <p align = "center" style = "color : #fff;">Made with ❤️ by &#960 club. 	&copy; MSC. Department of Computer Applications 2018.</p>
</div>    
</body>

</html>
