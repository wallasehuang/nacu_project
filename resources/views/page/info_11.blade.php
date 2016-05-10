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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_11/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_11/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_11/3.jpg')}}');"></div>
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
				<h1>慾望城視-Eyes And City</h1>
				<p>在文字訊息慢慢侵蝕掉我們平常與人相處時的表情和語調的世界，你多久沒有好好凝視一個人的眼睛？正視眼前的世界吧！讓我們回歸本質，凝視最初的慾望。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>也該是時候
					停下腳步
					回首過去
					看看被遺忘的片段裡燦爛的星星
				</p>
			</div>
			<div class="col-lg-4">
				<h1>被遺忘的時光</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:1UeRBmmLWfkeV0Icg0Xvso" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					是誰在敲打我窗<br>
					是誰在撩動琴弦<br>
					那一段被遺忘的時光<br>
					漸漸地迴昇出我心坎<br>

					是誰在敲打我窗<br>
					是誰在撩動琴弦<br>
					記憶中那歡樂的情景<br>
					慢慢的浮現在我的腦海<br>

					那緩緩飄落的小雨<br>
					不停的打在我窗<br>
					只有那沈默不語的我<br>
					不時的回想過去<br>
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
