@extends('admin.master')

@section('admin-title')
  Edit Product
@endsection

@section('admin-page-body')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="text-center text-success">Edit Product Form</h4>
        </div>
        <div class="panel-body">
          <h4 class="text-center text-success">{{ Session::get('message')}}</h4>

          {{Form::open(['route'=>array('update-product', 'product_id'=>$product->product_id), 'method'=>'POST', "class"=>"form-horizontal", "enctype"=>"multipart/form-data", "name"=>"editProductForm"])}}
            <div class="form-group">
              <label class="control-label col-md-3">Category Name</label>
              <div class="col-md-9">
                <select class='form-control' name='category_id'>
                  <option>----Select Category----</option>
                  @foreach($categories as $category)
                  <option value="{{$category->category_id}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
                <span class="text-danger">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Brand Name</label>
              <div class="col-md-9">
                <select class='form-control' name='brand_id'>
                  <option>----Select Brand----</option>
                  @foreach($brands as $brand)
                  <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                  @endforeach
                </select>
                <span class="text-danger">{{$errors->has('brand_id') ? $errors->first('brand_id') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product Name</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="product_name" value="{{$product->product_name}}"/>
                <span class="text-danger">{{$errors->has('product_name') ? $errors->first('product_name') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product Price</label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}"/>
                <span class="text-danger">{{$errors->has('product_price') ? $errors->first('product_price') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product Quantity</label>
              <div class="col-md-9">
                <input type="number" class="form-control" name="product_quantity" value="{{$product->product_quantity}}"/>
                <span class="text-danger">{{$errors->has('product_quantity') ? $errors->first('product_quantity') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product short Description</label>
              <div class="col-md-9">
                <textarea class="form-control" name="product_short_description">{{$product->product_short_description}}</textarea>
                <span class="text-danger">{{$errors->has('product_short_description') ? $errors->first('product_short_description') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product long Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="editor" name="product_long_description">{{$product->product_long_description}}</textarea>
                <span class="text-danger">{{$errors->has('product_long_description') ? $errors->first('product_long_description') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Product Image</label>
              <div class="col-md-9">
                <input type="file" class="form-control" name="product_image" accept="image/*"/>
                <span class="text-danger">{{$errors->has('product_image') ? $errors->first('product_image') : ''}}</span>
                </br>
                <img src="{{asset($product->product_image)}}" alt="" width="50" height="50"/>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Publication Status</label>
              <div class="col-md-9 radio">
                <label><input type="radio" name="publication_status" value="1" {{$product->publication_status==1 ? 'checked' : ''}}/> Published </label>
                <label><input type="radio" name="publication_status" value="0" {{$product->publication_status==0 ? 'checked' : ''}}/> Unpublished </label><br/>
                <span class="text-danger">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <input type="submit" name="add_brand_btn" class="btn btn-success btn-block" value="Update Product"/>
              </div>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>
  </div>

  <script>
    document.forms['editProductForm'].elements['category_id'].value='{{$product->category_id}}'
    document.forms['editProductForm'].elements['brand_id'].value='{{$product->brand_id}}'
  </script>
@endsection
