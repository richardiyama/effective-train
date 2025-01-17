@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Create a Course File</h1>

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
        <form method="post" action="{{ route('coursefiles.store') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
        <label for="images">Course File</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="course_file_image">
            <label class="custom-file-label" for="images">Course File</label>
        </div>
    </div>
           

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection