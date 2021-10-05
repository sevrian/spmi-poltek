@extends('layout.index')

@section('content')
@if(count($errors)>0)
  	@foreach($errors->all() as $error)
  	<div class="alert alert-danger" role="alert">
      {{ $error }}
	</div>  		
  	@endforeach
  @endif

  @if(Session::has('success'))
  	<div class="alert alert-success" role="alert">
      {{ Session('success') }}
	</div> 
  	
  @endif

<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Master Data</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Daftar Tahun</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">


        <div class="col-md-6">

            <div class="white-box">

                <h3 class="box-title">Form Tahun</h3>
                <form action="{{ route('tahun.update', $tahun->id )}}" class="form-horizontal"  method="POST">
                   @csrf
                   @method('PUT')
                    <div class="form-group">
                        <label class="col-md-12">Masukan tahun</label>
                        <div class="col-md-12">
                            <input type="numeric" class="form-control"  name="tahun" value="{{ $tahun->tahun }}" > </div>
                    </div>
                    <div class="form-group col-md-4">
                        <button class="btn btn-block btn-primary">Simpan Tahun</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
@endsection