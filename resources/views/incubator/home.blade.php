@extends( 'page' )

@section( 'external-css' )
	
@endsection

@section( 'content' )
	<div class="bkg section" style="color:white;background-image:url('imgs/blue-gradient-rect.jpg');padding-bottom:0px">
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 cell text-center">
					<br>
					<img style="width:52px" src="imgs/ided-incubator-logo.svg" />
					<h2 style="display:inline-block;margin-left:10px;font-weight:bold">Incubator</h2>
					<br><br><br>
				</div>
			</div>
			
			<div class="grid-x">
				<div class="small-12 large-6 cell text-center show-for-large" style="padding: 0px 20px;position: relative">
					<img style="max-width: 400px;width: 100%;height:auto;position: absolute;bottom: 0;left: 50%;transform:translateX(-50%)" src="imgs/white-mac-analytics-full.png"/>
				</div>
				<div class="small-12 large-6 cell text-center large-text-left">
					<br class="show-for-large">
					<h3>Jump start you business with the ID Incubator.</h3>
					<h5>Some more descriptive text would go here.</h5>
					<br>
					<a href="#get-started" class="button large" style="background-color: #CC2419">Get Started</a>
					<div></div>
					<br><br>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section">
		<br><br><br>
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 medium-4 cell" style="padding: 0px 10px">
					<div class="text-center"><i style="color: orange" class="fa fa-star fa-3x"></i></div>
					<br>
					<h5 style="font-weight: bold" class="text-center">Responsive Layout</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div class="small-12 medium-4 cell" style="padding: 0px 10px">
					<div class="text-center"><i style="color: orange" class="fa fa-star fa-3x"></i></div>
					<br>
					<h5 style="font-weight: bold" class="text-center">Responsive Layout</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				
				<div class="small-12 medium-4 cell" style="padding: 0px 10px">
					<div class="text-center"><i style="color: orange" class="fa fa-star fa-3x"></i></div>
					<br>
					<h5 style="font-weight: bold" class="text-center">Responsive Layout</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
		<br><br>
	</div>
	
	<div class="grid-container text-center">
		<hr style="border-bottom: 1px solid #e6e6e6;width: 90%;display:inline-block">
	</div>
	
	<div class="section" id="get-started">
		<br>
		<div class="grid-container">
			<div class="grid-x">
				<div class="small-12 text-center">
					<h3>Get Started</h3>
					<br>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>Paired with business advisors.</span>
						</div>
					</div>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>12-24 month program.</span>
						</div>
					</div>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>Access to a computer/laptop.</span>
						</div>
					</div>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>Paired with business advisors.</span>
						</div>
					</div>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>12-24 month program.</span>
						</div>
					</div>
				</div>
				<div class="small-6 medium-4" style="margin-bottom: 10px">
					<div class="grid-x">
						<div class="small-2 cell">
							<i style="color:green" class="fas fa-check fa-2x"></i>
						</div>
						<div class="small-10 cell">
							<span>Access to a computer/laptop.</span>
						</div>
					</div>
				</div>
				
				<div class="small-12 cell text-center">
					<div>
						<br>
						<h1 style="font-size:60px;margin-bottom:0"><sup style="font-size:26px;display:inline-block;margin-right:10px">$</sup>100</h1>
						<p>monthly</p>
					</div>
					<br>
					<a href="#get-started" class="button large" style="background-color: #CC2419">Get Started</a>
				</div>
			</div>
		</div>
	</div>
@endsection

@section( 'javascript' )
	@parent
@endsection