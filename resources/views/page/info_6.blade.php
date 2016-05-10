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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_6/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_6/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_6/3.jpg')}}');"></div>
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
				<h1>看妳</h1>
				<p>思考模式來自於既往經驗的堆砌，每個人都有各自看待世界的慣性思維，而這樣的框架卻侷限了我們對世界的認知。

					如果退諸視野的囿限後，以上帝的視角盱衡一切，我們能不能單純地不預設立場，不帶任何偏見，就這樣觀看著，並進行獨立思辨呢?
					再回歸己身，我們是否也能客觀地面對自我呢?</p>
				</div>
				<div class="col-lg-4">
					<h1>資訊</h1>
					<p>最勇敢的就是有一天唐突地進入了另一個人的人生，然後在過程中學習去負責任，去愛，然後轟轟烈烈的去愛</p>
				</div>
				<div class="col-lg-4">
					<h1>失戀陣線聯盟</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:62T5mDo8ZBhpp6dUKtHspp" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
						我們這麼在乎她，卻被她全部抹煞；<br>
						越疼她越傷心，永遠得不到回答。<br>

						到底她怎麼想？應該繼續猜測嗎？<br>
						還是說好全忘了吧！<br>

						找一個承認失戀的方法，讓心情好好地放個假；<br>
						當你我不小心又想起她，就在記憶裡劃一個 X。<br>
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
