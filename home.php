<?php
include_once("./template/header.php");
?>
<style>
	.carousel-indicators {
		bottom: 0px !important;
	}
</style>


<section id="carrouselx">
	<div class="container-fluid">
		<div class="row">
			<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
				<!-- Overlay -->
				<div class="overlay"></div>

				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
					<li data-target="#bs-carousel" data-slide-to="1"></li>
					<li data-target="#bs-carousel" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item slides active">
						<div class="slide-1"></div>
						<div class="hero">
							<hgroup>
								<h1>Dynamics 365</h1>
								<h3>Acelere o crescimento dos negócios com o Dynamics 365, a próxima geração de aplicativos de CRM e ERP.</h3>
							</hgroup>
							<button class="btn btn-hero btn-lg" role="button">COMEÇAR AGORA</button>
						</div>
					</div>
					<div class="item slides">
						<div class="slide-2"></div>
						<div class="hero">
							<hgroup>
								<h1>Expanda rapidamente</h1>
								<h3>Redefina sua gestão financeira global tradicional, automatize processos para aumentar a eficiência e diminua as despesas operacionais e as complexidades financeiras.</h3>
							</hgroup>
							<button class="btn btn-hero btn-lg" role="button">Saiba mais</button>
						</div>
					</div>
					<div class="item slides">
						<div class="slide-3"></div>
						<div class="hero">
							<hgroup>
								<h1>Fale conosco</h1>
								<h3>Entre em contato com a equipe de vendas.</h3>
							</hgroup>
							<button class="btn btn-hero btn-lg" role="button">Fale Conosco</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<br />
</section>

<section id="cards">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="row">
					<div class="col-md-9">
						<h3>
							Carousel Product Cart Slider</h3>
					</div>
					<div class="col-md-3">
						<!-- Controls -->
						<div class="controls pull-right hidden-xs">
							<a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic" data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic" data-slide="next"></a>
						</div>
					</div>
				</div>
				<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row">
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Sample Product</h5>
													<h5 class="price-text-color">
														$199.99</h5>
												</div>
											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Product Example</h5>
													<h5 class="price-text-color">
														$249.99</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
												</div>
											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Next Sample Product</h5>
													<h5 class="price-text-color">
														$149.99</h5>
												</div>
											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Product with Variants</h5>
													<h5 class="price-text-color">
														$199.99</h5>
												</div>
											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Grouped Product</h5>
													<h5 class="price-text-color">
														$249.99</h5>
												</div>

											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="col-item">
										<div class="photo">
											<img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>
														Product with Variants</h5>
													<h5 class="price-text-color">
														$149.99</h5>
												</div>
											</div>
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
											</div>
											<div class="clearfix">
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


<?php
include_once("./template/footer.php");
?>