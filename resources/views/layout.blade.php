<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Spa Advisor</title>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<!-- Plugins -->
	<link href="css/animate.css/animate.min.css" rel="stylesheet">
</head>
<body>
	<div class="boxed">

		<!-- Header Section -->
		@include('pages.header')

		<!-- Navbar Section -->
		@include('pages.navigation')
	</div>
	

	<div class="container">
		@yield('content')
	</div>

	
 	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>