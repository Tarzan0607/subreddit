@extends('base')
@section('main')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <a style="margin: 19px;" href="{{ route('posts.create')}}" class="btn btn-primary">New Post</a>
        </div>  
    </div>
    <div class="row">
        <div class="col-sm-12">
            <h1>Post</h1>    
        <table class="table table-striped">
            <thead>
                <tr>
                <td>Title</td>
                <td>Content</td>
                <td>Category</td>
                <td colspan = 2>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->category}}</td>
                    <td>
                        <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>

                        <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
</div>
</div>
@endsection