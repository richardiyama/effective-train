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
            <td>Link Title One</td>
            <td>Link Title Two</td>
            <td>Link Title Three</td>
            
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($widgettwos as $widgettwo)
        <tr>
            <td>{{$widgettwo->name}}</td>
            <td>{{$widgettwo->title}}</td>
            <td>{{$widgettwo->link_title_one}}</td>
            <td>{{$widgettwo->link_title_two}}</td>
            <td>{{$widgettwo->link_title_three}}</td>
            <td>
                <a href="{{ route('widgettwos.show',$widgettwo->id)}}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  {{$widgettwos->links()}}
<div>
@endsection