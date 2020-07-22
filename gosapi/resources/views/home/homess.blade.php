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
        @foreach($homess as $home)
        <tr>
            <td>{{$home->name}}</td>
            <td>{{$home->title}}</td>
         
            <td>
                <a href="{{ route('homess.show',$home->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$homess->links()}}
<div>
@endsection