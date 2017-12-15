@extends('layouts.master')

@section('head_extra')
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset(('assets/modules/erp/css/process.css')) }}"/>
    <script src="{{ asset(('assets/modules/erp/js/process.js')) }}"></script>
@endsection

@section('content')
    <div class='row'>
        <div class='col-md-2 tank-container'>
            <div class="tank tank-sm tank-substance-a">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
        <div class='col-md-2 tank-container'>
            <div class="tank tank-sm tank-substance-b">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
        <div class='col-md-2 tank-container'>
            <div class="tank tank-sm tank-substance-c">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
        <div class="col-md-3"></div>
    </div><!-- /.row -->

    <div class="row">
        <div class='col-md-9 tank-container'>
            <div class="tank tank-lg tank-premix">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
    </div>
    <div class="row">
        <div class='col-md-9 col-md-offset-3 tank-container'>
            <div class="tank tank-lg tank-react">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
    </div>

    <div class='row'>
        <div class="col-md-3"></div>

        <div class='col-md-3 tank-container'>
            <div class="tank tank-sm tank-product-a">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
        <div class='col-md-3 tank-container'>
            <div class="tank tank-sm tank-product-b">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
        <div class='col-md-3 tank-container'>
            <div class="tank tank-sm tank-product-c">
                <div class="img-container">
                    <img src="{{ asset('assets/modules/erp/img/tank.png') }}" alt="Tank">
                </div>
                <div class="fluid-level"></div>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

@endsection


<!-- Optional bottom section for modals etc... -->
@section('body_bottom')
@endsection
