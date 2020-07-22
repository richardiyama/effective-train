@extends('layouts.app')

@section('content')
<!--<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course File</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('coursefiles.create') }}"> Create New Course File</a>
            </div>
        </div>
    </div>-->
   

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
          <td>Course File  </td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($coursefiles as $coursefile)
        <tr>
            <td>{{$coursefile->name}}</td>
            <td>{{$coursefile->course_file_image}}</td>
            <td>
            <form action="{{ route('coursefiles.destroy',$coursefile->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('coursefiles.show',$coursefile->id) }}">Edit</a>

   

   @csrf
   

   <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$coursefiles->links()}}
<div>
@endsection