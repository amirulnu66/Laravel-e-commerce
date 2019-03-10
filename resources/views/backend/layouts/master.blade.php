<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	@include('backend.layouts.header')
	
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<!-- Left side nav bar -->
			@include('backend.layouts.navbar')
			<div class="right-column">
				<!-- top nav bar -->
				@include('backend.layouts.topnav')
				<!-- main contant -->
				@yield('content')
			</div>
		</div>
	</div>

	<!-- SCRIPTS - REQUIRED START -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- Bootstrap core JavaScript -->
	<!-- JQuery -->
	@include('backend.layouts.script')

</body>
</html>
