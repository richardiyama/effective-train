@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Name Item two</h1>

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
        <form method="post" action="{{ route('nameitemtwos.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $nameitemtwo->name }} />
            </div>
           
            <div class="form-group">
                <label for="title_one">Title One:</label>
                <input type="text" class="form-control" name="title_one" value={{ $nameitemtwo->title_one }} />
            </div>
            <div class="form-group">
                <label for="title_two">Title Two:</label>
                <input type="text" class="form-control" name="title_two" value={{ $nameitemtwo->title_two }} />
            </div>

            <div class="form-group">
                <label for="title_three">Title Three:</label>
                <input type="text" class="form-control" name="title_three" value={{ $nameitemtwo->title_three }} />
            </div>
            

            
            
            <input type="hidden" name="id" value = "{{$nameitemtwo->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection