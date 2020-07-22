@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Finding Us</h1>

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
        <form method="post" action="{{ route('findinguss.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $findingus->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $findingus->title }} />
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="field" name="content" cols="50" rows="10"  >{{ $findingus->content }}</textarea>
            </div>
            
            <div class="form-group">
                <label for="service_booking_url">Servive Booking Url:</label>
                <input type="text" class="form-control" name="service_booking_url" value={{ $findingus->service_booking_url }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$findingus->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection