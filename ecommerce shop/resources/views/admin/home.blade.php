@extends('admin.admin_layouts')

@section('admin_content')

@php

$date = date('d-m-y');
$today = DB::table('orders')->where('date',$date)->sum('total');

$month = date('F');
$month = DB::table('orders')->where('month',$month)->sum('total');

$year = date('Y');
$year = DB::table('orders')->where('year',$year)->sum('total');

$delevery = DB::table('orders')->where('date',$date)->where('status',3)->sum('total');

$return = DB::table('orders')->where('return_order',2)->sum('total');

$product = DB::table('products')->get();
$brand = DB::table('brands')->get();
$user = DB::table('users')->get();

@endphp

<!-- <div class="container"><br><br><br><br><br><br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->


  <!-- ########## START: MAIN PANEL ########## -->
     <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <!-- <a class="breadcrumb-item" href="index.html"></a> -->
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Orders</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $today }}</h3>
              </div><!-- card-body -->
               
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $month }}</h3>
              </div><!-- card-body -->
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $year }}</h3>
              </div><!-- card-body -->
             
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today Delivered</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $delevery }} </h3>
              </div><!-- card-body -->
             
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <br><br>



  <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-danger">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Return</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$ {{ $return }}</h3>
              </div><!-- card-body -->
               
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Product</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($product)  }}</h3>
              </div><!-- card-body -->
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Brand</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($brand)  }}</h3>
              </div><!-- card-body -->
             
              
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total User</h6>
                <!-- <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a> -->
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <!-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> -->
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">  {{ count($user)  }} </h3>
              </div><!-- card-body -->
             
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->




  
    </div><!-- sl-mainpanel -->
    <br><br><br><br><br><br><br><br><br><br>
        <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">
                    
                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Prepared By: Pushti Depani<i class="fa fa-heart" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
                        <div class="logos ml-sm-auto">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
