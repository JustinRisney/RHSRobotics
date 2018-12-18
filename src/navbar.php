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
	} 
	</style>
<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #6D8A88" id="OUR-navbar">
	<a class="navbar-brand" href="/">
		<img src="/images/logo.png" height="20px" width="25px" style="filter: grayscale(.0000000000000000000000000000000000000000000000000000000000000000000000000000000001%);"/>
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			
		</span>
	</button>

	<div class="collapse navbar-collapse" id="nav-content">   
		<ul class="navbar-nav">
			<!--<li class="nav-item <?php setnavactive($url, "/about"); ?>">
				<a class="nav-link" href="/Contact">Home</a>
			</li> -->
			<li class="nav-item <?php setnavactive($url, "/about"); ?>">
				<a class="nav-link" href="/news">News</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/donate"); ?>">
				<a class="nav-link" href="/donate/">Donate</a>
			</li>
			<li class="nav-item <?php setnavactive($url, "/about"); ?>">
				<a class="nav-link" href="/photos">Photos</a>
			</li>
		</ul>

	</div>
	
</nav>