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
          <td>name</td>
          <td>Content </td>
         
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($aboutcounterareas as $aboutcounterarea)
        <tr>
            <td>{{$aboutcounterarea->name}}</td>
            <td>{{$aboutcounterarea->content}}</td>
            
            <td>
                <a href="{{ route('aboutcounterareas.show',$aboutcounterarea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$aboutcounterareas->links()}}
<div>
@endsection