@extends('admin.layouts.app')

@section('content')
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Upload Product</h1>
        </div>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6">
            <form role="form" method="POST" action="{{ url('admin/add-product') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="product_name" required>
              </div>
              <div class="form-group">
                <label>Product Price (₦)</label>
                <input type="text" class="form-control" name="price" required>
              </div>
              <div class="form-group">
                <label>Select Category</label>
                <select class="form-control" name="category" required>
                  <option>Choose Category</option>
                  @foreach( $cat as $ca)
                  <option value="{{ $ca->id }}">{{ $ca->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Select Tag</label>
                <select class="form-control" name="tag" required>
                  <option>Choose Tag</option>
                  @foreach( $tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Product Image</label>
                <input name="image" type="file" required>
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" required></textarea>
              </div>
              <div class="form-group">
                <label>Available Quantity</label>
                <input type="text" class="form-control" name="quantity" required>
              </div>
              <button type="submit" class="btn btn-sm btn-primary">Upload Product</button>
            </form>
          </div>
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
@endsection