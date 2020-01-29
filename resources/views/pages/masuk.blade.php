@extends('layouts.app')

    @section('content_header')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>{{$title}}</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Parkir Masuk</li>
                </ol>
                </div>
            </div>
            </div><!-- /.container-fluid -->
        </section>
    @endsection

    @section('main_content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
              <div class="row">
                
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header p-2">
                      <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Parkir Masuk</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content"> 
                        <div class="active tab-pane" id="settings">
                          {!! Form::open(['route' => 'parkirs.store', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                            <div class="form-group row">
                              {{Form::label('plat_nomor', 'Plat Nomor',['class' => 'col-sm-2 col-form-label'])}}
                              <div class="col-sm-10">
                                {{Form::text('plat_nomor','',['class' => 'form-control', 'placeholder' => 'Plat Nomor', 'required'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                  {{Form::hidden('status','masuk',['class' => 'form-control', 'required'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    {{Form::hidden('bayar',2000,['class' => 'form-control', 'required'])}}
                                </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                              </div>
                            </div>
                          {!! Form::close() !!}
                        </div>
                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                  </div>
                  <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    @endsection

    @section('page_script')
        
    @endsection