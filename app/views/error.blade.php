@extends('master')
@section('content')
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="page-title title-1">
					<div class="container">
						<div class="row">
							<div class="cell-12">
								<h1 class="fx" data-animate="fadeInLeft">{{ $error_title or "Message <span>Not Sent</span>"}}</h1>
							</div>
						</div>
					</div>
				</div>
				
				<div class="sectionWrapper">
					<div class="container">
		    			<div class="not-found">
		    				<p class="hint extraLarge">Oops! {{ $message }}</p>
		    				<hr class="hr-style3">
		    				<div class="err-404">
			    				ER<span class="main-color">RO</span>R		
			    			</div>
			    			<hr class="hr-style3">
			    			<a class="btn btn-medium" href="JavaScript:history.go(-1);">Go Back</a>		
			    		</div>
					</div>
				</div>
				
			</div>
			<!-- Content End -->
@stop