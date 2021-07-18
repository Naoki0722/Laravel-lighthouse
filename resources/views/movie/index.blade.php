@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        <h2>動画再生ページ</h2>
        <div class="d-flex">
            @foreach($fileInfo as $movie)
            <div class="mx-5">
                <video width="200px" src="/storage/{{$movie}}" controls playsinline></video>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
