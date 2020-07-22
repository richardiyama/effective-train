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
            <td> Content</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($counterareas as $counterarea)
        <tr>
            <td>{{$counterarea->name}}</td>
            <td>{{$counterarea->title}}</td>
            <td>{{$counterarea->content}}</td>
            <td>
                <a href="{{ route('counterareas.show',$counterarea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$counterareas->links()}}
<div>
@endsection