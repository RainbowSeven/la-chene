@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Service <span>Request</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ url('/') }}">Home</a><span class="line-separate">/</span><a href="{{ url('services') }}">Services</a><span class="line-separate">/</span><span>Quote Request</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
							<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Quote Request</h3>
			    				{{ Form::open(['method'=>'POST']) }}
								
									<div class="form-input">
			    						<label>Interested Service<span class="red">*</span></label>
			    						<select name="service_category" required>
			    							<option selected="" value="">Please select your preferred service</option>  
											<option value="Customizations and Branding">Customizations and Branding</option>
											<option value="Software Development">Software Development</option>
											<option value="Photo Journalism">Photo Journalism</option>
											<option value="Language Training">Language Training</option>
											<option value="Intellectual Properties Protection">Intellectual Properties Protection</option>
											<option value="Point of Sales Solutions">Point of Sales Solutions</option>
											<option value="System Integration">System Integration</option>
											<option value="Inspiring Website Design">Inspiring Website Design</option>
											<option value="Repairs of Hardware">Repairs of Hardware</option>
											<option value="Supply of Hardware">Supply of Hardware</option>
											<option value="Maintenance of Hardware">Maintenance of Hardware</option>
											<option value="Professional ICT Training">Professional ICT Training</option>
											<option value="E-Commerce Framework">E-Commerce Framework</option>
											<option value="Professional Recruitment">Professional Recruitment</option>
											<option value="Business Planning">Business Planning</option>
											<option value="Business Strategy">Business Strategy</option>
											<option value="Online Payment Integration">Online Payment Integration</option>
											<option value="Others">Others</option>
			    						</select>
			    					</div>
			    					<div class="form-input">
			    						<label>Details of the requested Service<span class="red">*</span></label>
			    						<input name="service_detail" type="text" placeholder="Specify the exact details of your request"required>
			    					</div>
									
									<div class="form-input">
			    						<label>First name<span class="red">*</span></label>
			    						<input name="firstname" type="text" required>
			    					</div>
			    					<div class="form-input">
			    						<label>Last name<span class="red">*</span></label>
			    						<input name="lastname" type="text" required>
			    					</div>
			    					<div class="form-input">
			    						<label>Email<span class="red">*</span></label>
			    						<input name="email" type="email" required>
			    					</div>
																		
									<div class="form-input">
			    						<label>Phone Number<span class="red">*</span></label>
			    						<input id="phone" name="phone" type="text" required>
			    					</div>
			    					
			    					<div class="form-input">
			    						<label>Location<span class="red">*</span></label>
			    						<input id="location" name="location" type="text" placeholder="Specify your location" required>
			    					</div>								
			    					
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" value="Send">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset">
			    					</div>
			    				{{ Form::close() }}	
			    			</div>
			    			
				    		<div class="cell-5 fx padd-top-35" data-animate="fadeInRight">
				    			<div class="notices">
									<div class="box warning-box fx" data-animate="fadeInRight">
										<h3>You need to know:</h3>
										<ul class="list prim list-ok">
										<li class="fx" data-animate="fadeInLeft">Ch&#234;ne Networks will get your businesses connected to the world securely and communicate more effectively using reliable, affordable options that fit your unique needs. </li>
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="200">We will provide you with a customized solution from our Laboratory and our partners that can help you address challenges in private and business environment to helps achieve a better return on investment (ROI).</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="400">We provide true end-to-end Professional IT Solutions, Sales and Marketing, with our excellent Service delivery and customer Solution, well publicized online ordering, quality product and Professional trusting services to our Clients irrespective of geographical locations.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="600">Ch&#234;ne Networks provide high quality services that improve effectiveness and productivity through e-innovative and uniquely designed online presence, web optimization and well thought specific applications (software) that will add to your profitability and brand reputation, Value added customer services and value analysis.</li>
										
									</ul>

									</div>
									
								</div>
				    			<ul id="accordion" class="accordion">
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">How long does it take to receive a response?</span></a></h3>
										<div class="accordion-panel">
											In less than three hours, the quote for the requested service should be sent to your email address and a SMS(Text Message) to remind you for its arrival by our Marketing Team.
										</div>
									</li>
									
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">What payment methods can I use ?</span></a></h3>
										<div class="accordion-panel">
											 Payment can be made to our designated bank either by Internet Banking or bank deposit after we have confirmed your readiness for the selected Services. You will receive the payment details through text message and your email.
										</div>
									</li>
									
									
									
								</div>
	
										</div>
									</li>
									
								</ul>
			    			</div>
		    			
						</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->
@stop 
