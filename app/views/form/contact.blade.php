@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Our <span>Contact</span> Details</h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ url('index') }}">Home</a><span class="line-separate">/</span><span>Contact Us</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="padd-top-50">
					<div class="container">
						<div class="row">
			    			<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Get in Touch</h3>
								<p class="fx" data-animate="fadeInRight">
									Our Services runs for 24 hours in 7 days. Please do take time to request for quotes, our services or send us your feedbacks by filling the form below. You may also chat with us live when you click the widget below and you will be attended to by a Customer Service agent.
								</p>
								
								{{ Form::open(array('url' => 'contact', 'method'=>'post', 'class'=>'Contact')) }}
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
			    						<label>Phone<span class="red">*</span></label>
			    						<input name="phone" type="text" required>			    						
			    					</div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea name="message" required></textarea>
			    					</div>
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" value="Send">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset">
			    					</div>
			    				{{ Form::close() }}
			    			</div>
							
			    			<div class="cell-5 contact-detalis">
			    				<h3 class="block-head">Our Offices</h3>
			    				
			    				<hr class="hr-style4">
			    				<div class="clearfix"></div>
			    				<div class="padding-vertical">
			    					<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Head Office</h4>
				    					<h5>Address:</h5>
				    					<p>K.M 4, Idi Iroko Road, (Beside Justrite Superstores),Ota, Ogun State, Nigeria.</p>
				    					<h5>Email:</h5>
				    					<p>info@chenenetworks.com</p>
				    					<h5>Phone:</h5>
				    					<p>+2348062417929</p>
				    					<h5 >Day Phone:</h5>
				    					<p>+2348091562770</p>
				    				</div>
				    				<div class="cell-2"><br></div>
				    				<div class="cell-5 fx" data-animate="fadeInRight">
				    					<h4 class="main-color bold">Lagos Office</h4>
				    					<h5>Address:</h5>
				    					<p>4 Akinremi Street, (Shalek Building), Anifowoshe, Ikeja, Lagos, Nigeria</p>
				    					<h5>Email:</h5>
				    					<p>marketing@chenenetworks.com</p>
				    					<h5>Phone:</h5>
				    					<p>+2348076013085</p>
				    					<h5>Day Phone:</h5>
				    					<p>+2348090605075</p>
				    				</div>
									
									
									<!-- footer social links right cell start -->
						    <div class="cell-10">
							    <ul class="social-list right">
								   <li class="skew-25"><a href="http://www.facebook.com/chenenetworks" data-title="Facebook Page" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
								    <li class="skew-25"><a href="http://www.linkedin.com/chenenetworks" data-title="Linkedin Network" data-tooltip="true"><span class="fa fa-linkedin skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="Skype" data-tooltip="true"><span class="fa fa-skype skew25"></span></a></li>
								    <li class="skew-25"><a href="http://www.twitter.com/chenenetworks" data-title="Twitter Handle" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="Our Blogs" data-tooltip="true"><span class="fa fa-rss skew25"></span></a></li>
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
									
			    				</div>
			    			</div>
						</div>
					</div>
				</div>
				
			
				<div class="padd-vertical-45">
			    	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
					<div id="map_canvas" style="height: 400px; width: 100%;">
						<script type="text/javascript"> 
				    		function init_map(){
				    			var myOptions = {zoom:14,center:new google.maps.LatLng(6.667746,3.21114),
				    			mapTypeId: google.maps.MapTypeId.ROADMAP};
				    			var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
					    		var marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(6.667746,3.21114)});
				    			infowindow = new google.maps.InfoWindow({content:"<strong>Ch&#234;ne Networks</strong></br>KM 4, Idi-Iroko Road,</br>Ota, Ogun State, Nigeria.</br>+2348062417929." });
				    			google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
				    			infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
				    	</script>
			    	</div>
				</div>
			<!-- Content End -->
@stop