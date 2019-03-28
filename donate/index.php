<!DOCTYPE html>
<html>
<head>
	<title>Donate</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../stylesheets/index.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nova+Flat|Raleway|Teko:600|Ubuntu" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>
	<body>
		<?php include'../navbar.php';?>
		<div class="donations">
            <h1>Donations</h1>
            <h3>Thank you for supporting FRC Team 6644! There are many ways you can contribute to our team:</h3>
            <hr class="type_8">
            <div class="GoFundMe">
                <p class="donateTxt">More than anything, our team needs money donations to help us afford competition fees and materials for the robot itself, such as motors, pnumatics, aluminum,  and new electronics.</p>
                <iframe class='gfm-media-widget' image='1' coinfo='1' width='100%' height='100%' frameborder='0' id='rocklin-high-school-robotics-team'></iframe><script src='//funds.gofundme.com/js/5.0/media-widget.js'></script>
                <script src="/js/egg.js"></script>
                <script src="/js/boner.js" async></script>
            </div>
            <hr class="type_8">
            <p class="donateTxt">We need parent chaperones in order to be in the shop when Mr. Frank is gone</p>
            <button type="button" class="button" onclick="window.location.href='https://www.signupgenius.com/go/60b0e4faaab2fa2fd0-robotics'" target="_blank">Chaperone Sign Up</button>
            <hr class="type_8">
            <p class="donateTxt">Since the program requires long working hours, we ask that parents occasionally donate food to the program to feed 15-20 students</p>
            <button type="button" class="button" onclick="window.location.href='https://www.signupgenius.com/go/60b0e4faaab2fa2fd0-robotics1'">Food Sign Up</button>
        </div>
        
        <script type="text/javascript">
      	let b = new Egg('boner', function(){
			console.log('Boi');
			$("body").boner({
				bSize : 100,
				bSpeed : 30
			});	
		});
      </script>
      
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer>
    <div class="address">
      <p>Rocklin High School</p>
      <p>5301 Victory Ln.</p>
      <p>Rocklin, CA 95765</p>
    </div>
      <p>Contact information: <a href="rocklinhighfrc@gmail.com">
      rocklinhighfrc@gmail.com</a>.</p>
    </footer>
	</body>
    <script>
        AOS.init();
    </script>
</html>