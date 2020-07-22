@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ordinary Service</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('originalservices.create') }}"> Create New Ordinary Service</a>
            </div>
        </div>
    </div>
   

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
        @foreach($originalservices as $originalservice)
        <tr>
            <td>{{$originalservice->name}}</td>
            <td>{{$originalservice->title}}</td>
            <td>{{$originalservice->description}}</td>
            
            <td>
            
   
   <a class="btn btn-info" href="{{ route('originalservices.show',$originalservice->id) }}">Edit</a>

   

   
            </td>
            <td><a class="btn btn-danger" href = 'delete/{{ $originalservice->id }}'>Delete</a></td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$originalservices->links()}}
<div>
@endsection