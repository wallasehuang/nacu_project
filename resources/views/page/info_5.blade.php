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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_5/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_5/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_5/3.jpg')}}');"></div>
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
				<h1>旁觀者-Observer</h1>
				<p>捨棄機械性鏡頭的精準感光，而以畫者富感性之筆，
					捕捉校園裡陌生人的臉孔。

					畫者最後將一張張臉譜綻放成一幅孩子的笑靨，因她
					發現，人們即使長成不同的樣貌，心底深處仍同樣保
					有一片赤純。而人們亦在畫筆下，映見這樣的自己。</p>
				</div>
				<div class="col-lg-4">
					<h1>資訊</h1>
					<p>執子之手 白頭偕老</p>
				</div>
				<div class="col-lg-4">
					<h1>最浪漫的事</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:4OtxGwcehLBesPlQPNcM86" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
						背靠著背坐在地毯上　聽聽音樂聊聊願望<br>
						你希望我越來越溫柔　我希望你放我在心上<br>
						你說想送我個浪漫的夢想　謝謝我帶你找到天堂<br>
						哪怕用一輩子才能完成　只要我講你就記住不忘<br>

						我能想到最浪漫的事　就是和你一起慢慢變老<br>
						一路上收藏點點滴滴的歡笑　留到以後坐著搖椅慢慢聊<br>
						我能想到最浪漫的事　就是和你一起慢慢變老<br>
						直到我們老得哪兒也去不了　你還依然把我當成手心裡的寶<br>
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
