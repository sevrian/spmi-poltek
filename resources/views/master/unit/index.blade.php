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
           <h4 class="page-title">Master Data</h4> </div>
       <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
           
           <ol class="breadcrumb">
               <li><a href="#">Dashboard</a></li>
               <li class="active">Daftar Unit</li>
           </ol>
       </div>
       <!-- /.col-lg-12 -->
   </div>
   <div class="row">
      <div class="col-lg-2 col-sm-4 col-xs-12" style="margin-bottom: 10px">
         <a href="{{ route('unit.create')}}" class="btn btn-block btn-primary">Tambah Data</a>
     </div>
     
       <div class="col-md-12">
         
           <div class="white-box">
              
               <h3 class="box-title">Tabel Master Unit</h3> 
               <table id="data-table-unit" class="display" style="width:100%">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th style="width:80%"">Nama Unit</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($unit as $result => $hasil)
                     <tr>
                        <td>{{ $result + $unit->firstitem() }}</td>
                        <td>{{ $hasil->unit }}</td>
                        <td>
                           <form action="{{ route('unit.destroy', $hasil->id )}}" method="POST">
                              @csrf
                              @method('delete')
                           <a href="{{ route('unit.edit', $hasil->id ) }}" class="btn btn-primary btn-sm">Edit</a>
                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
            
                  </tbody>
               </table>
               {{ $unit->links() }}
            
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
    $('#data-table-unit').DataTable();
    } );
    
        
 </script>
@endpush

