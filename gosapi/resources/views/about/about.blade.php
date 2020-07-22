@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update About</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('abouts.update') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $about->name }} />
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" name="title" value={{ $about->title }} />
            </div>

        <!--    <div class="form-group">
                <label for="titleone">Inner About Title:</label>
                <input type="text" class="form-control" name="titleone" value={{ $about->innerabout->title }} />
            </div>
            <div class="form-group">
                <label for="description">Inner About Description:</label>
                <input type="description" class="form-control" name="description" value={{ $about->innerabout->description }} />
            </div>
            <div class="form-group">
                <label for="content_one">Two Columns Content one:</label>
                <textarea class="field" name="content_one" cols="50" rows="10"  value={{ $about->columntwo->content_one}}></textarea>
            </div>
            <div class="form-group">
                <label for="content_two">Two Columns Content two:</label>
                <textarea class="field" name="content_two" cols="50" rows="10"  value={{ $about->columntwo->content_two}}></textarea>
            </div>
            <div class="form-group">
                <label for="title_one">Three Columns Title One</label>
                <input type="text" class="form-control" name="title_one" value={{ $about->columnthree->title_one }} />
            </div>
            <div class="form-group">
                <label for="contentone_one">Three Columns Content One:</label>
                <textarea class="field" name="contentone_one" cols="50" rows="10"  value={{ $about->columnthree->content_one }}></textarea>
            </div>
            <div class="form-group">
                <label for="titletwo_two">Three Columns Title Two:</label>
                <input type="text" class="form-control" name="titletwo_two" value={{ $about->columnthree->title_two }} />
            </div>
            <div class="form-group">
                <label for="contenttwo_two">Three Columns Content Two:</label>
                <textarea class="field" name="contenttwo_two" cols="50" rows="10"  value={{ $about->columnthree->content_two }}></textarea>
            </div>
            <div class="form-group">
                <label for="title_three">Three Columns Title Three</label>
                <input type="title_three" class="form-control" name="title_three" value={{ $about->columnthree->title_three }} />
            </div>
            <div class="form-group">
                <label for="content_three">Three Columns Content Three:</label>
                <textarea class="field" name="content_three" cols="50" rows="10"  value={{ $about->columnthree->content_three }}></textarea>
            </div>
            <div class="form-group">
                <label for="titletwo">Finding Us Title:</label>
                <input type="text" class="form-control" name="titletwo" value={{ $about->findingus->title }} />
            </div>
            <div class="form-group">
                <label for="content">Finding Us Content:</label>
                <textarea class="field" name="content" cols="50" rows="10"  value={{ $about->findingus->content }}></textarea>
            </div>
            <div class="form-group">
                <label for="service_booking_url">Finding Us Service Booking Url:</label>
                <input type="text" class="form-control" name="service_booking_url" value={{ $about->findingus->service_booking_url }} />
            </div>
            <div class="form-group">
                <label for="titlethree">Breadcrump Title:</label>
                <input type="text" class="form-control" name="titlethree" value={{ $about->breadcrump->title }} />
            </div>
            <div class="form-group">
                <label for="contentone">About Counter Area Content:</label>
                <textarea class="field" name="contentone" cols="50" rows="10"  value={{ $about->aboutcounterarea->content }}></textarea>
            </div>
            <div class="form-group">
        <label for="images">About One Image</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="image">
            <label class="custom-file-label" for="images">About One Image</label>
        </div>
    </div>
            <div class="form-group">
                <label for="titlefour">About One Title:</label>
                <input type="text" class="form-control" name="titlefour" value={{ $about->aboutone->title }} />
            </div>
            <div class="form-group">
                <label for="contenttwo">About One Content:</label>
                <input type="text" class="form-control" name="contenttwo" value={{ $about->aboutone->content}} />
            </div>-->

            <input type="hidden" name="id" value = "{{$about->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection