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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_9/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_9/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_9/3.jpg')}}');"></div>
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
				<h1>囊-Cocoon</h1>
				<p>在紛雜、混亂、壓力之中，我們想要的只是一個純粹的空間，一個屬於自己，可以蜷曲其中，可以輕微晃動，可以傾聽自己，的空間。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>有時候 有時候 我們幻想的一切就成了現實</p>
			</div>
			<div class="col-lg-4">
				<h1>紅豆</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:5iVCorPIJmyoPK0ksqz54x" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>
					還沒好好的感受 雪花綻放的氣候<br>
					我們一起顫抖 會更明白什麼是溫柔<br>
					還沒跟你牽著手 走過荒蕪的沙丘<br>
					可能從此以後學會珍惜 天長和地久<br>

					有時候有時候 我會相信一切有盡頭<br>
					相聚離開都有時候 沒有什麼會永垂不朽<br>
					可是我有時候 寧願選擇留戀不放手<br>
					等到風景都看透 也許你會陪我看細水長流<br>

					還沒為你把紅豆 熬成纏綿的傷口<br>
					然後一起分享 會更明白相思的哀愁<br>
					還沒好好的感受 醒著親吻的溫柔<br>
					可能在我左右 你才追求孤獨的自由<br>

					有時候有時候 我會相信一切有盡頭<br>
					相聚離開都有時候 沒有什麼會永垂不朽<br>
					可是我有時候 寧願選擇留戀不放手<br>
					等到風景都看透 也許你會陪我看細水長流<br>

					有時候有時候 我會相信一切有盡頭<br>
					相聚離開都有時候 沒有什麼會永垂不朽<br>
					可是我有時候 寧願選擇留戀不放手<br>
					等到風景都看透 也許你會陪我看細水長流<br>


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
