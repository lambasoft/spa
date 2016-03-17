@extends('layout')

@section('content')

<?php
use App\Flight;
use App\Http\Controllers\Controller;
?>

<div class="container">
	<div class="spas">
		<div class="row">

			<div class="col-md-4 col-xs-6 fadeInLeft animated">
				<div class="single-spa border-bottom-hover-green">
					<a href="#">
						<div class="spa-image">
							<img src="assets/logo.png">
						</div>
						<div class="spa-text">
							<h3 class="colored-green">Title Here</h3>
							<p class="colored-black">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis molestiae, ex eos iusto minus hic facilis deserunt, il.
							</p>
						</div>
					</a>
				</div>
			</div>

			<div class="col-md-4 col-xs-6 fadeInLeft animated">
				<div class="single-spa border-bottom-hover-green">
					<a href="#">
						<div class="spa-image">
							<img src="assets/logo.png">
						</div>
						<div class="spa-text">
							<h3 class="colored-green">Title Here</h3>
							<p class="colored-black">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis molestiae, ex eos iusto minus hic facilis deserunt, il.
							</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-6 fadeInLeft animated">
				<div class="single-spa border-bottom-hover-green">
					<a href="#">
						<div class="spa-image">
							<img src="assets/logo.png">
						</div>
						<div class="spa-text">
							<h3 class="colored-green">Title Here</h3>
							<p class="colored-black">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis molestiae, ex eos iusto minus hic facilis deserunt, il.
							</p>
						</div>
					</a>
				</div>
			</div>

			

		</div>
	</div>
</div>

@stop