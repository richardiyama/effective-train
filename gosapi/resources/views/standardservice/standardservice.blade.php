@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Standard Service</h1>

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
        <form method="post" action="{{ route('standardservices.update') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $standardservice->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $standardservice->title }} />
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="field" name="description" cols="50" rows="10">{{ $standardservice->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="services_urls">Services Urls:</label>
                <textarea class="field" name="services_urls" cols="50" rows="10">{{ $standardservice->services_urls }}</textarea>
            </div>
            
            <div class="form-group">
        <label for="images">Service Image</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="services_image">
            <label class="custom-file-label" for="images">Image</label>
        </div>
    </div>
           
            
            <input type="hidden" name="id" value = "{{$standardservice->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection