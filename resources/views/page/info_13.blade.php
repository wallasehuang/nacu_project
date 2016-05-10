@extends('layouts.app')
@section('style')
<link href="{{URL::asset('css/full-slider.css')}}" rel="stylesheet">
@endsection
@section('content')

<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<!-- Wrapper for Slides -->
	<div class="carousel-inner">
		<div class="item active">
			<!-- Set the first background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_13/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_13/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_13/3.jpg')}}');"></div>
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
<!-- Page Content -->
<section id="info">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<h1>夢的形狀-Shape Of Dream</h1>
				<p>夢，是人唯一能夠超脫現實，任由想像力自由馳騁的一種狀態，在褪去了視覺的刺激後，用聽覺去激發觀者對夢的想像，一趟作夢的旅行，利用文字、圖像、音樂浴一層一層減少觀者對視覺的依賴。
				</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>如果我記憶的沒有錯的話
					你就是我的美夢啊。

				</p>
			</div>
			<div class="col-lg-4">
				<h1>甜蜜蜜</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:1sEM8mp5WpjW7r2Z6laXAD" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					你笑得甜蜜蜜<br>
					好像花兒開在春風裡<br>
					開在春風裡<br>
					在哪裡在哪裡見過你<br>
					你的笑容這樣熟悉<br>
					我一時想不起<br>
					啊~~在夢裡<br>
					夢裡夢裡見過你<br>
					甜蜜笑得多甜蜜<br>
					是你~是你~夢見的就是你<br>
					在哪裡在哪裡見過你<br>
					你的笑容這樣熟悉<br>
					我一時想不起<br>
					啊~~在夢裡<br>

					在哪裡在哪裡見過你<br>
					你的笑容這樣熟悉<br>
					我一時想不起<br>
					啊~~在夢裡<br>
					夢裡夢裡見過你<br>
					甜蜜笑得多甜蜜<br>
					是你~是你~夢見的就是你<br>
					在哪裡在哪裡見過你<br>
					你的笑容這樣熟悉<br>
					我一時想不起<br>
					啊~~在夢裡<br>

				</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-dark">
	<div class="container text-center">
		<div>
			<h2>點亮政大</h2>
			<a href="{{URL::to('/')}}" class="btn btn-default btn-xl">點亮</a>
		</div>
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
