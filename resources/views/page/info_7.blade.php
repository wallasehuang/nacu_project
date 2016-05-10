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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_7/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_7/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_7/3.jpg')}}');"></div>
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
				<h1>秘密麻吉熊-Buddy Bear</h1>
				<p>我們都曾向陪伴童年的娃娃訴說心事，毫無保留地表達自己。長大後那些說不出口的話，就由秘密麻吉熊來傾聽、替你表達吧！</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>好慶幸這一路走來
					跌跌撞撞也遇過好多事
					身而為人
					擁有情緒
					我很感恩</p>
				</div>
				<div class="col-lg-4">
					<h1>我願意</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:3WuHwMdchFqYhMqKRPUTvT" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
						就算多一秒停留在你懷裡 失去世界也不可惜<br>
						我願意為你 我願意為你 我願意為你 被放逐天際<br>
						只要你真心 拿愛與我回應 什麼都願意 什麼都願意 為你<br>
						我什麼都願意 什麼都願意 為你<br>
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
