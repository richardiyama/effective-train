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
            <td> Services Urls</td>
            <td> Service Image</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($standardservices as $standardservice)
        <tr>
            <td>{{$standardservice->name}}</td>
            <td>{{$standardservice->title}}</td>
            <td>{{$standardservice->description}}</td>
            <td>{{$standardservice->services_urls}}</td>
            <td>{{$standardservice->services_image}}</td>
            <td>
            <form action="{{ route('standardservices.destroy',$standardservice->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('standardservices.show',$standardservice->id) }}">Edit</a>

   

   @csrf
   

   <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$standardservices->links()}}
<div>
@endsection