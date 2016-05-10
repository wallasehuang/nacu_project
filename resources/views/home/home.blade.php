@extends('layouts.app') @section('style')
<link href="{{URL::asset('css/home_timeline.css')}}" rel="stylesheet"> @endsection @section('content')
<section id="timeline" class="full-section">
    <article id="cd-timeline" class="cd-container">
        <? $i=1 ?>
            @foreach($data as $row)
            <div class="cd-timeline-block wow pulse">
                <div id="<?='info'.$i?>" class="cd-timeline-img" >
                    <img src="{{URL::asset($row->img)}}" onclick="location.href='{{URL::to('/info_'.$i)}}'">
                    <input type="hidden" name="<?='info'.$i?>" value="{{$row->count}}" />
                </div>
                <div class="cd-timeline-content">
                    <h2>{{$row->page}}</h2>
                    <p>瀏覽人次:{{$row->count}}</p>
                </div>
            </div>
            <? $i++ ?>
                @endforeach
    </article>
</section>
@endsection @section('script')
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/wow.min.js')}}"></script>
@endsection
