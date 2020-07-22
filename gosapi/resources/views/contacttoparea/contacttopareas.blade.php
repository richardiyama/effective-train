@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Name</td>
          <td>Phone Title</td>
           <td> Phone Number One</td>
            <td>Phone Number Two</td>
            <td>Email Title</td>
            <td>Email One</td>
            <td>Email Two</td>

          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacttopareas as $contacttoparea)
        <tr>
            <td>{{$contacttoparea->name}}</td>
            <td>{{$contacttoparea->phone_title}}</td>
            <td>{{$contacttoparea->phone_number_one}}</td>
            <td>{{$contacttoparea->phone_number_two}}</td>
            <td>{{$contacttoparea->email_title}}</td>
            <td>{{$contacttoparea->email_one}}</td>
            <td>{{$contacttoparea->email_two}}</td>
            
        
            <td>
                <a href="{{ route('contacttopareas.show',$contacttoparea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$contacttopareas->links()}}
<div>
@endsection