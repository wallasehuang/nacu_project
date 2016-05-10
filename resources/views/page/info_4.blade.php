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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_4/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_4/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_4/3.jpg')}}');"></div>
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
				<h1>過程-Flying Icarus</h1>
				<p>每件摺紙創作作品，背後是如何誕生的，透過將一件完整作品，拆解回原本一張紙的過程，讓作品回歸到他的本質。選擇日本摺紙大師北條高史的作品"伊卡洛斯"，代表即使我們渴望著自由，想飛向一望無際的天空，最後還是會回歸到地面上。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>離你越來越遠的旅程
					在生命中的洪流我們已趨往不同的道路
					但至少，有些很少時刻
					我會想起你的樣子
					不帶憂鬱的美好的樣子</p>
				</div>
				<div class="col-lg-4">
					<h1>一場遊戲一場夢</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:0Id7swY6cWbvYLtVVF0wvq" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
					不要談什麼分離　我不會因為這樣而哭泣<br>那只是昨夜的一場夢而已<br>
						不要說願不願意　我不會因為這樣而在意<br>那只是昨夜的一場遊戲<br>

						那只是一場遊戲一場夢<br>雖然你影子還出現我眼裡<br>
						在我的歌聲中　早已沒有你<br>
						那只是一場遊戲一場夢<br>不要把殘缺的愛留在這裡<br>
						在兩個人的世界裡　不該有你<br>


						喔　為什麼道別離　又說什麼在一起<br>如今雖然沒有你　我還是我自己<br>
						說什麼此情永不渝　說什麼我愛你<br>如今依然沒有你　我還是我自己<br>
						一場遊戲一場夢<br>

						為什麼道別離　又說什麼在一起<br>如今雖然沒有你　我還是我自己<br>
						說什麼此情永不渝　說什麼我愛你<br>如今依然沒有你　我還是我自己<br>
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
