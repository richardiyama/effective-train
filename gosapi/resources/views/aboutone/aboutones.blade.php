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
          <td>Image </td>
          <td>Title</td>
          <td>Content </td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($aboutones as $aboutone)
        <tr>
            <td>{{$aboutone->name}}</td>
            <td>{{$aboutone->about_image}}</td>
            <td>{{$aboutone->title}}</td>
            <td>{{$aboutone->content}}</td>
            <td>
                <a href="{{ route('aboutones.show',$aboutone->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$aboutones->links()}}
<div>
@endsection