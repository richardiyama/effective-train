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
         
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($servicedones as $servicedone)
        <tr>
            <td>{{$servicedone->name}}</td>
           
            <td>
                <a href="{{ route('servicedones.show',$servicedone->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$servicedones->links()}}
<div>
@endsection