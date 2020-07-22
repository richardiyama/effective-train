@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Widget Three</h1>

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
        <form method="post" action="{{ route('widgetthrees.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $widgetthree->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $widgetthree->title }} />
            </div>
            <div class="form-group">
                <label for="link_title_one">Link Title One:</label>
                <input type="text" class="form-control" name="link_title_one" value={{ $widgetthree->link_title_one }} />
            </div>

            <div class="form-group">
                <label for="link_title_two">Link Title Two:</label>
                <input type="text" class="form-control" name="link_title_two" value={{ $widgetthree->link_title_two }} />
            </div>

            <div class="form-group">
                <label for="link_title_three">Link Title Three:</label>
                <input type="text" class="form-control" name="link_title_three" value={{ $widgetthree->link_title_three }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$widgetthree->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection