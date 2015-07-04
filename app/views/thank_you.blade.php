@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">Message <span>Sent</span></h1>		
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
						<div class="center">
							<i class="fa fa-smile-o success-icon"></i>
							<p class="congrats">Congratulations!</p>
							<p class="congratsTxt">Thanks for your Message! We appreciate that you took the time to send us your message.
								<br>
								However, your message has been received into our Database and one of our {{$person }} will attend to it shortly and we will get back to you within 3 hours.</p>
							<div><a href="{{ url('index') }}" class="btn btn-large main-bg">Go to home page</a></div>
						</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->
@stop