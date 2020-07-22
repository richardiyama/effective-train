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
          <td>Content One</td>
            <td> Content Two</td>
            <td>Title One</td>
            <td> Title Two</td>
            <td>Title Three</td>
           <td> Content Three</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($columnsthrees as $columnsthree)
        <tr>
            <td>{{$columnsthree->name}}</td>
            <td>{{$columnsthree->content_one}}</td>
            <td>{{$columnsthree->content_two}}</td>
            <td>{{$columnsthree->title_one}}</td>
            <td>{{$columnsthree->title_two}}</td>
            <td>{{$columnsthree->title_three}}</td>
            <td>{{$columnsthree->content_three}}</td>
        
            <td>
                <a href="{{ route('columnsthrees.show',$columnsthree->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$columnsthrees->links()}}
<div>
@endsection