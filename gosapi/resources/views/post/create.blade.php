@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Create News </h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" />
            </div>

            <div class="form-group">
        <label for="images">Post Image</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="post_image">
            <label class="custom-file-label" for="images">Post Image</label>
        </div>
    </div>
    <div class="form-group">
                <label for="content_one">Content One:</label>
                <textarea class="field" name="content_one" cols="50" rows="10"  ></textarea>
            </div>

            <div class="form-group">
        <label for="images">Blog Image</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="blog_image">
            <label class="custom-file-label" for="images">Blog Image</label>
        </div>
    </div>
    <div class="form-group">
                <label for="content_two">Content Two:</label>
                <textarea class="field" name="content_two" cols="50" rows="10"  ></textarea>
            </div>

            <div class="form-group">
                <label for="content_three">Content Three:</label>
                <textarea class="field" name="content_three" cols="50" rows="10"  ></textarea>
            </div>
            <div class="form-group">
                <label for="title_two">Title Two:</label>
                <input type="text" class="form-control" name="title_two"/>
            </div>
            <div class="form-group">
                <label for="content_four">Content Four:</label>
                <textarea class="field" name="content_four" cols="50" rows="10"></textarea>
            </div>

            <div class="form-group">
        <label for="images">Blog Image Two</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="blog_image_two">
            <label class="custom-file-label" for="images">Blog Image</label>
        </div>
    </div>
            <div class="form-group">
                <label for="title_three">Title Three:</label>
                <input type="text" class="form-control" name="title_three"/>
            </div>
            <div class="form-group">
                <label for="content_five">Content Five:</label>
                <textarea class="field" name="content_five" cols="50" rows="10"  ></textarea>
            </div>

            <div class="form-group">
                <label for="title_four">Title Four:</label>
                <input type="text" class="form-control" name="title_four" />
            </div>
            <div class="form-group">
                <label for="title_five">Title Five:</label>
                <input type="text" class="form-control" name="title_five" />
            </div>

            <div class="form-group">
                <label for="list_one">List One:</label>
                <input type="text" class="form-control" name="list_one" />
            </div>
            <div class="form-group">
                <label for="list_two">List Two:</label>
                <input type="text" class="form-control" name="list_two"/>
            </div>
            <div class="form-group">
                <label for="list_three">List Three:</label>
                <input type="text" class="form-control" name="list_three"/>
            </div>
            <div class="form-group">
                <label for="list_four">List Four:</label>
                <input type="text" class="form-control" name="list_four" />
            </div>
            <div class="form-group">
                <label for="list_five">List Five:</label>
                <input type="text" class="form-control" name="list_five" />
            </div>
            <div class="form-group">
                <label for="list_six">List Six:</label>
                <input type="text" class="form-control" name="list_six"/>
            </div>
            <div class="form-group">
                <label for="list_seven">List Seven:</label>
                <input type="text" class="form-control" name="list_seven" />
            </div>
            <div class="form-group">
                <label for="list_eight">List Eight:</label>
                <input type="text" class="form-control" name="list_eight" />
            </div>
            <div class="form-group">
                <label for="list_three">List Three:</label>
                <input type="text" class="form-control" name="list_three" />
            </div>
            <div class="form-group">
                <label for="list_nine">List Nine:</label>
                <input type="text" class="form-control" name="list_nine" />
            </div>
            <div class="form-group">
                <label for="content_six">Content Six:</label>
                <textarea class="field" name="content_six" cols="50" rows="10"  ></textarea>
            </div>

            <div class="form-group">
                <label for="blog_video">Blog Video Url:</label>
                <input type="text" class="form-control" name="blog_video" />
            </div>
            <div class="form-group">
        <label for="images">Blog Image Three</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="blog_image_three">
            <label class="custom-file-label" for="images">Blog Image Three</label>
        </div>
    </div>
    <div class="form-group">
                <label for="content_seven">Content Seven:</label>
                <textarea class="field" name="content_seven" cols="50" rows="10"></textarea>
            </div>

<div class="form-group row mt-4">

<label for="home_content" class="col-md-2 col-form-label">Home Content</label>
<div class="col-md-10">

<select class="form-control" name="home_content" id="home_content" required>
<option selected>Select Home Content</option>
@foreach($homes as $home)
<option value="{{$home->id}}">{{$home->title}}</option>
@endforeach
</select>
</div>
</div>

<div class="form-group row mt-4">

<label for="breadcrumbarea_content" class="col-md-2 col-form-label">Breadcrumb Area Content</label>
<div class="col-md-10">

<select class="form-control" name="breadcrumbarea_content" id="breadcrumbarea_content" required>
<option selected>Select Breadcrumb Area Content</option>
@foreach($breadcrumbareas as $breadcrumbarea)
<option value="{{$breadcrumbarea->id}}">{{$breadcrumbarea->title}}</option>
@endforeach
</select>
</div>
</div>

<div class="form-group row mt-4">

<label for="blogarea_content" class="col-md-2 col-form-label">Blogarea Content</label>
<div class="col-md-10">

<select class="form-control" name="blogarea_content" id="blogarea_content" required>
<option selected>Select Blogarea Content</option>
@foreach($blogareas as $blogarea)
<option value="{{$blogarea->id}}">{{$blogarea->title}}</option>
@endforeach
</select>
</div>
</div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection