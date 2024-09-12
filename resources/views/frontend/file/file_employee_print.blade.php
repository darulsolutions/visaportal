@extends('frontend.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<style>
    .table {
        display: table;

    }

    .heading {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }

    .cell {
        display: table-cell;
        border: solid;

        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }

    .viewVisa:hover,
    .printBtn:hover {
        background-color: #17a2b8;
        color: #fff !important;
    }

    /*
    {
        display: table-row;
    } */
</style>
<style>
    img {
        border: 1px solid #ddd;
        /* Gray border */
        border-radius: 4px;
        /* Rounded border */
        padding: 5px;
        /* Some padding */
        width: 150px;
        /* Set a small width */
    }

    /* Add a hover effect (blue shadow) */
    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
</style>

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card">
                        <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                            <h3 class="card-title">Permission Forms</h3>
                        </div>
                        <div>
                            <form action="" style="padding:30px ;font-size: 20px;font-weight: 500">
                                <div class="row">
                                    <div class="col-md-6 info-box mb-3 bg-warning" style="color:#107896 ;font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Demand Letter</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 info-box mb-3 bg-success" style="color:#107896 ;font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Undertaking</span>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-md-6 info-box mb-3 bg-danger" style="font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Undertaking Regarding Actual</span>
                                            <span class="info-box-text">Expenditure On Recruitment</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 info-box mb-3 bg-info" style="color:#107896 ;font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Application Under Rule (19)</span>
                                            <span class="info-box-text">Emigration Rules 1979</span>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-md-6 info-box mb-3 bg-success" style="background-color:#360590 !important;font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ asset('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Application To Grant a Permission</span>
                                        </div>

                                    </div>
                                    <div class="col-md-6 info-box mb-3 bg-success" style="background-color:#740101 !important;font-weight: bold; padding:30px ;">
                                        <span class="info-box-icon"><input type="checkbox" style="margin-right:10px">
                                        <img src="{{ asset('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text">Permission Performa</span>
                                        </div>

                                    </div>
                                </div>
                                <div style="display: grid;
                            justify-content: end;
                            padding-top: 20px;margin-right: 15%;">
                                    <button class="printBtn" style="cursor: pointer;display: block;
                            width:120px;padding: 0.25rem 0.5rem;
                            font-size: 0.875rem;
                            line-height: 1.5;
                            border-radius: 0.2rem;color: #17a2b8;
                            border-color: #17a2b8;"> Print </button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->

            </div>
        </div>
        <!-- </div> -->
    </section>
</div>
<!-- /.content-wrapper -->
@stop
