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
            <td> Designation</td>
            <td> Team Image</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($teams as $team)
        <tr>
            <td>{{$team->name}}</td>
            <td>{{$team->title}}</td>
            <td>{{$team->designation}}</td>
            <td>{{$team->team_image}}</td>
            <td>
                <a href="{{ route('teams.show',$team->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$teams->links()}}
<div>
@endsection