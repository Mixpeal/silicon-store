@extends('layouts.app')

@section('content')
<div class="container mag">

</div>
<a href="#" class="pro-img">
    <img src="{{ url('img/sample.jpg') }}">
</a>
<nav class="navbar navbar-default navbar-static-top no-marg profile-menu">
            <div class="container profile-menu">
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('register') }}">Timeline</a></li>
                            <li><a href="{{ route('register') }}">Posts</a></li>
                            <li><a href="{{ route('register') }}"><span>21</span> Follows</a></li>
                    </ul>
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                            <li><a href="{{ route('register') }}"><i class="fa fa-send"></i> Follow</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<div class="container magger">
    <div class="row">
        <div class="col-md-12">
           <div class="row">
            <div class="col-md-3 side-one">


            </div>
            <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body my-style">
                            <form class="whats">
                              <div class="form-group">
                                <textarea class="form-control" placeholder="Write on your wall"></textarea>
                              </div>
                              <div class="post-top">
                                <div class="pull-left">
                                <button type="button" class="btn btn-default"><span class="fa fa-camera"></span></button>
                                </div>
                              <div class="pull-right ">
                                  <button type="button" class="btn btn-success">Post</button>
                              </div>
                            </div>
                            </form>
                        </div>
                        <div class="panel-body post-data">
                            <div class="post-info">
                                <a href="#" class="the-img">
                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                <div class="justo">
                                    <div class="justo-inner">
                                    <p style="font-weight:bolder"><a href="#">{{ Auth::user()->name }}</a> <span>5 mins ago</span></p>
                                    <p>This just a sample template for the script that is written, u know lorem ipsum now? dont u?</p>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="button" class="btn btn-default"><span class="fa fa-camera"></span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="post-info">
                                <a href="#" class="the-img">
                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                <div class="justo">
                                    <div class="justo-inner">
                                    <p style="font-weight:bold"><a href="#">{{ Auth::user()->name }}</a> <span>5 mins ago</span></p>
                                    <p>This just a sample template for the script that is written, u know lorem ipsum now? dont u?<a href="#"> #team_mixpealtech</a></p>
                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <a href="#" class="the-img">
                                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                                <p style="font-weight:bold"><a href="#">{{ Auth::user()->name }}</a> <span class="post-time">5 mins ago</span></p>
                                              </div>
                                              <div class="modal-body">
                                                <p>This just a sample template for the script that is written, u know lorem ipsum now? dont u?<a href="#"> #team_mixpealtech</a></p>
                                                <div class="row itsfooter">
                                                    <div class="col-md-4">
                                                        <button type="button" class="btn btn-default">20 <span class="fa fa-thumbs-up"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button type="button" class="btn btn-default"><span class="fa fa-share"></span></button>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="fa fa-bars"></span></button>
                                                    </div>
                                                </div>
                                                <div class="row post-comment">
                                                    <a href="#" class="the-img">
                                                        <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                                        <div class="justo">
                                                            <div class="justo-inner">
                                                                <p style="font-weight:bold"><a href="#">{{ Auth::user()->name }}</a> <span>5 mins ago</span></p>
                                                                <p>This just a sample template for the script that is written, u know lorem ipsum now? dont u?<a href="#"> #team_mixpealtech</a></p>
                                                            </div>
                                                            <div class="input-group">
                    <form method="post" action="{{ url('store_reply') }}" class="form">

                        <input type="hidden" name="to_message" value="">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="text" class="form-control" placeholder="Type your message" name="message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Comment</button>
                      </span>
                    </form>

                    </div>

                                                        </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-default">20 <span class="fa fa-thumbs-up"></span></button>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-default"><span class="fa fa-share"></span></button>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="fa fa-bars"></span></button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="post-info">
                                <a href="#" class="the-img">
                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                <div class="justo">
                                    <div class="justo-inner">
                                    <p style="font-weight:bold"><a href="#">{{ Auth::user()->name }}</a> <span>5 mins ago</span></p>
                                    <p data-toggle="modal" data-target="#myModal">This just a sample template for the script that is written, u know lorem ipsum now? dont u?<a href="#"> #team_mixpealtech</a></p>
                                    </div>
                                    <div class="panel-footer">
                                        <button type="button" class="btn btn-default"><span class="fa fa-camera"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="random-user col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Random Users
                        </div>
                        <div class="panel-body">
                            <div class="grip">
                                <a href="#" class="random-img">
                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                <div class="random-side">
                                    <p style="font-weight:bolder"><a href="#">{{ Auth::user()->name }}</a> </p>
                                    <p>
                                      <button type="button" class="btn btn-success">Message</button>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="grip">
                                <a href="#" class="random-img">
                                <img src="{{ url('img/sample.jpg') }}" width="80px" height="80px"></a>
                                <div class="random-side">
                                    <p style="font-weight:bolder"><a href="#">{{ Auth::user()->name }}</a> </p>
                                    <p>
                                      <button type="button" class="btn btn-success">Message</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
           </div>
        </div>
    </div>
</div>
@endsection
