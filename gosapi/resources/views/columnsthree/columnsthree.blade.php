@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Columns Three</h1>

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
        <form method="post" action="{{ route('columnsthrees.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $columnsthree->name }} />
            </div>
           
            <div class="form-group">
                <label for="content_one">Content One:</label>
                <textarea class="field" name="content_one" cols="50" rows="10"  >{{ $columnsthree->content_one }}</textarea>
            </div>
            <div class="form-group">
                <label for="content_two">Content Two:</label>
                <textarea class="field" name="content_two" cols="50" rows="10"  >{{ $columnsthree->content_two }}</textarea>
            </div>
            <div class="form-group">
                <label for="title_one">Title One:</label>
                <input type="text" class="form-control" name="title_one" value={{ $columnsthree->title_one}} />
            </div>

            <div class="form-group">
                <label for="title_two">Title Two</label>
                <input type="text" class="form-control" name="title_two" value={{ $columnsthree->title_two }} />
            </div>
            <div class="form-group">
                <label for="title_three">Title Three:</label>
                <input type="text" class="form-control" name="title_three" value={{ $columnsthree->title_three }} />
            </div>
            

            <div class="form-group">
                <label for="content_three">Content Three:</label>
                <textarea class="field" name="content_three" cols="50" rows="10"  >{{ $columnsthree->content_three }}</textarea>
            </div>
            

            <input type="hidden" name="id" value = "{{$columnsthree->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection