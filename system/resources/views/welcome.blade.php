@extends('layouts.app')

@section('content')

<div class="full-width">
    <div class="container main-page">
        <div class="col-md-2 first-side">
          <div class="left-sidebar">
            <div class="left-sidebar-title">
              Categories
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
        <div class="col-md-7">
          <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <a href="">
                  <img src="{{ url('images/slider/edited/slide1.png') }}" alt="siliconstore" width="460" height="345">
                </a>
              </div>

              <div class="item">
                <a href="">
                <img src="{{ url('images/slider/edited/slide2.jpg') }}" alt="siliconstore" width="460" height="345">
                </a>
              </div>
            
              <div class="item">
                <a href="">
                <img src="{{ url('images/slider/edited/slide3.jpg') }}" alt="Flower" width="460" height="345">
                </a>
              </div>

              <div class="item">
                <a href="">
                <img src="{{ url('images/slider/edited/slide4.jpg') }}" alt="Flower" width="460" height="345">
                </a>
              </div>
            </div>
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
        <div class="menu-area"> Women's Clothings 
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
              <span class="menu-name">Women's Clothings</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',1) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
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
                @foreach(App\Items::where('category_id',1)->where('tag_id',4)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',1)->where('tag_id',5)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',1)->where('tag_id',6)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',1)->where('tag_id',7)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',1)->where('tag_id',8)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                        <div>
                          <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                        </div> 
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
              <div class="item">
                @foreach(App\Items::where('category_id',1)->where('tag_id',9)->orderBy('created_at','desc')->paginate(4) as $item)
                  <div class="col-sm-3">
                    <div class="product">
                      <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                      <div class="item-sub">
                        <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                        <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                        <p><a href="">{{ $cats->where('id',1)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
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



<!-- Men's Clothings -->
      <div class="container other-side item-orange">
        <div class="menu-area"> Men's Clothings 
          <div class="pull-right">
            <a href="#carouselmen" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carouselmen" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Men's Clothings</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',2) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
            <div class="col-md-10 product-list">
              <div id="carouselmen" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    @foreach(App\Items::where('category_id',2)->where('tag_id',10)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',2)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',2)->where('tag_id',11)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',2)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',2)->where('tag_id',12)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',2)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',2)->where('tag_id',14)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',2)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
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




          <!-- Men's Clothings -->
      <div class="container other-side item-blue">
        <div class="menu-area"> Phone And Tablets
          <div class="pull-right">
            <a href="#carouselph" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carouselph" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Phone And Tablets</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',9) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
            <div class="col-md-10 product-list">
              <div id="carouselph" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    @foreach(App\Items::where('category_id',9)->where('tag_id',16)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',9)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',9)->where('tag_id',17)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',9)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',9)->where('tag_id',18)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',9)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',9)->where('tag_id',19)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',9)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
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





          <!-- Men's Clothings -->
      <div class="container other-side item-light-blue">
        <div class="menu-area"> Computers
          <div class="pull-right">
            <a href="#carousecm" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carousecm" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Computers</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',10) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
            <div class="col-md-10 product-list">
              <div id="carouselcm" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    @foreach(App\Items::where('category_id',10)->where('tag_id',26)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',10)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',10)->where('tag_id',27)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',10)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',10)->where('tag_id',28)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',10)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',10)->where('tag_id',32)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',10)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
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





            <!-- Men's Clothings -->
      <div class="container other-side item-purple">
        <div class="menu-area">Electronics
          <div class="pull-right">
            <a href="#carouselelect" role="button" data-slide="prev">
               <span class="fa fa-angle-left navit"></span>
            </a>  
            <a href="#carouselelect" role="button" data-slide="next">
              <span class="fa fa-angle-right navit"></span>
            </a>
          </div>
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">Electronics</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',11) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
            <div class="col-md-10 product-list">
              <div id="carouselelect" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    @foreach(App\Items::where('category_id',11)->where('tag_id',22)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',11)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',11)->where('tag_id',23)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',11)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',11)->where('tag_id',24)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',11)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
                            <div>
                              <a href="{{ url('add_cart/'.$item->id) }}"><button class="addtocart">ADD TO CART</button></a>
                            </div> 
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="item">
                    @foreach(App\Items::where('category_id',11)->where('tag_id',25)->orderBy('created_at','desc')->paginate(4) as $item)
                      <div class="col-sm-3">
                        <div class="product">
                          <img src="{{ url('images/products/'.$item->photo) }}" alt="siliconstore">
                          <div class="item-sub">
                            <h3><a href="{{ url('product-detail/'.$item->id) }}">{{ $item->product_name }}</a></h3>
                            <p>{!! str_limit($item->description, $limit = 30, $end = '....... ') !!}</p>
                            <p><a href="">{{ $cats->where('id',11)->first()->name }}</a><span class="pull-right">₦{{ $item->price }} </span></p>
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
