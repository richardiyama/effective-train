@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Counter Up</h1>

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
        <form method="post" action="{{ route('counterups.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $counterup->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $counterup->title }} />
            </div>
            <div class="form-group">
                <label for="counter_num">Counter Number:</label>
                <input type="text" class="form-control" name="counter_num" value={{ $counterup->counter_num }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$counterup->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection