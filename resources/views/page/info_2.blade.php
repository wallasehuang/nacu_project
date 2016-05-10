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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_2/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_2/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_2/3.jpg')}}');"></div>
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
				<h1>途中-Halfway</h1>
				<p>以燈光和聲響模擬火車的移動感，藉以重現人在交通中的狀態。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>那一棵樹上開花了，我們相約去看花的那一天
					你沒有來，
					但到了很後來，我才知道
					我錯過你了。</p>
				</div>
				<div class="col-lg-4">
					<h1>相見恨晚</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:4rQwOECYSmn0wtR6ZiBa38" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
						你有一張好陌生的臉　到今天才看見 <br>
						有點心酸在我們之間　如此短暫的情緣 <br>
						看著天空不讓淚流下　不說一句埋怨 <br>
						只是心中的感慨萬千　當作前世來生相欠 <br>

						你說是我們相見恨晚　我說為愛<br>你不夠勇敢<br>
						我不奢求永遠　永遠太遙遠<br>卻陷在愛的深淵<br>
						你說是我們相見恨晚　我說為愛<br>你不夠勇敢<br>
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
