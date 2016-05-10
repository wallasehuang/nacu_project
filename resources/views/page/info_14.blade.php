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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_14/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_14/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_14/3.jpg')}}');"></div>
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
				<h1>半夢/半醒 Half Awake</h1>
				<p>有多久我們沒有好好做一場白日夢？任由思維自由飛越在另一個時空？將透過虛擬實境設備帶你展開一場白日夢的旅程。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>很多事不需要再多解釋什麼
					一路遠走至今
					很多事也不是語言可以說明的

				</p>
			</div>
			<div class="col-lg-4">
				<h1>口是心非</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:03jIhoDKiTLoojzXZQRHjV" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					口是心非　你深情的承諾都隨著西風飄渺遠走<br>
					癡人夢話　我鍾情的倚托就像枯萎凋零的花朵<br>
					星火燎原　我熱情的眼眸曾點亮最燦爛的天空<br>
					晴天霹靂　你絕情的放手在我最需要你的時候<br>

					於是愛恨交錯人消瘦　怕是怕這些苦沒來由<br>
					於是悲歡起落人靜默　等一等這些傷會自由<br>

					口是心非　你矯情的面容都烙印在心靈的角落<br>
					無話可說　我縱情的結果就像殘破光禿的山頭<br>
					渾然天成　我純情的悸動曾奔放最滾燙的節奏<br>
					不可收拾　你濫情的拋空所有晶瑩剔透的感受<br>

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
