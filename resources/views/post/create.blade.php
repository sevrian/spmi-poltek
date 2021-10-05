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
            <h4 class="page-title">Data Dokumen</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                <li class="active">Dokumen</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Default Basic Forms</h3>
                <p class="text-muted m-b-30 font-13"> All bootstrap element classies </p>
                <form class="form-horizontal" action="{{ route('post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-12">Jenis Dokumen</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="dokumen_id">
                                <option value="" holder>Pilih Dokumen</option>
                                @foreach($dokumen as $result)
                                <option value="{{ $result->id }}">{{  $result->dokumen }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Krteria</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="kriteria_id">
                                <option value="" holder>Pilih Kriteria</option>
                                @foreach($kriteria as $result)
                                <option value="{{ $result->id }}">{{  $result->kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Tahun</label>
                        <div class="col-sm-12">
                            <select class="form-control" name="tahun_id">
                                <option value="" holder>Pilih tahun</option>
                                @foreach($tahun as $result)
                                <option value="{{ $result->id }}">{{  $result->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Nama</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" class="form-control" placeholder="nama dokumen pendukung"> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">keterangan</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="keterangan" rows="5"></textarea>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <label class="col-sm-12">File upload</label>
                        <div class="col-sm-12">
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <button class="btn btn-block btn-danger btn-lg btn-rounded">Submit</button>
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