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
      </div>
    </div>
    <!-- / main header -->
    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
      <!-- stats -->
      <div class="row">
        <div class="col-md-12">
          @if($income->count() > 0)
          <table id="demo-datatables-1" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>Customer Name</th>
                <th>Checkout ID</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              @foreach($income as $item)
              <tr>
                <td>{{ App\User::find($item->user_id)->name }}</td>
                <td>{{ $item->checkout_id }}</td>
                <td>₦{{ $item->price }}</td>
                <td>{{ $item->quantity }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {!! $income->render() !!}
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