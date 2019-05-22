
<div id="ided-header">
	<!-- logo	 -->
	<div style="width: 52px;height: auto">
		<a href="/"><img src="imgs/logo.svg" /></a>
	</div>
	
	<div class="header-nav hide-for-small-only">
		<a href="">Co-Working Space</a>
		<a href="/incubator" @php if (isset($page) && $page === 'incubator') { echo 'style="font-weight:bold"';}@endphp>Incubator</a>
		<a href="">ID Studio</a>
		<a class="button" href="">SHOP</a>
	</div>
	
	<div class="ided-menu-button-container">
		<i class="hover fas fa-bars fa-2x" id="ided-menu-button"></i>
	</div>
</div>
