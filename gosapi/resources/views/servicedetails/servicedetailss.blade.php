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
        <td>Service Image</td>
        <td>Content One</td>
        <td>Content Two</td>
        <td>Content Three</td>
        <td>Content Four</td>
        <td>Service Booking Url </td>
        <td>List One</td>
        <td>List Two</td>
        <td>List Three</td>
        <td>List Four</td>
        <td>List Five</td>
       <td>List Six</td>
        <td>List Seven</td>
       <td>List Eight</td>
       <td>Service Booking Url</td>
        <td>Service Video</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($servicedetailss as $servicedetails)
        <tr>
            <td>{{$servicedetails->name}}</td>
            <td>{{$servicedetails->title_one}}</td>
            <td>{{$servicedetails->title_two}}</td>
            <td>{{$servicedetails->service_image}}</td>
            <td>{{$servicedetails->content_one}}</td>
            <td>{{$servicedetails->content_two}}</td>
            <td>{{$servicedetails->content_three}}</td> 
            <td>{{$servicedetails->content_four}}</td>
            <td>{{$servicedetails->service_booking_url}}</td>
            <td>{{$servicedetails->list_one}}</td>
            <td>{{$servicedetails->list_two}}</td>
            <td>{{$servicedetails->list_three}}</td>
            <td>{{$servicedetails->list_four}}</td>
            <td>{{$servicedetails->list_five}}</td>
            <td>{{$servicedetails->list_six}}</td>
            <td>{{$servicedetails->list_seven}}</td>
            <td>{{$servicedetails->list_eight}}</td>
            <td>{{$servicedetails->service_booking_url}}</td>
            <td>{{$servicedetails->service_video}}</td>
            <td>
                <a href="{{ route('servicedetailss.show',$servicedetails->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$servicedetailss->links()}}
<div>
@endsection