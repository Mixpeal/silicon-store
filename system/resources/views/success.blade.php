@extends('layouts.app')

@section('content')

<div class="full-width">
    <div class="container main-page">
      <div class="bread-crumb"><a href="">Home</a> / <span class="curr"> Success </span>
      </div>
        <div class="col-md-9">
          <div class="col-md-12">
                <div class="alert alert-block alert-success fade in"> The transaction was successfully made, thanks for shopping with us!!!</div>
            </div>
          <div class="col-md-5"></div>
          <div class="col-md-7 check-out-side">
            <p><a href="{{ url('/') }}"><button class="btn btn-success">Continue Shopping</button></a></p>
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
