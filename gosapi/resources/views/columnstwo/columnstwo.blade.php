@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Columns Two</h1>

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
        <form method="post" action="{{ route('columnstwos.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $columnstwo->name }} />
            </div>
           
            <div class="form-group">
                <label for="content_one">Content One:</label>
                <textarea class="textarea" name="content_one" cols="50" rows="10"  >{{ $columnstwo->content_one }}</textarea>
            </div>
            <div class="form-group">
                <label for="content_two">Content Two:</label>
                <textarea class="textarea"  name="content_two" cols="50" rows="10"  >{{ $columnstwo->content_two }}</textarea>
            </div>
            

            <input type="hidden" name="id" value = "{{$columnstwo->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection