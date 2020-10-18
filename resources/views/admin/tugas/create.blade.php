@extends('admin.layout.master')

@section('content')

<link rel="stylesheet" href="{{asset('public/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/themify-icons/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/flag-icon-css/css/flag-icon.min.css')}}">
<link rel="stylesheet" href="{{asset('public/vendors/selectFX/css/cs-skin-elastic.css')}}">

<link rel="stylesheet" href="{{asset('publicassets/css/style.css')}}">



<div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Basic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">


                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-body card-block">
                         
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <strong>Basic Form</strong> Elements
                                                </div>
                                                <div class="card-body card-block">
                                                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                                        <div class="row form-group">
                                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama tugas</label></div>
                                                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                        </div>
                                                 
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label for="select" class=" form-control-label">Kategori Tugas</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <select name="select" id="select" class="form-control">
                                                                        <option value="0">Please select</option>
                                                                        <option value="1">Option #1</option>
                                                                        <option value="2">Option #2</option>
                                                                        <option value="3">Option #3</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="row form-group">
                                                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Keterangan tugas</label></div>
                                                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"><small class="form-text text-muted">This is a help text</small></div>
                                                                </div>
                                                         

                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Status Tugas</label></div>
                                                                <div class="col col-md-9">
                                                                    <div class="form-check-inline form-check">
                                                                        <label for="inline-checkbox1" class="form-check-label ">
                                                                            <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1" value="option1" class="form-check-input">One
                                                                        </label>
                                                                        <label for="inline-checkbox2" class="form-check-label ">
                                                                            <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2" value="option2" class="form-check-input">Two
                                                                        </label>
                                                                        <label for="inline-checkbox3" class="form-check-label ">
                                                                            <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3" value="option3" class="form-check-input">Three
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                    </form>
                                                </div>
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-dot-circle-o"></i> Submit
                                                    </button>
                                                    <button type="reset" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-ban"></i> Reset
                                                    </button>
                                                </div>
                                            </div>
                                         
                            
                                    </div><!-- .animated -->
                                </div><!-- .content -->

                                <script src="{{asset('public/vendors/jquery/dist/jquery.min.js')}}"></script>
                                <script src="{{asset('public/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    
                                <script src="{{asset('public/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
                                <script src="{{asset('public/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>
    
                                <script src="{{asset('public/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
                                <script src="{{asset('public/assets/js/main.js')}}"></script>
    
@endsection