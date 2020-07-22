@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Name Item</h1>

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
        <form method="post" action="{{ route('nameitems.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $nameitem->name }} />
            </div>
           
            <div class="form-group">
                <label for="title_one">Title One:</label>
                <input type="text" class="form-control" name="title_one" value={{ $nameitem->title_one }} />
            </div>
            <div class="form-group">
                <label for="title_two">Title Two:</label>
                <input type="text" class="form-control" name="title_two" value={{ $nameitem->title_two }} />
            </div>

            <div class="form-group">
                <label for="title_three">Title Three:</label>
                <input type="text" class="form-control" name="title_three" value={{ $nameitem->title_three }} />
            </div>
            <div class="form-group">
                <label for="title_four">Title Four:</label>
                <input type="text" class="form-control" name="title_four" value={{ $nameitem->title_four }} />
            </div>

            <div class="form-group">
                <label for="title_five">Title Five:</label>
                <input type="text" class="form-control" name="title_five" value={{ $nameitem->title_five }} />
            </div>
            
            <input type="hidden" name="id" value = "{{$nameitem->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection