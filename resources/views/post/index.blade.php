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
                <li class="active">dokumen</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">

        <div class="col-lg-2 col-sm-4 col-xs-12" style="margin-bottom: 10px">
            <a href="{{ route('post.create')}}" class="btn btn-primary">Tambah Data Dokumen</a>
        </div>

        <div class="col-md-12">

            <div class="white-box">

                <h3 class="box-title">Tabel Dokumen</h3>
                <table id="data-table-post" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Dokumen</th>
                            <th>Kriteria</th>
                            <th>Tahun</th>
                            <th>Nama</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($post as $result => $hasil)

                        @if ($hasil->user->id == Auth::user()->id)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            

                            <td>{{ $hasil->dokumen->dokumen }}</td>
                            
                            <td>{{ $hasil->kriteria->kriteria }}</td>
                            <td>{{ $hasil->tahun->tahun }}</td>
                            <td>{{ $hasil->nama}}</td>
                            <td>{{ $hasil->keterangan }}</td>

                            <td>
                                <form action="{{ route('post.destroy', $hasil->id )}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('post.edit', $hasil->id ) }}" class="btn btn-xs btn-primary btn-flat">Edit</a>
                                    <button type="submit" class="btn btn-xs btn-danger btn-flat">Delete</button>
                                 
                                       
                                       
                                </form>
                            </td>
                        </tr>
                        @endif
                       
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
    $('#data-table-post').DataTable();
    } );
    
        
 </script>
@endpush
{{-- 
$articles =DB::table('articles')
                ->join('categories', 'articles.id', '=', 'categories.id')
                ->join('users', 'users.id', '=', 'articles.user_id')
                ->select('articles.id','articles.title','articles.body','users.username', 'category.name')
                ->get(); --}}