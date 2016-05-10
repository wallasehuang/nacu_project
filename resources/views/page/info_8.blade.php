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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_8/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_8/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_8/3.jpg')}}');"></div>
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
				<h1>聲音計畫-Saund</h1>
				<p>「聲音計劃 /saund/」希望藉由聲音的收集、重現、以及再創作，帶來對於「聽覺」以及「聲音」意義的重新思考。
					本裝置為收集了在校園內所錄製的聲音，希望藉由聲音的錄製、重現，讓人得以專注聆聽彼此生活中的聲音，進而嘗試思考、聆聽自己生活中的聲音。ˊ</p>
				</div>
				<div class="col-lg-4">
					<h1>資訊</h1>
					<p>靜下心 感受外界一切紛擾被阻絕於此秒
						這世界總是有些聲響一直在我們身邊陪伴著</p>
					</div>
					<div class="col-lg-4">
						<h1>聽你聽我</h1>
						<iframe src="https://embed.spotify.com/?uri=spotify:track:5iVCorPIJmyoPK0ksqz54x" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
						<p>
							你是我的寶　我一直為你感動驕傲<br>
							即使夢想再累再煎熬　你仍然緊緊抓牢<br>
							真心的執著　絕不放掉<br>

							你是我的寶　我一直為你感動驕傲<br>
							外面的世界　再多紛擾　你依舊把單純擁抱<br>
							生命的旋律　越唱越高<br>

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
