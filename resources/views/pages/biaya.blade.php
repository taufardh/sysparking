@extends('layouts.app')

    @section('content_header')
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0 text-dark">Rincian</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/adnotmin">Home</a></li>
                    <li class="breadcrumb-item active">Biaya</li>
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
            <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <div class="row">
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-info">
                      <div class="inner">
                          <h3>{{$parkir->plat_nomor}}</h3>
          
                          <p>Plat Nomor</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-card"></i>
                      </div>
                      
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-6 col-6">
                      <!-- small box -->
                      <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{$total_jam}} Jam, {{$total_menit}} Menit, {{$total_detik}} Detik</sup></h3>
          
                          <p>Lama Parkir</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-ios-clock"></i>
                      </div>
                      
                      </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-12 col-6">
                      <!-- small box -->
                      <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>Rp. {{$parkir->bayar}}</h3>
          
                          <p>Biaya</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-cash"></i>
                      </div>
                      </div>
                  </div>
                  <!-- ./col -->
                  
                  <!-- ./col -->
              </div>
              <!-- /.row -->
              
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection
    
    @section('page_script')
        
    @endsection