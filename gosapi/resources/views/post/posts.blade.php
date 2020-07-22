@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Blog Post</a>
            </div>
        </div>
    </div>
   

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Name</td>
          <td>Title</td>
        <td>Post Image</td>
        <td>Content One</td>
        <td>Blog Image</td>
        <td>Content Two</td>
        <td>Content Three</td>
        <td>Title Two</td>
        <td>Content Four</td>
        <td>Blog Image Two</td>
        <td>Title Three</td>
        <td>Content Five</td>
        <td>Title Four</td>
        <td>Title Five</td>
        <td>List One</td>
        <td>List Two</td>
        <td>List Three</td>
        <td>List Four</td>
        <td>List Five</td>
       <td>List Six</td>
        <td>List Seven</td>
       <td>List Eight</td>
        <td>List Nine</td>
       <td> Content Six</td>
        <td>Blog video Url</td>
       <td>Blog Image Three</td>
       <td>Content Seven</td>

          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->name}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->post_image}}</td>
            <td>{{$post->content_one}}</td>
            <td>{{$post->blog_image}}</td>
            <td>{{$post->content_two}}</td>
            <td>{{$post->content_three}}</td>
            <td>{{$post->title_two}}</td>
            <td>{{$post->content_four}}</td>
            <td>{{$post->blog_image_two}}</td>
            <td>{{$post->title_three}}</td>
            <td>{{$post->content_five}}</td>
            <td>{{$post->title_four}}</td>
            <td>{{$post->title_five}}</td>
            <td>{{$post->list_one}}</td>
            <td>{{$post->list_two}}</td>
            <td>{{$post->list_three}}</td>
            <td>{{$post->list_four}}</td>
            <td>{{$post->list_five}}</td>
            <td>{{$post->list_six}}</td>
            <td>{{$post->list_seven}}</td>
            <td>{{$post->list_eight}}</td>
            <td>{{$post->list_nine}}</td>
            <td>{{$post->content_six}}</td>
            <td>{{$post->blog_video}}</td>
            <td>{{$post->blog_image_three}}</td>
            <td>{{$post->content_seven}}</td>
            <td>
            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Edit</a>

   

   @csrf
   

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$posts->links()}}
<div>
@endsection