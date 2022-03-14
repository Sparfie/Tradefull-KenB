@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex pt-5">
        <div class="col-5">
            <iframe width="420" height="315" src="https://www.youtube.com/embed/{{ $video1->link }}"></iframe>
        </div>
        <div class="col-5 pt-5">
            <h2>{{ $video1->caption }}</h2>
        </div>
        <div class="col-1 pt-5 d-flex justify-content-end">
            <h2>{{ $video1->likes }}</h2>
        </div>
        <div class="col-1 pt-5">
            <a href="http:/home/add-like/{{ $video1->video }}" class="btn btn-primary">Like</a>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-5">
            <iframe width="420" height="315" src="https://www.youtube.com/embed/{{ $video2->link }}"></iframe>
        </div>
        <div class="col-5 pt-5">
            <h2>{{ $video2->caption }}</h2>
        </div>
        <div class="col-1 pt-5 d-flex justify-content-end">
            <h2>{{ $video2->likes }}</h2>
        </div>
        <div class="col-1 pt-5">
            <a href="http:/home/add-like/{{ $video2->video }}" class="btn btn-primary">Like</a>
        </div>
    </div>
</div>
@endsection
