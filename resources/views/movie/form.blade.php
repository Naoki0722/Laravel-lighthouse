@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <form action="{{ url('/movie/register')}}" method="post" enctype="multipart/form-data" class="col">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="movie-file">動画ファイル</label>
                <input type="file" class="form-control-file" id="movie-file" name="file">
            </div>
            <input type="submit" class="btn btn-primary mt-5">Submit</button>
        </form>
    </div>
</div>

@endsection
