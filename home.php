<?php
include_once("./template/header.php");
?>
<style>
	.carousel-indicators {
		bottom: 0px !important;
	}
</style>
<section id="banner">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="./img/slides/2.jpg" class = "img-responsive" width = "100%" alt="Los Angeles">
			</div>

			<div class="item">
				<img src="./img/slides/2.jpg" alt="Los Angeles">
			</div>

			<div class="item">
				<img src="./img/slides/2.jpg" alt="Los Angeles">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<i clalspan class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

</section>





<?php
include_once("./template/footer.php");
?>