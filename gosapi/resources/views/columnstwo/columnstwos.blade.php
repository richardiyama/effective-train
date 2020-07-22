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

          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($columnstwos as $columnstwo)
        <tr>
            <td>{{$columnstwo->name}}</td>
            <td>{{$columnstwo->content_one}}</td>
            <td>{{$columnstwo->content_two}}</td>
        
            <td>
                <a href="{{ route('columnstwos.show',$columnstwo->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$columnstwos->links()}}
<div>
@endsection