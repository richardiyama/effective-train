@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Breadcrump</h1>

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
        <form method="post" action="{{ route('breadcrumps.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $breadcrump->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $breadcrump->title }} />
            </div>
            
            
            <input type="hidden" name="id" value = "{{$breadcrump->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection