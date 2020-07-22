@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Contact Top Area</h1>

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
        <form method="post" action="{{ route('contacttopareas.update') }}">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $contacttoparea->name }} />
            </div>
           
            <div class="form-group">
                <label for="phone_title">Phone Title:</label>
                <input type="text" class="form-control" name="phone_title" value={{ $contacttoparea->phone_title }} />
            </div>
            <div class="form-group">
                <label for="phone_number_one">Phone Number One:</label>
                <input type="text" class="form-control" name="phone_number_one" value={{ $contacttoparea->phone_number_one }} />
            </div>

            <div class="form-group">

<label for="phone_number_two">Phone Number Two:</label>
<input type="text" class="form-control" name="phone_number_two" value={{ $contacttoparea->phone_number_two }} />
</div>

<div class="form-group">
<label for="email_title">Email Title:</label>
<input type="text" class="form-control" name="email_title" value={{ $contacttoparea->email_title }} />
</div>
<div class="form-group">
<label for="email_one">Email One:</label>
<input type="email" class="form-control" name="email_one" value={{ $contacttoparea->email_one }} />
</div>
<div class="form-group">
<label for="email_two">Email Two:</label>
<input type="text" class="form-control" name="email_two" value={{ $contacttoparea->email_two }} />
</div>

            <input type="hidden" name="id" value = "{{$contacttoparea->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection