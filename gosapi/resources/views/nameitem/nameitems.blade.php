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
          <td>Title Four</td>
          <td>Title Five</div>
          
           
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($nameitems as $nameitem)
        <tr>
            <td>{{$nameitem->name}}</td>
            <td>{{$nameitem->title_one}}</td>
            <td>{{$nameitem->title_two}}</td>
            <td>{{$nameitem->title_three}}</td>
            <td>{{$nameitem->title_four}}</td>
            <td>{{$nameitem->title_five}}</td>
            
            <td>
                <a href="{{ route('nameitems.show',$nameitem->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$nameitems->links()}}
<div>
@endsection