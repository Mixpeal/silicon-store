@extends('layouts.app')

@section('content')

<div class="full-width">
    <div class="container main-page">
      <div class="bread-crumb"><a href="">Home</a> / <span class="curr"> Cart </span>
      </div>
        <div class="col-md-9">
          @if($saved_cart_items)
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Product Name</th>
                <th>Photo</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Option</th>
              </tr>
            </thead>
            <tbody>
              <?php $sum = 0;?>
                @foreach($saved_cart_items as $key => $item)
                <?php $new = App\Items::where('id',$key)->paginate()->first();
                 ?>
                @if($new)
                <tr>
                  <td><a href="{{ url('product-detail/'.$new->id) }}">{{ $new->product_name }}</a></td>
                  <td class="td-img"><img src="{{ url('images/products/'.$new->photo) }}"></td>
                  <td>₦{{ $new->price }}</td>
                  <td>{{ $item['quantity'] }}
                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#editmyModal{{ $new->id }}"><i class="fa fa-pencil"></i></button>
                    <!-- Edit Modal -->
                    <div id="editmyModal{{ $new->id }}" class="modal fade" role="dialog">
                      <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Update Quantity</h4>
                          </div>
                          <div class="modal-body">
                            
                            <form role="form" method="POST" action="{{ url('update-cart') }}">
                              {{ csrf_field() }}
                              <div class="form-group">
                                <label>Quantity</label>
                                <input type="text" class="form-control" name="quantity" value="{{ $item['quantity'] }}" required>
                                <input type="hidden" class="form-control" name="id" value="{{ $new->id }}" required>
                              </div>
                              <button type="submit" class="btn btn-sm btn-primary">Update Quantity</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td>₦{{ $new->price*$item['quantity'] }}</td>
                  <td>
                    <a href="{{ url('cart/remove/'.$key) }}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                    
                  </td>
                </tr>
                <?php $sum = $sum + $new->price*$item['quantity']; ?>
                @endif
                @endforeach
            </tbody>
          </table>
          @else
          <div class="no-item"> Sorry No item In your cart</div>
          @endif
          <div class="col-md-5"></div>
          <div class="col-md-7 check-out-side">
            <!-- <div class="form-group">
              <label for="pwd">Have Coupon Code? Apply Coupon Code Now:</label>
              <input type="password" class="form-control" id="pwd">
              <button class="btn btn-default" type="submit">
                Apply Coupon
              </button>
            </div> -->
            @if(isset($sum))<h2 class="tprice">Total Price : ₦{{ $sum }}</h2>@endif
            <p><a href="{{ url('/') }}"><button class="btn btn-success">Continue Shopping</button></a>
               @if(isset($sum))<a href="{{ url('/check-out') }}"><button class="btn btn-primary pull-right">Proceed to checkout</button></a>@endif
            </p>
            
          </div>
        </div>
        <div class="col-md-3 right-scroll">
          <div class="panel-menu-title">
              <span class="menu-name">Random Products</span>
            </div>
          <div id="random-pro" class="carousel slide carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                @foreach(App\Items::where('category_id',1)->orderBy('created_at','desc')->paginate(3) as $item)
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ str_limit($item->product_name, $limit = 30,$end = '...') }}</a></h3>
                    <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                    <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                @endforeach
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',2)->orderBy('created_at','desc')->paginate(3) as $item)
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ str_limit($item->product_name, $limit = 30,$end = '...') }}</a></h3>
                    <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                    <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                @endforeach
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',9)->orderBy('created_at','desc')->paginate(3) as $item)
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ str_limit($item->product_name, $limit = 30,$end = '...') }}</a></h3>
                    <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                    <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                @endforeach
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',10)->orderBy('created_at','desc')->paginate(3) as $item)
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ str_limit($item->product_name, $limit = 30,$end = '...') }}</a></h3>
                    <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                    <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                @endforeach
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',11)->orderBy('created_at','desc')->paginate(3) as $item)
                <div class="random-items">
                  <div class="col-xs-4 random-left">
                    <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                  </div>
                  <div class="col-xs-8">
                    <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ str_limit($item->product_name, $limit = 30,$end = '...') }}</a></h3>
                    <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                    <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                  </div>
                </div>
                <div class="clear-fix"></div>
                @endforeach
                <div class="row sub-random">
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="prev">
                      <button> Previous</button>
                    </a>  
                  </div>
                  <div class="col-xs-6">
                    <a href="#random-pro" role="button" data-slide="next">
                      <button> Next</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>


      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> You May Also Like
          <div class="pull-right">
            <a href="#carouseli" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carouseli" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Category</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($cats as $cat)
                <li><a href="{{ url('product/category/'.$cat->id) }}"> {{ $cat->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 product-list">
          <div id="carouseli" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                @foreach(App\Items::where('category_id',1)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',11)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',2)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',9)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',10)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">Women Clothings </a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
          </div>
        </div>
        </div>
        </div>
    </div>





</div>
@endsection
