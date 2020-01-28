@extends('layouts.app')

    @section('content_header')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1>Update Poem</h1>
                </div>
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Keluar</li>
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
                        <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Poem Edit Form</a></li>
                      </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                      <div class="tab-content"> 
                        <div class="active tab-pane" id="settings">
                          {!! Form::open(['action' => ['ParkirController@update', $parkir->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
                            <div class="form-group row">
                              {{Form::label('title', 'Title',['class' => 'col-sm-2 col-form-label'])}}
                              <div class="col-sm-10">
                                {{Form::text('title', $blog->title,['class' => 'form-control', 'placeholder' => 'Title'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                              {{Form::label('body', 'Body',['class' => 'col-sm-2 col-form-label'])}}
                              <div class="col-sm-10">
                                  {{Form::textarea('body', $blog->body,['class' => 'textarea', 'style' => 'width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;', 'placeholder' => 'Type your poem here...'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                              {{Form::label('location', 'Location',['class' => 'col-sm-2 col-form-label'])}}
                              <div class="col-sm-10">
                                {{Form::text('location', $blog->location,['class' => 'form-control', 'placeholder' => 'Location'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                              {{Form::label('link_photo', 'Link_Photo',['class' => 'col-sm-2 col-form-label'])}}
                              <div class="col-sm-10">
                                {{Form::text('link_photo', $blog->link_photo,['class' => 'form-control', 'placeholder' => 'Link Photo'])}}
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="offset-sm-2 col-sm-10">
                                {{Form::hidden('_method','PUT')}}
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
        <script>
            $(function () {
            // Summernote
            $('.textarea').summernote()
            })
        </script>   
    @endsection