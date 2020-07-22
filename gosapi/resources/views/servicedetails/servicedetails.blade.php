@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Service Details </h1>

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
        <form method="post" action="{{ route('servicedetailss.update') }}" enctype="multipart/form-data">
        
            @csrf
            <div class="form-group">

                <label for="name">Page Name:</label>
                <input type="text" class="form-control" name="name" value={{ $servicedetails->name }} />
            </div>
           
            <div class="form-group">
                <label for="title_one">Title One:</label>
                <input type="text" class="form-control" name="title_one" value={{ $servicedetails->title_one }} />
            </div>

            <div class="form-group">
        <label for="images">Service Image</label>
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="images" name="service_image">
            <label class="custom-file-label" for="images">Service Image</label>
        </div>
    </div>
    <div class="form-group">
                <label for="content_one">Content One:</label>
                <textarea class="field" name="content_one" cols="50" rows="10">{{ $servicedetails->content_one }}</textarea>
            </div>

            <div class="form-group">
                <label for="content_two">Content Two:</label>
                <textarea class="field" name="content_two" cols="50" rows="10">{{ $servicedetails->content_two }}</textarea>
            </div>

            <div class="form-group">
                <label for="content_three">Content Three:</label>
                <textarea class="field" name="content_three" cols="50" rows="10"  >{{ $servicedetails->content_three }}</textarea>
            </div>
            <div class="form-group">
                <label for="title_two">Title Two:</label>
                <input type="text" class="form-control" name="title_two" value={{ $servicedetails->title_two }} />
            </div>
            <div class="form-group">
                <label for="content_four">Content Four:</label>
                <textarea class="field" name="content_four" cols="50" rows="10"  >{{ $servicedetails->content_four }}</textarea>
            </div>

           
            <div class="form-group">
                <label for="list_one">List One:</label>
                <input type="text" class="form-control" name="list_one" value={{ $servicedetails->list_one}} />
            </div>
            <div class="form-group">
                <label for="list_two">List Two:</label>
                <input type="text" class="form-control" name="list_two" value={{ $servicedetails->list_two }} />
            </div>
            <div class="form-group">
                <label for="list_three">List Three:</label>
                <input type="text" class="form-control" name="list_three" value={{ $servicedetails->list_three}} />
            </div>
            <div class="form-group">
                <label for="list_four">List Four:</label>
                <input type="text" class="form-control" name="list_four" value={{ $servicedetails->list_four }} />
            </div>
            <div class="form-group">
                <label for="list_five">List Five:</label>
                <input type="text" class="form-control" name="list_five" value={{ $servicedetails->list_five}} />
            </div>
            <div class="form-group">
                <label for="list_six">List Six:</label>
                <input type="text" class="form-control" name="list_six" value={{ $servicedetails->list_six}} />
            </div>
            <div class="form-group">
                <label for="list_seven">List Seven:</label>
                <input type="text" class="form-control" name="list_seven" value={{ $servicedetails->list_seven }} />
            </div>
            <div class="form-group">
                <label for="list_eight">List Eight:</label>
                <input type="text" class="form-control" name="list_eight" value={{ $servicedetails->list_eight}} />
            </div>
           
          
           

            <div class="form-group">
                <label for="blog_video">Service Video :</label>
                <input type="text" class="form-control" name="service_video" value={{ $servicedetails->service_video}} />
            </div>
            
            <div class="form-group">
                <label for="service_booking_url">Service Booking Url:</label>
                <input type="text" class="form-control" name="service_booking_url" value={{ $servicedetails->service_booking_url}} />
            </div>

            <input type="hidden" name="id" value = "{{$servicedetails->id}}">

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection