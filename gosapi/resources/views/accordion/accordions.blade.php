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
            <td>Title Four</td>
           <td> Content Three</td>
            <td> Content Four</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($accordions as $accordion)
        <tr>
            <td>{{$accordion->name}}</td>
            <td>{{$accordion->content_one}}</td>
            <td>{{$accordion->content_two}}</td>
            <td>{{$accordion->title_one}}</td>
            <td>{{$accordion->title_two}}</td>
            <td>{{$accordion->title_three}}</td>
            <td>{{$accordion->title_four}}</td>
            <td>{{$accordion->content_three}}</td>
            <td>{{$accordion->content_four}}</td>
            <td>
                <a href="{{ route('accordions.show',$accordion->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$accordions->links()}}
<div>
@endsection