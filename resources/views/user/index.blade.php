@extends('layout.index')
@push('css')
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="{{ url ('plugins/bower_components/sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css">

@endpush
@section('content')
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
                <li class="active">dokuumen</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">

        <div class="col-lg-2 col-sm-4 col-xs-12" style="margin-bottom: 5px">
            <a href="{{ route('user.create')}}" class="btn btn-primary">Tambah Pengguna</a>
        </div>

        <div class="col-md-12">

            <div class="white-box">

                <h3 class="box-title">Tabel Pengguna</h3>
                <table id="data-table-user" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th style="width:5%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $result => $hasil)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $hasil->name }}</td>

                            <td>{{ $hasil->email}}</td>
                            <td>{{ $hasil->role }}</td>
                         
                            

                            <td>
                                <form action="{{ route('user.destroy', $hasil->id )}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('user.edit', $hasil->id ) }}" class="btn btn-xs btn-primary btn-flat">Edit</a>
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat">Delete</button>
                                 
                                       
                                       
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
               

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
@push('js')

<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

@endpush
@push('script')

<script type="text/javascript">

   $(document).ready(function() {
    $('#data-table-user').DataTable();
    } );
    
        
 </script>
@endpush

