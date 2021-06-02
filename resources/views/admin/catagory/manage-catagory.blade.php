@extends('admin.master')

@section('admin-title')
  Manage Catagory
@endsection

@section('admin-page-body')

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success" id='manage_category_message'>{{Session::get('message')}}</h4>
        <h4 class="text-center text-success">Manage Category</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th>SL NO</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Publication Status</th>
            <th>Action</th>
          </tr>
          @php($i=1)
          @foreach($categories as $category)
          <tr>
            <td>{{$i++}}</td>
            <td>{{$category->category_name}}</td>
            <td>{{$category->category_description}}</td>
            <td>{{$category->publication_status ==1 ? 'Published' : 'Unpublished'}}</td>
            <td>

            @if($category->publication_status ==1)
              <a href="{{route('unpublish-category', ['category_id'=>$category->category_id])}}" class="btn btn-warning btn-xs"> Unpublish
              <!--  <span class="glyphicon glyphicon-arrow-up"></span> -->
              </a>
            @else
              <a href="{{ route('publish-category', ['category_id'=>$category->category_id])}}" class="btn btn-info btn-lg"> Publish
              <!--  <span class="glyphicon glyphicon-arrow-up"></span>-->
              </a>
            @endif
              <a href="{{ route('edit-category', ['category_id'=>$category->category_id])}}" class="btn btn-success btn-xs">Edit
              <!--  <span class="glyphicon glyphicon-edit"></span>-->
              </a>
              <a href="{{ route('delete-category', ['category_id'=>$category->category_id])}}" class="btn btn-danger btn-xs">Delete
                <!--<span class="glyphicon glyphicon-trash"></span>-->
              </a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
