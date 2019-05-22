<div id="ided-sidenav" class="menu">
	<ul class="vertical menu accordion-menu" style="width: 100%" data-accordion-menu data-submenu-toggle="true">
		<div style="margin: 0px 10px 10px 10px;padding-bottom: 10px;border-bottom: 1px #666666 solid">
			<img style="width: 45px" src="imgs/logo.svg" />
		</div>
		
		<div class="social-media-icons text-left" style="margin: 10px 0px 25px 15px">
			<a><i class="fab fa-facebook-f fa-lg"></i></a>
			<a><i class="fab fa-twitter"></i></a>
			<a><i class="fab fa-instagram"></i></a>
			<a><i class="fas fa-envelope"></i></a>
		</div>
		
		<li><a href="#" @php if (isset($page) && $page === 'market') { echo 'style="font-weight:bold"';}@endphp><span>Marketplace</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'coworking-space') { echo 'style="font-weight:bold"';}@endphp><span>Co-Working Space</span></a></li>
		<li><a href="/incubator" @php if (isset($page) && $page === 'incubator') { echo 'style="font-weight:bold"';}@endphp><span>Incubator</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'studio') { echo 'style="font-weight:bold"';}@endphp><span>ID Studio</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'calendar-events') { echo 'style="font-weight:bold"';}@endphp><span>Calendar & Events</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'navigator') { echo 'style="font-weight:bold"';}@endphp><span>ID Navigator</span></a></li>
		<li>
			<a href="#" @php if (isset($page) && $page === 'resources') { echo 'style="font-weight:bold"';}@endphp><span>Resources</span></a>
			<ul class="menu vertical nested">
				<li><a href="#"><span>Employment Opportunities</span></a></li>
        		</ul>
		</li>
		<li><a href="#" @php if (isset($page) && $page === 'partners') { echo 'style="font-weight:bold"';}@endphp><span>Partners</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'about') { echo 'style="font-weight:bold"';}@endphp><span>About</span></a></li>
		<li><a href="#" @php if (isset($page) && $page === 'contact') { echo 'style="font-weight:bold"';}@endphp><span>Contact</span></a></li>
	</ul>
</div>

<!-- 	
<li>
	<a href="http://foundation.zurb.com/">Zurb Foundation</a>
	<ul class="menu vertical nested">
    		<li>
			<a href="#">Item 1A</a>
			<ul class="menu vertical nested">
				<li><a href="#">Item 1Ai</a></li>
				<li><a href="#">Item 1Aii</a></li>
				<li><a href="#">Item 1Aiii</a></li>
        		</ul>
		</li>
		<li><a href="#">Item 1B</a></li>
		<li><a href="#">Item 1C</a></li>
    	</ul>
</li> 
-->