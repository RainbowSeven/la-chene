@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Find <span>a job</span></h1>
								<div class="breadcrumbs main-bg fx" data-animate="fadeInUp">
									<span class="bold">You Are In:</span><a href="{{ url('index') }}">Home</a><span class="line-separate">/</span><a href="team.html">Our Team </a><span class="line-separate">/</span><span>Find a job</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="cell-9">
							<div class="row">
								<div class="block fx" data-animate="fadeInLeft">
									<h3 class="block-head">We are Hiring</h3>
									<p>In provision of Human Capital Solutions, Chêne Networks E-recruitment Service has adopted the use of technology as an enabler in providing Human Capital support services. We have distinguished ourselves in creative application of web based technologies in transforming HR processes. E-recruitment service has become a service provider of choice to blue chip multinationals.<p>Our e-Recruitment support services also involve the deployment of e-recruitment portals that handle announcements, applications, screenings and invitations.</p>Our Career web portal is deployed in the following areas:
									<ul class="list prim list-ok">
											<li>To advertise vacancies - on your organization's website</li>
											<li>To simplify and standardize the application process using online application forms</li>
											<li>To select candidates using online testing, filtering and ranking</li>
											<li>To enhance employer brand and create a better image for the organization</li>
											<li>To set up a talent pool for ongoing reference</li>
											
										</ul>
								
								</div>
							</div>
						</div>
						<div class="cell-1"><br></div>
						<div class="cell-3 fx" data-animate="fadeInUp">
							<img alt="" src="images/hire.png">
						</div>
					</div>
				</div>
				
				
				
				<div class="container">
						<div class="cell-12">
							<div class="row">
								<div class="block fx" data-animate="fadeInLeft">
									<h3 class="block-head">Database Recruitment</h3>
									<p>This service is becoming increasingly popular for its cost effectiveness. It involves deploying and searching a web portal with pre-determined parameters for interested candidates that have applied for advertised or broadcasted vacancies. The database of candidates that suit the vacancy is screened through to get best fit.
										<h3 class="block-head">Pre Employment Testing</h3>
										<p>Chêne Networks' E-recruitment service offers clients, a variety of tests that can be deployed in assessing a candidate's cognitive ability. Our tests range from general aptitude tests to function specific assessments that test discipline related knowledge. E-recruitment tests are deployed as computer based tests, a marked departure from paper and pencil tests. In rendering this service, Chêne Networks is responsible for the provision of an Examination Engine which handles candidate scheduling, candidate notification, test administration including authoring of questions, marking and release of results and finger-print and photo capture of the candidates. Our responsibility extends to the provision of examination centres, invigilation at the centres and the submission of a summary report at the end of the exercise.
										<h3 class="block-head">E-Interview</h3>
									<p>Chêne Networks' E-recruitment Service has implemented a technology based solution to manage the interviewing stage of the recruitment process. This online application enables organisations with a detailed input of parameters to assess, score layout for one interviewer or a panel and a central reviewing window to view all comments and scores. This platform can be accessed from any part of the world at anytime.

								</div>
							</div>
						</div>
				
.
				
				<div class="sectionWrapper img-pattern">
		    		<div class="container">
		    			<div class="row">
		    				<div class="cell-6 fx" data-animate="fadeInLeft">
								<h3 class="block-head">Job Opportunities</h3>
								<ul id="accordion" class="accordion">
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Senior Software developer</span></a></h3>
										<div class="accordion-panel active">
											L.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Junior Software developer</span></a></h3>
										<div class="accordion-panel">
											
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">UX Team Leader</span></a></h3>
										<div class="accordion-panel">
											 L.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Project manager (more than 7 years experience)</span></a></h3>
										<div class="accordion-panel">
											 P.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Senior SharePoint developer</span></a></h3>
										<div class="accordion-panel">
											 P.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">System Analyst (more than 4 years experience)</span></a></h3>
										<div class="accordion-panel">
											 L
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Senior Sales Engineer</span></a></h3>
										<div class="accordion-panel">
											 P.
										</div>
									</li>
									<li>
										<h3 class="skew-25"><a href="#"><span class="skew25">Senior Accountant (more than 4 years experience)</span></a></h3>
										<div class="accordion-panel">
											 P
										</div>
									</li>
								</ul>
					    	</div>
					    	<div class="cell-6 fx" data-animate="fadeInRight">
					    		<h3 class="block-head">Apply For A Job</h3>
					    		<div class="contact-form">
					    			{{ Form::open(['method'=>'POST','id'=>'hire_form','files'=>true]) }}
					    				<div class="form-input">
				    						<label>Full name<span class="red">*</span></label>
				    						<input type="text" name="fullname" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Email<span class="red">*</span></label>
				    						<input type="text" name="email" required>
				    					</div>
				    					<div class="form-input">
				    						<label>Position<span class="red">*</span></label>
				    						<select name="position" required>
				    							<option value="">select Position you are applying for</option>
				    							<option value="Senior Software developer">Senior Software developer</option>
				    							<option value="Junior Software developer">Junior Software developer</option>
				    							<option value="UX Team Leader">UX Team Leader</option>
				    							<option value="Project manager">Project manager </option>
				    							<option value="Senior SharePoint developer">Senior SharePoint developer</option>
				    							<option value="System Analyst">System Analyst</option>
				    							<option value="Senior Sales Engineer">Senior Sales Engineer</option>
				    							<option value="Senior Accountant">Senior Accountant</option>
				    						</select>
				    					</div>
				    					<div class="form-input">
				    						<label>Message<span class="red">*</span></label>
				    						<textarea name="message" required></textarea>
				    					</div>
				    					<div class="form-input">
				    						<label>For more details upload your CV (doc, docx, pdf; limit = 2 MB)</label>
				    						<input name="cv" type="file">
				    					</div>
				    					<div>
				    						<input type="submit" class="btn btn-large main-bg" value="Submit">
				    					</div>
				    				{{ Form::close() }}
					    		</div>
					    	</div>
		    			</div>
		    		</div>
		    	</div>
	    	
			</div>
			<!-- Content End -->
@stop