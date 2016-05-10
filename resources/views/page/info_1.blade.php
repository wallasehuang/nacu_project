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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_1/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_1/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_1/3.jpg')}}');"></div>
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
				<h1>漂木-A Tree</h1>
				<p>
					「只要那裏還閃爍著大自然的純潔光芒，就可使我們虛妄低俗的裝飾黯然失色，令我們汗顏。」－－蒙田，取自《蒙田哲言錄》
				</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>所有的青春啊，都在海浪裡了
					所有的回憶啊，都飄在風中了
					所有的我啊，都融進銀河的滂礡了</p>
				</div>
				<div class="col-lg-4">
					<h1>大海</h1>
					<iframe src="https://embed.spotify.com/?uri=spotify:track:4XglvuvmwdVQ1MpV3zNUnR&theme=white" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
					<p>
						從那遙遠海邊　慢慢消失的你 <br>本來模糊的臉　竟然漸漸清晰 <br>
						想要說些什麼　又不知從何說起 <br>只有把它放在心底 <br>

						茫然走在海邊　看那潮來潮去 <br>徒勞無功　想把每朵浪花記起 <br>
						想要說聲愛你　卻被吹散在風裡 <br>猛然回頭　你在那裡 <br>

						如果大海能夠喚回曾經的愛　就讓我用一生等待 <br>
						如果深情往事你已不再留戀　就讓它隨風飄遠 <br>

						如果大海能夠帶走我的哀愁　就像帶走每條河流 <br>
						所有受過的傷　所有流過的淚 <br>我的愛　請全部帶走 <br></p>
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
