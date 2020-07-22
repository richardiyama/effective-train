@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Social Media</h1>

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
        <form method="post" action="{{ route('socilas.update') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $socila->name }} />
            </div>
            <div class="form-group">
                <label for="social_tag">Social Tag:</label>
                <textarea class="field" name="social_tag" cols="50" rows="10"  >{{ $socila->social_tag }}</textarea>
            </div>
           
            <div class="form-group">
                <label for="social_url">Social Url:</label>
                <textarea class="field" name="social_url" cols="50" rows="10"  >{{ $socila->social_url }}</textarea>
            </div>
          

            <input type="hidden" name="id" value = "{{$socila->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection