<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('home')
    @section('main')
    <a class="btn btn-primary" href="/baiviet/index">Bài viết</a>
    <h2>Thêm mới</h2>
    <form action="/baiviet/add" method="POST">
        @csrf
        <div>
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title">
            <label for="content">Nội dung</label>
            <textarea name="conetent" id="content" cols="30" rows="10"></textarea>
            <label for="image">Ảnh</label>
            <input type="file" name="image" id="image">
        </div>
        <div>

        </div>
        <button type="submit" class="btn btn-primary">ADD</button>
    </form>
    @endsection
</body>
</html>