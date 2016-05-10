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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_3/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_3/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_3/3.jpg')}}');"></div>
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
				<h1>靈肉分離-Deform</h1>
				<p>靈感來自《法蘭西斯培根-感覺的邏輯》，運動中的肉體與輪廓以骨架為支點移動，人的形象看起來是處於變動中的，介於固體與液體之間的有機體，我們的骨骼、骨架像是限制肉體四處橫流的框架，我們的肉被固定在其上，無法動彈。透過這件作品，想呈現運動中的肉體，無目的的緩慢移動，呈現出逃逸的姿態。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>在變動的人生啊我是多麽欽慕你恆定的變化。 </p>
			</div>
			<div class="col-lg-4">
				<h1>夢醒時分</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:51fGtLs5vdK2NOumVhMXru" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					你說你愛了不該愛的人　你的心中滿是傷痕<br>
					你說你犯了不該犯的錯　心中滿是悔恨<br>

					你說你嚐盡了生活的苦　找不到可以相信的人<br>
					你說你感到萬分沮喪　甚至開始懷疑人生<br>

					早知道傷心總是難免的　你又何苦一往情深<br>
					因為愛情總是難捨難分　何必在意那一點點溫存<br>
					要知道傷心總是難免的　在每一個夢醒時分<br>
					有些事情你現在不必問　有些人你永遠不必等<br>
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
