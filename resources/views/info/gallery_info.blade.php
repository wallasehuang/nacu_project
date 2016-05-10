@extends('layouts.app')
@section('style')
<link href="{{URL::asset('css/gallery.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-4 col-xs-6 thumb">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300" alt="" class="img-responsive"></a>
		</div>
		<div class="col-lg-4 col-xs-6 thumb">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300 " alt=" " class="img-responsive "></a>
		</div>
		<div class="col-lg-4 col-xs-6 thumb ">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300" alt="" class="img-responsive"></a>
		</div>
		<div class="col-lg-4 col-xs-6 thumb">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300 " alt=" " class="img-responsive "></a>
		</div>
		<div class="col-lg-4 col-xs-6 thumb ">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300" alt="" class="img-responsive"></a>
		</div>
		<div class="col-lg-4 col-xs-6 thumb">
			<a href="img/img_light.png" data-imagelightbox="b" class="thumbnail"><img src="http://placehold.it/400x300 " alt=" " class="img-responsive "></a>
		</div>
	</div>
</div>
<!-- Music -->
<section id="music">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<iframe width="100% " height="166 " scrolling="no " frameborder="no " src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237603952&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false "></iframe>
			</div>
		</div>
	</div>
</section>
<!-- Page Content -->
<section id="info ">
	<div class="container">
		<div class="row ">
			<div class="col-lg-6 ">
				<h1>資訊</h1>
				<p>資訊內容</p>
			</div>
			<div class="col-lg-6 ">
				<h1>歌詞</h1>
				<p>歌詞內容</p>
			</div>
		</div>
	</div>
</section>
<section id="footer ">
	<div class="container">
		<hr>
		<!-- Footer -->
		<footer>
			<div class="row ">
				<div class="col-lg-12 ">
					<p>NCCU_MUSIC</p>
				</div>
			</div>
			<!-- /.row -->
		</footer>
	</div>
</section>

@endsection
@section('script')
<script src="{{URL::asset('js/imagelightbox.js')}}"></script>
<script>
	$(function() {
		$('a').imageLightbox();
	});
</script>
@endsection
