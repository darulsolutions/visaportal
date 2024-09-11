    @extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Category</h1>
                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!--New File Entry Form Start-->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <!-- form start -->
                            <form role="form" action="{{ url('add-Category') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h6> New Category Entry
                                        <span style="float:right; margin-right:1000px;">
                                            @if(session()->has('success'))
                                                {{ session()->get('success') }}
                                                {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session()->get('success') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div> --}}
                                            @elseif(session()->has('error'))
                                                {{ session()->get('error') }}
                                                {{-- <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ session()->get('error') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div> --}}
                                            @endif
                                        </span>
                                    </h6>


                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="">Name Of Category (English)</label>
                                            <input type="text" name="name" value="{{ old('name') }}"class="form-control {{ isset($errors) && $errors->has('name') ? 'has_error' : ''}}" id="" placeholder="Enter Name Employer (English)">
                                            @if($errors->has('name'))
                                                <span class="error">{{ $errors->first('name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="">Name Of Category (Arabic)</label>
                                            <input type="text" name="ar_name" value="{{ old('ar_name') }}" class="form-control {{ isset($errors) && $errors->has('ar_name') ? 'has_error' : ''}}" id="" placeholder="Enter Name Employer (Arabic)">
                                            @if($errors->has('ar_name'))
                                                <span class="error">{{ $errors->first('ar_name') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" name="" class="btn btn-primary btn_add_file">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- /.content-wrapper -->
    @stop
