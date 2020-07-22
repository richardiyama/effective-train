@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Slider</h1>

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
        <form method="post" action="{{ route('sliders.update') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $slider->name }} />
            </div>
            <div class="form-group">
                <label for="text_position">text Position:</label>
                <textarea class="field" name="text_position" cols="50" rows="10"  >{{ $slider->text_position }}</textarea>
            </div>
           
            <div class="form-group">
                <label for="bg_Image">Background Image:</label>
                <textarea class="field" name="bg_Image" cols="50" rows="10"  >{{ $slider->bg_Image }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category:</label>
                <input type="text" class="form-control" name="category" value={{ $slider->category}} />
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" value={{ $slider->description }} />
            </div>
            <div class="form-group">
                <label for="button_text">Button Text:</label>
                <input type="text" class="form-control" name="button_text" value={{ $slider->button_text }} />
            </div>
            <div class="form-group">
                <label for="button_link">Button Link:</label>
                <input type="text" class="form-control" name="button_link" value={{ $slider->button_link}} />
            </div>

            

            <input type="hidden" name="id" value = "{{$slider->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection