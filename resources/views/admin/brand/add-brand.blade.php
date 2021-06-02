@extends('admin.master')

@section('admin-title')
  Add Brand
@endsection

@section('admin-page-body')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="text-center text-success">Add Brand Form</h4>
        </div>
        <div class="panel-body">
          <h4 class="text-center text-success">{{ Session::get('message')}}</h4>

          {{Form::open(['route'=>'new-brand', 'method'=>'POST', "class"=>"form-horizontal"])}}
            <div class="form-group">
              <label class="control-label col-md-3">Brand Name</label>
              <div class="col-md-9">
                <input type="text" name="brand_name" class="form-control"/>
                <span class="text-danger">{{$errors->has('brand_name') ? $errors->first('brand_name') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Brand Description</label>
              <div class="col-md-9">
                <textarea class="form-control" name="brand_description"></textarea>
                <span class="text-danger">{{$errors->has('brand_description') ? $errors->first('brand_description') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Publication Status</label>
              <div class="col-md-9 radio">
                <label><input type="radio" name="publication_status" value="1"/> Published </label>
                <label><input type="radio" name="publication_status" value="0"/> Unpublished </label><br/>
                <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <input type="submit" name="add_brand_btn" class="btn btn-success btn-block" value="Save Brand"/>
              </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>
@endsection
