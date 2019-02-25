<!DOCTYPE html>
<html>
<head>
	<title>Robotics Team</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/stylesheets/index.css">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Nova+Flat|Raleway|Teko:600|Ubuntu" rel="stylesheet">
</head>
<body>
    
    <?php include 'navbar.php';?>   
    <div class = "container">
        <img class="logo" height="500px" src="images/Copy of Atomic_Automatons_Full_small (1).png">
      <div class="carousel-inner">
        <div class="carousel-item">
          <img class="d-block w-100" src="images/DSC_0117.JPG" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/DSC_0101.JPG" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/DSC_0095.JPG">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/DSC_0099.JPG">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="images/DSC_0094.JPG">
        </div>
        
      </div>
    </div>
    
    <script>
        var slideIndex = 0;
            carousel();
            
            function carousel(){
                var i;
                var x = document.getElementsByClassName("carousel-item");
                
                for(i=0; i<x.length; i++){
                    
                    x[i].style.display="none";
                }
                slideIndex ++;
                if(slideIndex > x.length){
                    slideIndex = 1;
                }
                x[slideIndex-1].style.display="block";
                setTimeout(carousel, 4500);
            }
        
        </script>
    <br>
    <div class="header">
        <h1>TEAM 6644</h1>
        <h2>Rocklin High School's FIRST Robotics team</h2>
    </div>
    <div class="aboutRow">
        <div class="infoBlocks">
            <h3>ABOUT US</h3>
            <p>The Rocklin High School Robotics Team 6644 was created in 2016 to compete in the annual <a href="http://www.firstsac.org/">Sac Regional FIRST competition</a>. As a team we pride ourselves on having one of the best high school machine shops in California. We use this shop to our advantage by creating an emphasis on machining custom parts for our robot. Our team works together in teams of different skillsets, such as design, manufacturing, programming, electrical assembly and mechanical assembly, in order to create a competition ready robot by the end of build season each year.</p>
        </div>
    </div>
    <h3 class="giveUsMoneyPlease">Our team couldn't do what we do without the generous support of our mentors, sponsors, and famalies who donate money, time, and food to keep our team running.</h3>
    <button type="button" class="button" onclick="window.location.href='/donate/index.php'">Donate</button>
    <div class="compRow">
        <div class="infoBlocks">
            <h3>THE COMPETITION</h3>
            <p>During the 6 week long build season our members put in hundreds of hours of hard work and dedication to build the best robot we can. FIRST's mission is to enable young people to be science and technology leaders and innovators. Through competing in FIRST Robotics competitons, members develop deeply rooted engineering and technology skills that prepare students for real world STEM careers.</p>
        </div>
        <div class="infoBlocks">
            <h3>DESTINATION DEEP SPACE</h3>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Mew6G_og-PI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>    
    
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
</html>