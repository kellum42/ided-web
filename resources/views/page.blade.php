<html>
	<head class="no-js" lang="en">		
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/foundation.min.css" />
<!-- 		<link rel="stylesheet" href="css/fontawesome/css/all.min.css" /> -->
		<link rel="stylesheet" href="css/general-style.css" />
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
		
		<script defer src="css/fontawesome/js/all.min.js"></script>
				
		@yield( 'external-css' )
		@yield( 'internal-css' )
		
		<title>
			@php
				echo isset($title) ? $title." | IDED" : "IDED";
			@endphp
		</title>
	</head>
	
	<body>
		<div onclick="void(0);">
			<div class="ided-page-container">
				@section( 'sidenav' )
					@include( 'sidenav' )
				@show
					
				<div class="ided-content">	
					@section( 'header' )
						@include( 'header' )
					@show
							
					@yield( 'content' )
					
					@section( 'footer' )
						@include( 'footer' )
					@show
				</div>
			</div>
			
			<div id="ided-overlay"></div>
		</div>
		
		@section( 'javascript' )
			<script src="js/polyfills/classlist.js"></script>
			<script src="js/polyfills/closest.js"></script>
			
			<script src="js/jquery.js"></script>
			<script src="js/what-input.js"></script>
			<script src="js/foundation.min.js"></script>
		    
		    <script>
			    function toggleNav(){
				    var nav = document.getElementById("ided-sidenav");
				    var overlay = document.getElementById("ided-overlay");
				    var content = document.querySelector(".ided-content");
					
					if (nav.classList.contains("active")) {
						nav.classList.remove("active");
						overlay.classList.remove("active");
						content.classList.remove("inactive");
					
					} else {
						nav.classList.add("active");
						overlay.classList.add("active");
						content.classList.add("inactive");
					}
			    }
		    </script>
		    
		    <script>
		    		$(document).foundation();

		    		document.body.onclick = function(e){
			    		var nav = document.getElementById("ided-sidenav");
			    		var triggers = ["ided-menu-button", "ided-overlay"];
					if (e.target.closest("#ided-menu-button") || e.target.id === "ided-overlay") {
						toggleNav();
					
					}
				};
		    </script>
		@show
	</body>
</html>