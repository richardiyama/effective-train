@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Widget Two</h1>

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
        <form method="post" action="{{ route('widgettwos.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $widgettwo->name }} />
            </div>
           
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $widgettwo->title }} />
            </div>
            <div class="form-group">
                <label for="link_title_one">Link Title One:</label>
                <input type="text" class="form-control" name="link_title_one" value={{ $widgettwo->link_title_one }} />
            </div>

            <div class="form-group">
                <label for="link_title_two">Link Title Two:</label>
                <input type="text" class="form-control" name="link_title_two" value={{ $widgettwo->link_title_two }} />
            </div>

            <div class="form-group">
                <label for="link_title_three">Link Title Three:</label>
                <input type="text" class="form-control" name="link_title_three" value={{ $widgettwo->link_title_three }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$widgettwo->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection