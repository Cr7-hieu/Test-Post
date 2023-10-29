@extends('home')
@section('name')
<a class="btn btn-primary" href="/baiviet/add">them moi</a>
<div>
    <h3>Bài viết</h3>
    <h4>Tiêu đề</h4>
    @foreach ($data as $base)
        <div>{{$base->title}}</div>
        <div>{{$base->content}}</div>
        <div>
            <img src="{{$base->image}}" alt="">
        </div>
    @endforeach
</div>
@endsection