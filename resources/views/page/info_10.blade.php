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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_10/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_10/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_10/3.jpg')}}');"></div>
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
				<h1>綠洲-Oasis</h1>
				<p>「綠洲」以苔蘚為媒材嘗試創作。苔蘚的生長狀態極大程度取決於水資源的多寡，魚群，甚至人類，也都極為仰賴水資源─水的滋養澆溉是維持生命之必須。而大小魚群由河川迴游入海的圖形，象徵探索水的源頭，其重要性如同沙漠中的綠洲，以長年不絕的水源供養著大小生命。這樣的探索意謂尋找生命中的重要他人/事件，對其如何塑造現今的自己，進行了一次回溯。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>晚安，在所有鯨魚流浪海洋的夢裡，我會做你的月光</p>
			</div>
			<div class="col-lg-4">
				<h1>月亮代表我的心</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:11YLaDCqH5VLeiXSz6mtH1" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					你問我愛你有多深 我愛你有幾分<br>
					我的情也真 我的愛也真 月亮代表我的心<br>
					你問我愛你有多深 我愛你有幾分<br>
					我的情不移 我的愛不變 月亮代表我的心<br>
					輕輕的一個吻 已經打動我的心<br>
					深深的一段情 教我思念到如今<br>
					你問我愛你有多深 我愛你有幾分<br>
					你去想一想 你去看一看 月亮代表我的心<br>
					輕輕的一個吻 已經打動我的心<br>
					深深的一段情 教我思念到如今<br>
					你問我愛你有多深 我愛你有幾分<br>
					你去想一想 你去看一看 月亮代表我的心<br>
					你去想一想 你去看一看 月亮代表我的心<br>
					月亮代表我的心<br>
					月亮代表我的心<br>
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
