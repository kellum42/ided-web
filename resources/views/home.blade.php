@extends( 'page' )

@section( 'external-css' )
	<link rel="stylesheet" href="css/typewriter.css" />
@endsection

@section( 'content' )
	<div class="bkg parallax" style="position:relative;background-image: url('imgs/Large_FINAL_62Z2221.JPG')">
		<div class="grid-container">
			<div class="grid-x" style="padding: 100px 0px;min-height: 90vh">
				<div class="text-center small-12 cell" style="padding: 0px 20px">
						<h1 id="typewriter"></h1>
				</div>
			</div>
		</div>
		
		<div style="position:absolute;bottom: 30px;left:0;right:0" class="text-center">
			<a style="color:white" href="#about"><span style="display:inline-block;animation:upDown 2s linear 0s infinite;"><i class="fas fa-angle-up fa-5x"></i></span><br>scroll up</a>
		</div>
	</div>
		
	<div id="about" class="section bkg" style="color:#ffffff;background-image: url('imgs/blue-gradient-rect.jpg')">
		<div class="grid-container">
			<div class="grid-x countup-container" style="margin: 25px 0px">
				<div class="text-center small-12 cell" style="margin-bottom: 80px">
					<div class="grid-x">
						<div class="text-left small-12 medium-1 cell"><i style="color:#1B8986" class="fas fa-quote-left fa-3x"></i></div>
						<div class="small-12 medium-10 cell"><h2 style="color: #ffffff">a home for entrepreneurs & innovative businesses to connect & collaborate in a community space</h2></div>
						<div class="text-right small-12 medium-1 cell"><i style="color:#1B8986" class="fas fa-quote-right fa-3x"></i></div>
					</div>
				</div>
				
				<div class="small-6 medium-3 text-center cell">
					<h1 data-n=5 class="countup" style="font-size: 4rem;font-weight: bold"></h1>
					<p>jobs in 2019</p>
				</div>
				
				<div class="small-6 medium-3 text-center cell">
					<h1 data-n=4 class="countup" style="font-size: 4rem;font-weight: bold"></h1>
					<p>businesses in 2019</p>
				</div> 
				
				<div class="small-6 medium-3 text-center cell">
					<h1 data-n=14 class="countup" style="font-size: 4rem;font-weight: bold"></h1>
					<p>jobs in 2019</p>
				</div>
				
				<div class="small-6 medium-3 text-center cell">
					<h1 data-n=341 class="countup" style="font-size: 4rem;font-weight: bold"></h1>
					<p>jobs in 2019</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section" id="home-what-we-do">
		<h2 class="text-center">What We Do</h2>
	
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/ided-marketplace-logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>Marketplace</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/ided-incubator-logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>Incubator</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/ided-coworking-logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>Co-Working Space</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/ided-studios-logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>ID Studios</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>ID Navigator</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				
				<div class="small-text-center small-12 medium-6 large-4 cell item">
					<div class="grid-x small-margin-center" style="max-width: 400px">
						<div style="margin-bottom: 10px" class="text-center small-12 medium-4 cell">
							<div class="text-center" style="padding:0px 10px"><img style="max-width: 100px" src="imgs/logo.svg" /></div>
						</div>
						<div class="small-12 medium-8 cell">
							<h5><strong>Events</strong></h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
			</div>
			
			<br><br><br><br>
			<div class="grid-x">
				<div class="small-12">
					<div>
						<h2 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2>
						<br>
						<p>Amet commodo nulla facilisi nullam vehicula ipsum a arcu. Posuere morbi leo urna molestie at elementum eu. Nisi scelerisque eu ultrices vitae auctor eu augue ut. Phasellus vestibulum lorem sed risus ultricies tristique nulla. Quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Arcu non sodales neque sodales ut etiam sit amet. Nisl tincidunt eget nullam non. Facilisis volutpat est velit egestas. Et magnis dis parturient montes nascetur ridiculus. Cum sociis natoque penatibus et magnis. Mi quis hendrerit dolor magna eget est lorem ipsum. Lorem ipsum dolor sit amet consectetur adipiscing.</p>
					</div>
				</div>
			</div>
			<br><br><br>
		
		</div>
	</div>
	
@endsection

@section( 'javascript' )
	@parent
	<script src="js/countup.min.js"></script>
	<script src="js/zenscroll.min.js"></script>
	
	<script>
		
		function checkVisible(el) {
			var rect = el.getBoundingClientRect();
			var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
			return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
		}
			
		function doCountup(){
			const div = document.querySelector(".countup-container");
			
			if (checkVisible(div)) {
				var el = document.getElementsByClassName("countup");
				for (let i=0;i<el.length;i++) {
					countups.push(new CountUp(el[i], 0, el[i].dataset.n, 0, 3));
					if (!countups[i].error) {
					    setTimeout(function(){
					    	countups[i].start();    
					    }, 150);
					    
					} else {
					    console.error(countups[i].error);
					}	
				}
				
				window.removeEventListener("scroll", doCountup);
			}
		}
		
		function startTypewriter(items, el, wi, i) {
			var i = i || 0;
			var wi = wi || 0;
			
			if (i > items[wi].length) {
				el.innerHTML = "";
			    wi++;
			    i=0;
			    if (wi >= items.length) {
				    wi = 0;
			    }
			} 
			
			el.innerHTML += items[wi].charAt(i);
			i++;
			
			var delay = i == items[wi].length ? 1300 : 115;
			
			setTimeout(startTypewriter.bind(null, items, el, wi, i), delay);			
		}
		
		var countups = [];
		
		window.addEventListener("scroll", doCountup);
		
		startTypewriter(
			["innovation", "entrepreneur", "cooperation", "collaborate", "community"], 
			document.getElementById("typewriter")
		);
		
		zenscroll.setup(null, -5);
				
	</script>
@endsection