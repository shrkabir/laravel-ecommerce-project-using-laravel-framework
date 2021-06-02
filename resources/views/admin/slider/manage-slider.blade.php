@extends('admin.master')

@section('admin-title')
  Manage Slider
@endsection

@section('admin-page-body')

  <div class="row" class="b">
    <div class="col-md-7 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="text-success text-center">Slider Image Form</h4>
        </div>
        <div class="panel-body">
          <h4 class="text-center text-success">{{ Session::get('message')}}</h4>

          {{Form::open(['route'=>'manage-slider-image', 'method'=>'POST', "class"=>"form-horizontal", "enctype"=>"multipart/form-data"])}}
          <div class="form-group">
            <label class="control-label col-md-3">Slider title</label>
            <div class="col-md-8">
              <input type="text" class="form-control" name="slider_title"/>
              <span class="text-danger">{{$errors->has('slider_title') ? $errors->first('slider_title') : ''}}</span>
            </div>
          </div>
            <div class="form-group">
              <label class="control-label col-md-3">Slider Image</label>
              <div class="col-md-8">
                <input type="file" class="form-control" name="slider_image" accept="image/*"/>
                <span class="text-danger">{{$errors->has('slider_image') ? $errors->first('slider_image') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-8 col-md-offset-3">
                <input type="submit" name="add_brand_btn" class="btn btn-success btn-block" value="Add Image to Slider"/>
              </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
    <div col-md-5>
      <div><h4 class="text-info text-center">Slider Image Information</h4></div>
      <h4 class="text-danger">{{Session::get('message')}}</h4>
      <table class="table table-bordered table-striped">
        <tr>
          <th>NO</th>
          <th>Image title</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        @php($i=1)
        @foreach($slider_informations as $slider_information)
        <tr>
          <td>{{$i++}}</td>
          <td>{{$slider_information->slider_title}}</td>
          <td><img src="{{asset($slider_information->slider_image)}}" alt="{{$slider_information->slider_title}}" width="30px" height="30px"></td>
          <td><a href="{{route('delete-slider-image', ['slider_image_id'=>$slider_information->id])}}">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>



@endsection
