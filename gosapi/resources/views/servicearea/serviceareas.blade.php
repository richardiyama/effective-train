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
            <td> Content Title</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($serviceareas as $servicearea)
        <tr>
            <td>{{$servicearea->name}}</td>
            <td>{{$servicearea->title}}</td>
            <td>{{$servicearea->content}}</td>
            <td>{{$servicearea->content_title}}</td>
            <td>
                <a href="{{ route('serviceareas.show',$servicearea->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$serviceareas->links()}}
<div>
@endsection