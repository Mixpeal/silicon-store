@extends('admin.layouts.app')

@section('content')
  <!-- main -->
  <div class="col">
    <!-- main header -->
    <div class="bg-light lter b-b wrapper-md">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3 text-black">Products</h1>
          
        </div>
          <p><a href="{{ url('admin/new-product') }}"><button class="btn btn-success pull-right">Add Product</button></a></p>
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          @if($items->count() > 0)
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Description</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                <td>{{ $item->product_name }}</td>
                <td class="td-img"><img src="{{ url('images/products/'.$item->photo) }}"></td>
                <td>₦{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->category_id }}</td>
                <td>{{ $item->description }}</td>
                <td>
                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deletemyModal{{ $item->id }}"><i class="fa fa-trash-o "></i></button>
                  <!-- Delete Modal -->
                  <div id="deletemyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Delete Tag</h4>
                        </div>
                        <div class="modal-body">
                            <a href="{{ url('admin/product/remove/'.$item->id ) }}"><button type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            <button  class="btn btn-default" data-dismiss="modal" type="submit" class="btn btn-sm btn-primary">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>

                  <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editmyModal{{ $item->id }}"><i class="fa fa-pencil"></i></button>
                  <!-- Edit Modal -->
                  <div id="editmyModal{{ $item->id }}" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Edit Product</h4>
                        </div>
                        <div class="modal-body">
                          
                          <form role="form" method="POST" action="{{ url('admin/update_product') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <label>Product Name</label>
                              <input type="text" class="form-control" name="product_name" value="{{ $item->product_name }}" required>
                              <input type="hidden" class="form-control" name="id" value="{{ $item->id }}">
                            </div>
                            <div class="form-group">
                              <label>Product Price (₦)</label>
                              <input type="text" class="form-control" name="price" value="{{ $item->price }}" required>
                            </div>
                            <div class="form-group">
                              <label>Select Category</label>
                              <select class="form-control" name="category" required>
                                <option>Choose Category</option>
                                @foreach( $cat as $ca)
                                <option value="{{ $ca->id }}" selected="@if($ca->id == $item->category_id) selected @endif">{{ $ca->name }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Select Tag</label>
                              <select class="form-control" name="tag" required>
                                <option>Choose Tag</option>
                                @foreach( $tags as $tag)
                                <option value="{{ $tag->id }}" selected="@if($tag->id == $item->tag_id) selected @endif">{{ $tag->name }}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Product Image</label>
                              <input name="image" type="file" required>
                            </div>
                            <div class="form-group">
                              <label>Description</label>
                              <textarea class="form-control" name="description" required>{{ $item->description }}</textarea>
                            </div>
                            <div class="form-group">
                              <label>Available Quantity</label>
                              <input type="text" class="form-control" name="quantity" value="{{ $item->quantity }}" required>
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary">Edit Product</button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $items->render() !!}
          @else
          <div class="no-item"> Sorry No item</div>
          @endif
        </div>
      </div>
      <!-- / stats -->
    </div>
  </div>
  <!-- / main -->
@endsection