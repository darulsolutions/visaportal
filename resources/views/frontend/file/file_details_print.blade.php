@extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
<style>
.table{
    display: table;

}
.heading
    {
        display: table-row;
        font-weight: bold;
        text-align: center;
    }
    .cell
    {
        display: table-cell;
        border: solid;

        border-width: thin;
        padding-left: 5px;
        padding-right: 5px;
    }
    .viewVisa:hover,.printBtn:hover{
        background-color: #17a2b8;
        color: #fff !important;
    }
    /*
    {
        display: table-row;
    } */
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
                                <h3 class="card-title">View Visa Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <div>
                            <form action="" style="padding:30px">
                            <div class="row">
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View Islamabad Embassy Form
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View Karachi Embassy Form
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View Put up Form
                            </div>
                            <div class="col-md-3">
                            
                            <input type="checkbox" style="margin-right:10px">View NBP Form
                            </div>
                            </div>
                            <br>
                            <div class="row">
                            
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View Letter Form
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View ABL Form
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View ABL Front Form
                            </div>
                            <div class="col-md-3">
                            <input type="checkbox" style="margin-right:10px">View ABL Back Form
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
                            border-color: #17a2b8;" > Print </button>
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
