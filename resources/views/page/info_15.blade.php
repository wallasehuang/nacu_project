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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_15/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_15/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_15/3.jpg')}}');"></div>
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
				<h1>自由的慾望-迴游-Migration</h1>
				<p>這早已不是個還有故事可說的年代，我們都以為自己是自由的，我們還能做些選擇，卻對自己選擇如此的原因束手無策、無話可說。我們要規劃一場令你喘不過氣的旅程，你會感受到前所未有地對於自由的渴望，我們想要你釋放。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>所有喧囂都靜音吧
					所有嘈雜都隨著時光之河褪去吧

				</p>
			</div>
			<div class="col-lg-4">
				<h1>河</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:1eagy6k3frGYgJiANi5YsS" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>

					當你平躺下來　我便成了河<br>迴繞你的頸間　在你唇邊乾涸<br>
					竊想你的眼神　我戀戀不捨<br>聚為一泓泉水　深邃清澈<br>

					當愛燎原成災　你徐徐側身<br>堆積肥沃河床　我是朝聖的人<br>
					我是客途的雁　卻一往情深<br>從此無意追逐　新綠的春<br>

					任我流吧　‭(‬像‭)‬層層冰川<br>(‬就算‭)‬億年換幾吋　我也寧願這麼盼<br>
					等到昏黃　‭(‬我會‭)‬等到癡傻<br>等著公主吻青蛙<br>

					魔咒緩緩褪盡　你笑的厲害<br>天曾缺掉的角　無非此等神采<br>
					我將殘翼放下　從河中走來<br>你正頷首告知　這裡有愛<br>

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
