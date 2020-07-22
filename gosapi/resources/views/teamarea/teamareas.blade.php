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
        @foreach($teamareas as $teamarea)
        <tr>
            <td>{{$teamarea->name}}</td>
            <td>{{$teamarea->title}}</td>
            <td>{{$teamarea->content}}</td>
            <td>
                <a href="{{ route('teamareas.show',$teamarea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$teamareas->links()}}
<div>
@endsection