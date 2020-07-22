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
         <!-- <td>Inner About Title</td>
          <td>Inner About Description</td>
          <td>Two Columns Content one</td>
          <td>Two Columns Content two</td>
          <td>Three Columns Title One </td>
          <td>Three Columns Content One </td>
          <td>Three Columns Title Two </td>
          <td>Three Columns Content Two </td>
          <td>Three Columns Title Three</td>
          <td>Three Columns Content Three </td>
          <td>Finding Us Title</td>
          <td>Finding Us Content</td>
          <td>Finding Us Service Booking Url </td>
          <td>Breadcrump Title</td>
          <td>About Counter Area Content </td>
          <td>About One Image </td>
          <td>About One Title</td>
          <td>About One Content </td>-->
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($abouts as $about)
        <tr>
            <td>{{$about->name}}</td>
            <td>{{$about->title}}</td>
         <!--   <td>{{$about->innerabout->title}}</td>
            <td>{{$about->innerabout->description}}</td>
            <td>{{$about->columntwo->content_one}}</td>
            <td>{{$about->columntwo->content_two}}</td>
            <td>{{$about->columnthree->title_one}}</td>
            <td>{{$about->columnthree->content_one}}</td>
            <td>{{$about->columnthree->title_two}}</td>
            <td>{{$about->columnthree->content_two}}</td>
            <td>{{$about->columnthree->title_three}}</td>
            <td>{{$about->columnthree->content_three}}</td>
            <td>{{$about->findingus->title}}</td>
            <td>{{$about->findingus->content}}</td>
            <td>{{$about->findingus->service_booking_url}}</td>
            <td>{{$about->breadcrump->title}}</td>
            <td>{{$about->aboutcounterarea->content}}</td>
            <td>{{$about->aboutone->about_image}}</td>
            <td>{{$about->aboutone->title}}</td>
            <td>{{$about->aboutone->content}}</td>-->
            <td>
                <a href="{{ route('abouts.show',$about->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$abouts->links()}}
<div>
@endsection