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
          <td>Header Title</td>
          <td>Description </td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($abouttwos as $abouttwo)
        <tr>
            <td>{{$abouttwo->name}}</td>
            <td>{{$abouttwo->about_image}}</td>
            <td>{{$abouttwo->title}}</td>
            <td>{{$abouttwo->header_title}}</td>
            <td>{{$abouttwo->description}}</td>
            <td>
                <a href="{{ route('abouttwos.show',$abouttwo->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$abouttwos->links()}}
<div>
@endsection