<!DOCTYPE html>
<html>
<head>
  
    <title>workshop</title>
<?php require_once('head.php');?>   
   <style>
	   /* Position text in the middle */
.middle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color:white;

}

/* Style the <hr> element */
hr {
    margin: auto;
    width: 40%;
}

	   </style>
	   
</head>
<body onload="myText()"   onload="setInterval(myText, 1000)">
<?php require_once('partical.php');?>
<?php require_once('menu.php');?>
<?php require_once('logo.php');?>



    <!-- <div class="container-fluid" padding="30%">
    <div class="c--anim-btn" style="color:white;background-color:transparent;">
	<h1>	<span class="c-anim-btn">
			Coming soon
		</span>
		<span>
			Stay tuned
		</span></h1>
	</div>
      </div> -->
	   <div class="container" >
	   <div class="middle">
            <span id="demo1"></span>
            <h1>COMMING SOON</h1>
            
            <hr>
            
            <p id="demo" style="font-size:30px"></p>
            <br>
             
          </div>

<script>

var i = 0;
var txt = 'Stay Tuned!'; /* The text */
var speed = 100; /* The speed/duration of the effect in milliseconds */

function myText() {
  if (i < txt.length) {
    document.getElementById("demo1").innerHTML += txt.charAt(i);
    i++;
    setTimeout(myText, speed);
  }
}

</script>

   
   <script>
        // Set the date we're counting down to
        var countDownDate = new Date("oct 27, 2018 15:37:25").getTime();
        
        // Update the count down every 1 second
        var countdownfunction = setInterval(function() {
        
            // Get todays date and time
            var now = new Date().getTime();
            
            // Find the distance between now an the count down date
            var distance = countDownDate - now;
            
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";
            
            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(countdownfunction);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
        </script>
        

   </div>

      <?php require_once('footer.php');?>
     
</body>
</html>