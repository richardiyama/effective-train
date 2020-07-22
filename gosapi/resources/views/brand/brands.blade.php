@extends('layouts.app')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Brand</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('brands.create') }}"> Create New Brand</a>
            </div>
        </div>
    </div>
   

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
          <td>Brand Image </td>
          
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->name}}</td>
            <td>{{$brand->brand_image}}</td>
            <td>
            <form action="{{ route('brands.destroy',$brand->id) }}" method="POST">
   
   <a class="btn btn-info" href="{{ route('brands.show',$brand->id) }}">Edit</a>

   

   @csrf
   

   <button type="submit" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$brands->links()}}
<div>
@endsection