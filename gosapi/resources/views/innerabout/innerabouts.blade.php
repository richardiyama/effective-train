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
          <td>Title</td>
            <td> Description</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($innerabouts as $innerabout)
        <tr>
            <td>{{$innerabout->name}}</td>
            <td>{{$innerabout->title}}</td>
            <td>{{$innerabout->description}}</td>
            <td>
                <a href="{{ route('innerabouts.show',$innerabout->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$innerabouts->links()}}
<div>
@endsection