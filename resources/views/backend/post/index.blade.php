<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class=" mt-3">
        <h2 style="font-weight: bold">Danh sách bài viết</h2>
    </div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Title</th>
{{--        <th scope="col">Content</th>--}}
        <th scope="col">Category</th>
        <th scope="col">User</th>
        <th scope="col" colspan="3" style="text-align: center">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $key=>$post)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->title}}</td>
{{--            <td>{{$post->content}}</td>--}}
            <td>{{$post->category->name}}</td>
            <td>{{$post->user->name}}</td>
            <td><a href="{{route('posts.show',$post->id)}}" type="button" class="btn btn-info">Detail</a></td>
            <td><a onclick="return confirm('Bạn có muốn xóa bài viết không ')" href="{{route('posts.destroy', $post->id)}}" type="button" class="btn btn-danger">Delete</a></td>
            {{--                    <td><a href="{{route('posts.edit',$post->id)}}" type="button" class="btn btn-success">Update</a></td>--}}

        </tr>
    @endforeach
    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
