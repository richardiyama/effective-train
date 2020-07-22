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
          <td>Social Tag</td>
            <td>Social Url</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($socilas as $socila)
        <tr>
            <td>{{$socila->name}}</td>
            <td>{{$socila->social_tag}}</td>
            <td>{{$socila->social_url}}</td>
           
            
            <td>
                <a href="{{ route('socilas.show',$socila->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$socilas->links()}}
<div>
@endsection