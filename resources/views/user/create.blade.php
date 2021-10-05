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
                <li class="active">Daftar Pengguna</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">


        <div class="col-md-6">

            <div class="white-box">

                <h3 class="box-title">Form Pengguna</h3>
                <form action="{{ route('user.store')}}" class="form-horizontal" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-12">Jenis Dokumen</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="unit_id">
                                <option value="" holder>Pilih Unit</option>
                                @foreach($unit as $result)
                                <option value="{{ $result->id }}">{{  $result->unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama</label>
                        <div class="col-md-12">
                            <input type="text" name="name" class="form-control" placeholder="nama "> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama</label>
                        <div class="col-md-12">
                            <input type="email" name="email" class="form-control" placeholder="email"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Input Select</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="role">
                                <option>autor</option>
                                <option>asesor</option>
                               
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">password</label>
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="masukan password"> </div>
                    </div>
                    <button class="btn btn-block btn-danger btn-lg btn-rounded">Submit</button>

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