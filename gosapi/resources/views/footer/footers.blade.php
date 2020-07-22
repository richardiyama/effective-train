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
        @foreach($footers as $footer)
        <tr>
            <td>{{$footer->name}}</td>
           
            <td>
                <a href="{{ route('footers.show',$footer->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$footers->links()}}
<div>
@endsection