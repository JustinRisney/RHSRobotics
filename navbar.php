<?php 
	$url = $_SERVER['REQUEST_URI'];
	
	function setnavactive($base, $testurl){
		if($base == $testurl || $base == $testurl . "/"){
			echo "active";
			//echo 'disabled';
		}
	} 

	function disable($base, $testurl) {
		if($base == $testurl || $base == $testurl . "/")
			echo 'disable';	
	}


?>
<style>
	.dropdown-item{
		font-weight: 300;
	}
	.nav-link{
		font-weight: 300;	
		color: white!important;
        font-family: 'Montserrat', sans-serif;
	} 
	nav {
		padding-top: 8px;
		padding-bottom: 8px;
		padding-left: 16px;
		padding-right: 16px;
		min-height: 60px;
		max-height: 60px;
	}

	.nav-item {
		padding: 25px;
	}
	</style>

<nav class="navbar navbar-expand-sm fixed-top" style="background-color: #0F1D46" id="navbar-main">
    <a class="navbar-brand" href="/">
        <img src="/images/FIRSTRobotics logo.png" height="35px" style="filter: grayscale(.0000000000000000000000000000000000000000000000000000000000000000000000000000000001%);"/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	
	<div class="collapse navbar-collapse" id="nav-content">   
		<ul class="navbar-nav">
			<li class="nav-item " onmouseout="smallen('home');" onmouseover="largen('home');">
				<a class="nav-link" id="home" href="/index.php">Home</a>
			</li>
			<li class="nav-item " onmouseout="smallen('donate');" onmouseover="largen('donate');" id="donate">
				<a class="nav-link " href="/donate/index.php">Donations</a>
			</li>
			<li class="nav-item " onmouseout="smallen('news');" onmouseover="largen('news');" id="news">
				<a class="nav-link " href="/news/index.php">News</a>
			</li>
			<li class="nav-item " onmouseout="smallen('photos');" onmouseover="largen('photos');" id="photos">
				<a class="nav-link " href="/photos/index.php">Photos</a>
			</li>
		</ul>
	</div>
</nav>

<script type="text/javascript">

	function largen (id) {
		document.getElementById(id).style.fontSize = "110%";
	} 
	function smallen (id) {
		document.getElementById(id).style.fontSize = "initial";
	}	

</script>