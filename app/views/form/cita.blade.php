@extends('master')
@section('content')			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Be a <span>Student</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ url('index') }}">Home</a><span class="line-separate">/</span><a href="#">Academy </a><span class="line-separate">/</span><span>Registration</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="row">
							<div class="cell-7 contact-form fx" data-animate="fadeInLeft">
			    				<h3 class="block-head">Registration Form</h3>
			    				{{ Form::open(['files'=>true, 'id'=>'reg_form']) }}
								
								<div class="form-input">
								<label>Program<span class="red">*</span></label>
			    						<select name="programme" required class="small-select">
											<option selected="" value="">...Select Programme</option>  
											<option value="Web Technology">Web Technology</option>  
											<option value="Computer Engineering">Computer Engineering</option>
											<option value="Web Design">Web Design</option>
											<option value="Interactive Graphics">Interactive Graphics</option>
											<option value="Wordpress">WordPress</option>	    				
											<option value="Internet Marketing">Internet Marketing</option>
											<option value="Desktop Publishing">Desktop Publishing</option>
											<option value="Excel Training">Excel Training</option>
											<option value="Advanced Microsoft Excel">Advanced Microsoft Excel</option>											
											<option value="Office Training">Office Training</option>
											<option value="ERP Training">ERP Training</option>
											<option value="CCNA Training">CCNA Training</option>  
											<option value="N+">N+</option>
										</select>
											 
										<select id="period" required class="small-select">
											<option value="-1">...Select Periods</option>
											<option value="Full Time">Full Time</option>
											<option value="Part Time">Part Time</option>
											<option value="Weekends">Weekends</option>
											<option value="Sandwich">Sandwich</option>
											<option value="SOHO">SOHO</option>
										</select>
											 
										<select name="certificate" required class="small-select">
											<option value="-1">...Select Certificates</option>
											<option value="Diploma">Diploma</option>
											<option value="Certificate">Certificate</option>
											<option value="Training">Training</option>
											
										</select>
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
			    						<input name="phone" type="text" required>
			    					</div>
			    					
			    					<div class="form-input">
			    						<label>Location<span class="red">*</span></label>
			    						<input class="input-large" name="location" id="location" type="text" placeholder="Specify the state you're located at"/>
			    					</div>
			    											
				    					<div class="form-input">
				    						<label>Upload your Passport Picture(100Kb Max. jpg only)<span class="red">*</span></label>
				    						<input name="passport" type="file">
				    					</div>
				    														
			    					<div class="form-input">
			    						<label>Previous Skills and Training</label>
			    						<div class="form-box">
																
											<div>
												<input type="checkbox" name="skills" value="Design" /> <span>Design</span>
												<input type="checkbox" name="skills" value="Computer Appreciation" /> <span>Computer Appreciation</span>
												<input type="checkbox" name="skills" value="Analysis" /> <span>Analysis</span>
												<input type="checkbox" name="skills" value="Engineering"> <span>Engineering</span>
												<input type="checkbox" name="skills" value="Internet" /> <span>Internet</span>
												
											</div>
											<div>
												<input type="checkbox" name="skills" value="Sharepoint" /> <span>Sharepoint</span>
												<input type="checkbox" name="skills" value="Software" /> <span>Software</span>
												<input type="checkbox" name="skills" value="SEO Management" /> <span>SEO Management</span>
												<input type="checkbox" name="skills" value="Sales" /> <span>Sales</span>
											</div>
										<div>												
									</div>
			    				</div>
			    			</div>
			    					<div class="form-input">
			    						<input type="submit" class="btn btn-large main-bg" value="Submit">&nbsp;&nbsp;<input type="reset" class="btn btn-large" value="Reset">
			    					</div>
			    				</form>
			    			</div>
			    			
				    		<div class="cell-5 fx padd-top-35" data-animate="fadeInRight">
				    			<div class="notices">
									<div class="box warning-box fx" data-animate="fadeInRight">
										<h3>You need to know:</h3>
										<p>Computer training at Chêne Information Technology Academy is designed to teach computer skills to young and adult learners. It is composed primarily of certificate and diploma programs; six-hours, one-subject classes.<p>Certificate programs consist of multiple courses aimed at providing proficiency in the subject area.</p></p>Single application classes provide intensive, corporate- style training aimed at introducing selected topics to participants.</p></p>

									</div>
									
								</div>
				    			<ul id="accordion" class="accordion">
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Can I change my profile ?</span></a></h3>
										<div class="accordion-panel">
											You can change your details when you have been duly registered as a Student of our Academy then you will been enabled to edit your details on the E-Class. this should be done with the consent of your Class Instructor.
										</div>
									</li>
									
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">What payment methods can I use ?</span></a></h3>
										<div class="accordion-panel">
											 Payment can be made to our designated bank either by Internet Banking or bank deposit after we have confirmed your readiness for the selected Program. You will receive the payment details through text message and your email.
										</div>
									</li>
									
									
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">What are the Academy policies?</span></a></h3>
										<div class="accordion-panel">
											 <div class="fx" data-animate="fadeInLeft">
									<ul class="list prim list-ok">
										<li class="fx" data-animate="fadeInLeft">All course fees do not include personal computer, storage medium (USB drives etc) that students may require for backup and archiving of their work during the course. </li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="100">All course curriculum materials remain the property of CITA until all course fees have been paid in full.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="100">This is a fee for service course. No fees will be refunded once the course has commenced.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="200">This is a fee for service course. No fees will be refunded once the course has commenced.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="200">On commencement of the course all fees become payable. No waiver or refund of fees will be made in the event of withdrawal from the course except in the case of serious illness and then only on the production of a medical practitioner’s certificate.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="300">CITA reserves the right to cancel or defer a course prior to commencement should insufficient number of enrolled students be recorded.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="300">CITA reserves the right to cancel or defer a course prior to commencement should insufficient number of enrolled students be recorded.</li>
										
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="400">Should CITA cease delivery of the course for any unforeseen reason prior to completion, fees for training not delivered will be refunded to participants in full.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="400"> CITA does not take any responsibility for loss or damage of personal property left on the premises.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="500"> At the time of enrolment, students are required to bring to the attention of the staff, any disability or condition which may affect or inhibit their ability to satisfactorily complete the course.</li>
										
										<li class="fx" data-animate="fadeInLeft" data-animation-delay="500"> Upon acceptance of this enrolment a binding agreement exists between CITA and the student or parent/guardian, the terms of which apply to this and any subsequent course.</li>
										
									</ul>
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