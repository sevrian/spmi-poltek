@extends('layout.index')

@section('content')
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Dashboard</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
           
            
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <!-- ============================================================== -->
    <!-- Sales different chart widgets -->
    <!-- ============================================================== -->
    <!-- .row -->
    <div class="row">
        @foreach ($unit as $item)
        <div class="col-md-12 col-lg-4">
            <div class="white-box">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 class="m-b-0 font-medium">{{ $item->unit}}</h2>
                        <h5 class="text-muted m-t-0">Total Income</h5>
                    </div>
                    <div class="col-sm-6">
                        <h2 class="m-b-0 font-medium">$354.50</h2>
                        <h5 class="text-muted m-t-0">Total Income</h5>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
       


    </div>
    <!-- /.row -->

    <!-- ============================================================== -->
    <!-- Sales, finance & Expance widgets -->
    <!-- ============================================================== -->
    <!-- .row -->

    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
@endsection