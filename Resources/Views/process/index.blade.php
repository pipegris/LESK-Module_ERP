@extends('layouts.master')

@section('head_extra')
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset(('assets/modules/erp/css/process.css')) }}"/>
    <script src="{{ asset(('assets/modules/erp/js/process.js')) }}"></script>
    <script src="{{ asset(('fusioncharts/fusioncharts.js')) }}"></script>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3" id="supply-a"></div>
        <div class="col-md-3" id="supply-b"></div>
        <div class="col-md-3" id="supply-c"></div>
        <div class="col-md-3"></div>
    </div>

    <div class='row'>
        <div class="col-md-9" id="premix"></div>
    </div><!-- /.row -->
    <div class='row'>
        <div class="col-md-9 col-md-offset-3" id="react"></div>
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3" id="product-a"></div>
        <div class="col-md-3" id="product-b"></div>
        <div class="col-md-3" id="product-c"></div>
    </div>

@endsection


<!-- Optional bottom section for modals etc... -->
@section('body_bottom')
@endsection
