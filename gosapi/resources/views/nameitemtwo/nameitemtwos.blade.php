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
          <td>Title One</td>
          <td>Title Two</td>
          <td>Title Three</td>
          
          
           
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($nameitemtwos as $nameitemtwo)
        <tr>
            <td>{{$nameitemtwo->name}}</td>
            <td>{{$nameitemtwo->title_one}}</td>
            <td>{{$nameitemtwo->title_two}}</td>
            <td>{{$nameitemtwo->title_three}}</td>
            <td>{{$nameitemtwo->title_four}}</td>
            
            <td>
                <a href="{{ route('nameitemtwos.show',$nameitemtwo->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$nameitemtwos->links()}}
<div>
@endsection