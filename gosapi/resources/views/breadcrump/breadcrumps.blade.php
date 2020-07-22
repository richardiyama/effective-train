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
            
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($breadcrumps as $breadcrump)
        <tr>
            <td>{{$breadcrump->name}}</td>
            <td>{{$breadcrump->title}}</td>
        
            <td>
                <a href="{{ route('breadcrumps.show',$breadcrump->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$breadcrumps->links()}}
<div>
@endsection