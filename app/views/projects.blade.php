@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft"><span>Some Executed</span> Projects</h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ url('index') }}">Home</a><span class="line-separate">/</span>Projects<span class="line-separate">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="sectionWrapper">
					<div id="portfolioGallery-filter" class="portfolio-filterable full">
							<div class="container">
								<div class="gry-bg skew-25">
									<span class="skew25 left filter-by">Filter by:</span>
									<ul id="filters">
	                                    <li class="active">
	                                    	<a href="#" class="skew25 filter" data-filter="*">All</a>
	                                    </li>
										<li>
											<a href="#" class="skew25 filter" data-filter="app">Web Design</a>
										</li>
	                                    <li>
	                                    	<a href="#" class="skew25 filter" data-filter="card">Web Development</a>
	                                    </li>
	                                    <li>
	                                    	<a href="#" class="skew25 filter" data-filter="icon">SEO Management</a>
	                                    </li>
	                                </ul>
								</div>
							</div>
							<div class="portfolio-items">
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/1.jpg" class="fx zoom" title="Shopping Cart for blaimall.com">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project blaizmall" src="images/projects/1.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Blaizmall.com</a>
											<span class="project-options">Online Shopping</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="card">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/bizbond.jpg" class="fx zoom" title="We designed Website for Bizbond Global Services">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project bizbond" src="images/projects/bizbond.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Bizbond Nigeria</a>
											<span class="project-options">Website</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="icon">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/3.jpg" class="fx zoom" title="We designed website for Cedaa Yoghurt and their food drinks">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project cedaa" src="images/projects/3.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Cedaa Yoghurt</a>
											<span class="project-options">Website</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/2.png" class="fx zoom" title="We deployed a Perfect Point if Sales Solution to Obasanjo Holdings">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project OHL" src="images/projects/2.png">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Obasanjo Holdings</a>
											<span class="project-options">POS Solutions</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="card">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/oscotech.jpg" class="fx zoom" title="We gave a seamless Learning Management System for Osun State College of Technology">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project oscotech" src="images/projects/oscotech.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">OSCOTECH</a>
											<span class="project-options">Learning Management Sol.</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="icon">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/claudfort.jpg" class="fx zoom" title="We branded and designed all Claudfort Publications e-Books">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project claudfort" src="images/projects/claudfort.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Claudfort Nig. Ltd</a>
											<span class="project-options">Designing of all e-Books</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/bells.jpg" class="fx zoom" title="We deployed Bio-Metics Hotel Management Information Solution">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project bells" src="images/projects/bells.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Bells University</a>
											<span class="project-options">Hostel Management Sol.</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/ofnota.png" class="fx zoom" title="We made the 3D of Obasanjo farms in Ota.">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project ofn" src="images/projects/ofnota.png">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">OFN Ota</a>
											<span class="project-options">Obasanjo Farms's 3D</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/mctobs.jpg" class="fx zoom" title="We designed a simple and detailed website for McTobs Integrated marketing company ">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project mctobs" src="images/projects/mctobs.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">McTobs Group</a>
											<span class="project-options">Website</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/sysintegration.jpg" class="fx zoom" title="We carried out a seamless System integration for Olusegun Obasanjo Presidential Library">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project sysintegration" src="images/projects/sysintegration.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Obasanjo P. Library</a>
											<span class="project-options">System Integration</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/language.jpg" class="fx zoom" title="We deployed Computer aided Language Training Software">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project lang" src="images/projects/language.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">Ota Total Academy</a>
											<span class="project-options">Language Training Software</span>
										</div>
									</div>
								</div>
								<div class="cell-2" data-filter="app">
									<div class="portfolio-item">
										<div class="img-holder">
											<div class="img-over">
												<a href="project-1.html" class="fx link">
													<b class="fa fa-link"></b>
												</a>
												<a href="images/projects/training.jpg" class="fx zoom" title="We do training for corporate bodies">
													<b class="fa fa-search-plus"></b>
												</a>
											</div>
											<img alt="project training" src="images/projects/training.jpg">
										</div>
										<div class="name-holder">
											<a href="#" class="project-name">In House Trainings</a>
											<span class="project-options">Training for Company </span>
										</div>
									</div>
								</div>
							</div>
					</div>
				</div>
				<div class="clearfix"></div>
				</div>

			<!-- Content End -->
@stop
		