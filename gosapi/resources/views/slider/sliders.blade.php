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
          <td>text Position</td>
            <td>Background Image</td>
            <td>Category</td>
            <td>Description</td>
            <td>Button Text</td>
            <td>Button Link</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($sliders as $slider)
        <tr>
            <td>{{$slider->name}}</td>
            <td>{{$slider->text_position}}</td>
            <td>{{$slider->bg_Image}}</td>
            <td>{{$slider->category}}</td>
            <td>{{$slider->description}}</td>
            <td>{{$slider->button_text}}</td>
            <td>{{$slider->button_link}}</td>
            
            <td>
                <a href="{{ route('sliders.show',$slider->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$sliders->links()}}
<div>
@endsection