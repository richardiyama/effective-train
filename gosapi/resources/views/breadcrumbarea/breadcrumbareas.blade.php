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
            <td> Content</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($breadcrumbareas as $breadcrumbarea)
        <tr>
            <td>{{$breadcrumbarea->name}}</td>
            <td>{{$breadcrumbarea->title}}</td>
            <td>{{$breadcrumbarea->content}}</td>
            <td>
                <a href="{{ route('breadcrumbareas.show',$breadcrumbarea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$breadcrumbareas->links()}}
<div>
@endsection