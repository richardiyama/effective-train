@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Original Service</h1>

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
        <form method="post" action="{{ route('originalservices.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $originalservice->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $originalservice->title }} />
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="field" name="description" id="summary-ckeditor3" cols="50" rows="10">{{ $originalservice->description }}</textarea>
            </div>

            
            <div class="form-group row mt-4">

<label for="standardservice_title" class="col-md-2 col-form-label">Standard Service Title</label>
<div class="col-md-10">
            <select class="form-control" name="standardservice_title" id="standardservice_title" required>
<option selected>{{$standardservice->title}}</option>
@foreach($standardservices as $standardservice)
<option value="{{$standardservice->id}}">{{$standardservice->title}}</option>
@endforeach
</select>
</div>
</div>
            <input type="hidden" name="id" value = "{{$originalservice->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection