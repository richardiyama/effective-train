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
            <td> Service Booking Url</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($findinguss as $findingus)
        <tr>
            <td>{{$findingus->name}}</td>
            <td>{{$findingus->title}}</td>
            <td>{{$findingus->content}}</td>
            <td>{{$findingus->service_booking_url}}</td>
            <td>
                <a href="{{ route('findinguss.show',$findingus->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$findinguss->links()}}
<div>
@endsection