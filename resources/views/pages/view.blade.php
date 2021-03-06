@extends('layouts.app')

    @section('content_header')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0 text-dark">View Data Parkir</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">View Data Parkir</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    @endsection

    @section('main_content')
        <!-- Main content -->
    <section class="content">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Parkir</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Plat Nomor</th>
                        <th>Status</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Biaya Parkir</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      
                      @if(count($parkirs) > 0 )
                        @foreach ($parkirs as $parkir)
                          <tr>
                            <td>{{$parkir->id}}</td>
                            <td>{{$parkir->plat_nomor}}</td>
                            <td>{{$parkir->status}}</td>
                            <td>{{$parkir->created_at}}</td>
                            @if($parkir->created_at->timestamp == $parkir->updated_at->timestamp)
                                <td>Masih Parkir</td>
                            @else
                                <td>{{$parkir->updated_at}}</td>
                            @endif                        
                            <td>Rp. {{$parkir->bayar}}</td>
                            <td>
                            @if($parkir->status == "masuk")
                                <a href="/parkirs/{{$parkir->id}}/edit" class="btn btn-danger btn-xs"><i class="fas fa-edit"></i> KELUAR</a>
                            @else
                                <a href="/parkirs/{{$parkir->id}}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i> DETAIL</a>
                            @endif
                                <!--
                                {!!Form::open(['action' => ['ParkirController@destroy', $parkir->id], 'method' => 'POST'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger btn-xs'])}}
                                {!!Form::close()!!}
                                -->
                            </td>
                          </tr>
                        @endforeach
                      @endif

                      </tbody>
                      <tfoot>
                      <tr>
                        <th>Id</th>
                        <th>Plat Nomor</th>
                        <th>Status</th>
                        <th>Waktu Masuk</th>
                        <th>Waktu Keluar</th>
                        <th>Biaya Parkir</th>
                        <th>Action</th>
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    @endsection

    @section('page_script')
      <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            });
        });
      </script>
    @endsection