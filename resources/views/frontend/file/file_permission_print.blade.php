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

                        <div class="popup-overlay" id="popup-overlay">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content" style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll" >
                                    <br><br><br>
                                    @include('Bashir_Forms.PermissionUndertaking')

                                </div>
                                <div class="row">

                                    <div style="display: grid;
                                    justify-content: end;
                                    padding-top: 20px;margin-right: 15%;">
                                    <button class="printBtn" style="cursor: pointer;display: block;
                                    width:120px;padding: 0.25rem 0.5rem;
                                    font-size: 0.875rem;
                                    line-height: 1.5;
                                    border-radius: 0.2rem;color: #17a2b8;
                                    border-color: #17a2b8;"  onclick="printPageArea('printableArea')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay1">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content1"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.PermissionnewLetter')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea2')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay2">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content2"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.NEW_REQUEST_LETTER_PERMISSION')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea3')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay3">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content3"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.Title')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea4')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay5">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content5"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.Undertaking')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea6')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay6">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content6"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.permission_porforma')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea7')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup-overlay" id="popup-overlay4">
                            <!--Creates the popup content-->
                            <div class="popup-content" id="popup-content4"  style="padding: 5px">
                                <button class="close">X</button>
                                <div class="row" style="height: 80%; overflow: scroll">
                                    <br><br><br>
                                    @include('Bashir_Forms.Demand_Letter')
                                </div>
                                <div class="row">
                                    <div style="display: grid;
                                        justify-content: end;
                                        padding-top: 20px;margin-right: 15%;">
                                                <button class="printBtn" style="cursor: pointer;display: block;
                                        width:120px;padding: 0.25rem 0.5rem;
                                        font-size: 0.875rem;
                                        line-height: 1.5;
                                        border-radius: 0.2rem;color: #17a2b8;
                                        border-color: #17a2b8;" onclick="printPageArea('printableArea5')"> Print </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                            <h3 class="card-title">Permission Forms</h3>
                        </div>
                        <div>
                            <form action="" style="padding:30px ;font-size: 20px;font-weight: 500">
                                <div class="row">
                                    <div class="col-md-3">

                                    </div>
                                    <div class="col-md-4 info-box mb-3 bg-warning " id="open4" style="background-color:rgb(146, 95, 0) !important; color:#107896 ;font-weight: bold; padding:30px; height: 150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px;padding-top:20px ">File Details</span>
                                        </div>

                                    </div>
                                    <div class="col-md-4">

                                    </div>
                                    <div class="col-md-4 info-box mb-3 bg-warning " id='open5' style="color:#107896 ;font-weight: bold; padding:30px; height: 150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px;padding-top:20px ">Demand Letter</span>
                                        </div>

                                    </div>
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-4 info-box mb-3 bg-success "  id="open6"  style="color:#107896 ;font-weight: bold; padding:30px;  height: 150px">
                                        {{-- <span class="info-box-icon"><input type="checkbox" style="margin-right:10px"> --}}
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px;padding-top:20px ">Undertaking</span>
                                        </div>

                                    </div>

                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-md-4 info-box mb-3 bg-danger" id="open" style="font-weight: bold; padding:30px; height:150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px">Undertaking Regarding Actual</span>
                                            <span class="info-box-text" style="font-size: 25px">Expenditure On Recruitment</span>
                                        </div>

                                    </div>

                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-4 info-box mb-3 bg-info" id="open2" style="color:#107896 ;font-weight: bold; padding:30px; height:150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px">Application Under Rule (19)<br>
                                                    Emigration Rules 1979</span>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <div class="row">

                                    <div class="col-md-4 info-box mb-3 bg-success" id="open3"  style="background-color:#360590 !important;font-weight: bold; padding:30px;  height:150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px">Application To Grant <br> a Permission</span>
                                        </div>

                                    </div>

                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-4 info-box mb-3 bg-success" id="open7" style="background-color:#740101 !important;font-weight: bold; padding:30px;  height:150px">
                                        <span class="info-box-icon">
                                        <img src="{{ url('/frontend/images/download.png') }}" alt="thumbnail"></span>
                                        &nbsp;&nbsp;
                                        <div class="info-box-content">
                                            <span class="info-box-text" style="font-size: 25px">Permission Performa</span>
                                        </div>

                                    </div>
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
<!-- /.content-wrapper --><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#open").on("click", function() {
  $("#popup-overlay, #popup-content").addClass("active");
});
$("#open3").on("click", function() {
  $("#popup-overlay2, #popup-content2").addClass("active");
});
    $("#open2").on("click", function() {
  $("#popup-overlay1, #popup-content1").addClass("active");
});
$("#open4").on("click", function() {
  $("#popup-overlay3, #popup-content3").addClass("active");
});
$("#open5").on("click", function() {
  $("#popup-overlay4, #popup-content4").addClass("active");
});
$("#open6").on("click", function() {
  $("#popup-overlay5, #popup-content5").addClass("active");
});

$("#open7").on("click", function() {
  $("#popup-overlay6, #popup-content6").addClass("active");
});
//removes the "active" class to .popup and .popup-content when the "Close" button is clicked
$(".close, .popup-overlay").on("click", function() {
  $(".popup-overlay, .popup-content").removeClass("active");
});

});
function printPageArea(printid){
    var divToPrint = document.getElementById(printid);
       var popupWin = window.open('', '_blank',);
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
}
</script>
<style>

  .popup-overlay {
    /*Hides pop-up when there is no "active" class*/
    visibility: hidden;
    position: absolute;
    background: #ffffff;
    border: 3px solid #666666;
    width: 8.5in;
    height: 10in;
    z-index: 1;
    left: 25%;
  }

  .popup-overlay.active {
    /*displays pop-up when "active" class is present*/
    visibility: visible;
    text-align: center;
  }

  .popup-content {
    /*Hides pop-up content when there is no "active" class */
    visibility: hidden;
  }

  .popup-content.active {
    /*Shows pop-up content when "active" class is present */
    visibility: visible;
  }

  button {
    display: inline-block;
    vertical-align: middle;
    border-radius: 30px;
    margin: .20rem;
    font-size: 1rem;
    color: #666666;
    background: #ffffff;
    border: 1px solid #666666;
  }

  button:hover {
    border: 1px solid #666666;
    background: #666666;
    color: #ffffff;
  }
  </style>
@stop
