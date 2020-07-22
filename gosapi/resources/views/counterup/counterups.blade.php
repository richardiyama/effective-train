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
            <td> Counter Number</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($counterups as $counterup)
        <tr>
            <td>{{$counterup->name}}</td>
            <td>{{$counterup->title}}</td>
            <td>{{$counterup->counter_num}}</td>
            <td>
                <a href="{{ route('counterups.show',$counterup->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$counterups->links()}}
<div>
@endsection