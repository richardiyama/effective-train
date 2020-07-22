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
          <td>Longitude</td>
            <td> Latitude</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($mapareas as $maparea)
        <tr>
            <td>{{$maparea->name}}</td>
            <td>{{$maparea->map_latitude}}</td>
            <td>{{$maparea->map_longitude}}</td>
            <td>
                <a href="{{ route('mapareas.show',$maparea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$mapareas->links()}}
<div>
@endsection