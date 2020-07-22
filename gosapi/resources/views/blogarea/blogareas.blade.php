@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blog Area</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogareas.create') }}"> Create New Blog Area</a>
            </div>
        </div>
    </div>
   
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
        @foreach($blogareas as $blogarea)
        <tr>
            <td>{{$blogarea->name}}</td>
            <td>{{$blogarea->title}}</td>
            <td>{{$blogarea->content}}</td>
            <td>
            <form action="{{ route('blogareas.destroy',$blogarea->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('blogareas.show',$blogarea->id) }}">Edit</a>

   

   @csrf
   

   <button type="submit" class="btn btn-danger">Delete</button>
</form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$blogareas->links()}}
<div>
@endsection