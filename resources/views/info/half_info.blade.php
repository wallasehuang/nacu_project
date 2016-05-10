@extends('layouts.app')
@section('style')
<link href="{{URL::asset('css/half-slider.css')}}" rel="stylesheet">
@endsection
@section('content')

<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
	</ol>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Photo One');"></div>
			<div class="carousel-caption">
				<h2>photo 1</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Photo Two');"></div>
			<div class="carousel-caption">
				<h2>photo 2</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Photo Three');"></div>
			<div class="carousel-caption">
				<h2>photo 3</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Photo Four');"></div>
			<div class="carousel-caption">
				<h2>photo 4</h2>
			</div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Photo Five');"></div>
			<div class="carousel-caption">
				<h2>photo 5</h2>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="icon-prev"></span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="icon-next"></span>
	</a>
</header>
<!-- Music -->
<section id="music">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237603952&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
			</div>
		</div>
	</div>
</section>
<!-- Page Content -->
<section id="info">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<h1>資訊</h1>
				<p>資訊內容</p>
			</div>
			<div class="col-lg-6">
				<h1>歌詞</h1>
				<p>歌詞內容</p>
			</div>
		</div>
	</div>
</section>
<section id="footer">
	<div class="container">
		<hr>
		<!-- Footer -->
		<footer>
			<div class="row">
				<div class="col-lg-12">
					<p>NCCU_MUSIC</p>
				</div>
			</div>
			<!-- /.row -->
		</footer>
	</div>
</section>

@endsection
@section('script')
<script>
	$('.carousel').carousel({
        interval: 3000 //changes the speed
     })
</script>
@endsection
