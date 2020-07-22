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
          <td>Admin Email</td>
            <td>Email</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($widgets as $widget)
        <tr>
            <td>{{$widget->name}}</td>
            <td>{{$widget->admin_email}}</td>
            <td>{{$widget->email}}</td>
            <td>
                <a href="{{ route('widgets.show',$widget->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$widgets->links()}}
<div>
@endsection