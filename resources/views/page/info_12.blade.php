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
			<div class="fill" style="background-image:url('{{URL::asset('img/info_12/1.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the second background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_12/2.jpg')}}');"></div>
		</div>
		<div class="item">
			<!-- Set the third background image using inline CSS below. -->
			<div class="fill" style="background-image:url('{{URL::asset('img/info_12/3.jpg')}}');"></div>
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
				<h1>未定-Unknown</h1>
				<p>在文字訊息慢慢侵蝕掉我們平常與人相處時的表情和語調的世界，你多久沒有好好凝視一個人的眼睛？正視眼前的世界吧！讓我們回歸本質，凝視最初的慾望。</p>
			</div>
			<div class="col-lg-4">
				<h1>資訊</h1>
				<p>我們互相把最美好的年華許托給對方
					靜靜的安穩的放上自己
					然後許願、此生不變。

				</p>
			</div>
			<div class="col-lg-4">
				<h1>走在紅毯那一天</h1>
				<iframe src="https://embed.spotify.com/?uri=spotify:track:5gfaMSBcMn6ETaHvld8VsE" width="100%" height="80" frameborder="0" allowtransparency="true"></iframe>
				<p>

					算一算時間 認識他也好幾年<br>
					看一看身邊 好朋友都有好姻緣<br>
					只剩下我 只剩下你<br>
					還繼續 苦守寒窯 一等十八年<br>

					有些事 急也沒有用 我瞭解<br>
					我不想 人老珠黃 才被人送作堆<br>

					走在紅毯那一天 蒙上白紗的臉<br>
					微笑中流下的眼淚 一定很美<br>
					走在紅毯那一天 戴上幸福的戒<br>
					有個人 廝守到永遠 是一生所願<br>

					算一算時間 認識他也好幾年<br>
					看一看身邊 好朋友都有好姻緣<br>
					只剩下我 只剩下你<br>
					還繼續 苦守寒窯 一等十八年<br>

					有些事 急也沒有用 我瞭解<br>
					我不想 人老珠黃 才被人送作堆<br>

					走在紅毯那一天 蒙上白紗的臉<br>
					微笑中流下的眼淚 一定很美<br>
					走在紅毯那一天 戴上幸福的戒<br>
					有個人 廝守到永遠 是一生所願<br>

					數著時間的日子 一點也不好過<br>
					到哪天 他的良心 才會發現<br>
					女人啊 要找個真誠的男人<br>
					哪有那麼難 真有那麼難<br>

					走在紅毯那一天 蒙上白紗的臉<br>
					微笑中流下的眼淚 一定很美<br>
					走在紅毯那一天 戴上幸福的戒<br>
					有個人 廝守到永遠 是一生所願<br>

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
