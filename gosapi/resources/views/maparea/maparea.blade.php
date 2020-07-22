@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Map Areas</h1>

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
        <form method="post" action="{{ route('mapareas.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $maparea->name }} />
            </div>
           
            <div class="form-group">
                <label for="map_latitude">Latitude:</label>
                <input type="text" class="form-control" name="map_latitude" value={{ $maparea->map_latitude }} />
            </div>
            <div class="form-group">
                <label for="map_longitude">Longitude:</label>
                <input type="text" class="form-control" name="map_longitude" value={{ $maparea->map_longitude }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$maparea->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection