@extends('layouts.app')

@section('content')

<div class="full-width">
      <!-- Women's Clothings -->
      <div class="container other-side women">
        <div class="menu-area"> {{ $cats->where('id',$id)->first()->name }}
        </div>
        <div class="col-md-2">
          <div class="left-sidebar">
            <div class="left-sidebar-tit">
              <span class="menu-name">{{ $cats->where('id',$id)->first()->name }}</span>
            </div>
            <div class="left-sidebar-body">
              <ul>
                @foreach($tags->where('category_id',$id) as $tag)
                <li><a href="{{ url('product/tag/'.$tag->id) }}"> {{ $tag->name }}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-10 product-list">
          <div id="carouseli">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                @foreach($getc as $g)
                <div class="col-sm-3">
                  <div class="product">
                    <img src="{{ url('images/products/'.$g->photo) }}" alt="siliconstore">
                    <div class="item-sub">
                      <h3><a href="{{ url('product-detail/'.$g->id) }}">{{ $g->product_name }}</a></h3>
                      <p>{!! str_limit($g->description, $limit = 30, $end = '....... ') !!}</p>
                      <p><a href="">{{ $cats->where('id',$id)->first()->name }} </a><span class="pull-right">₦{{ $g->price }} </span></p>
                      <div>
                        <a href="{{ url('add_cart/'.$g->id) }}"><button class="addtocart">ADD TO CART</button></a>
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
