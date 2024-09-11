    @extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Sender</h1>
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
                            <form role="form">
                                {{ csrf_field() }}
                                <div class="card-body">
                                    <h6> Sender Details
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

                                    <hr>

                                    <h6 class="add_file_section">Sender Details</h6>
                                    <hr>
                                    <form action="{{ url('') }}" method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="">Visa Sender Name</label>
                                            <input type="text" name="sender_name" value="{{ old('sender_name') }}" class="form-control {{ isset($errors) && $errors->has('sender_name') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('sender_name'))
                                                <span class="error">{{ $errors->first('sender_name') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Nationality</label>
                                            <input type="text" name="sender_nationality" value="{{ old('sender_nationality') }}" class="form-control {{ isset($errors) && $errors->has('sender_nationality') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('sender_nationality'))
                                                <span class="error">{{ $errors->first('sender_nationality') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Mobile Number</label>
                                            <input type="number" name="sender_mobile_number" value="{{ old('sender_mobile_number') }}" class="form-control {{ isset($errors) && $errors->has('sender_mobile_number') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('sender_mobile_number'))
                                                <span class="error">{{ $errors->first('sender_mobile_number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label>City</label>
                                            <select name="sender_city" class="form-control select2 {{ isset($errors) && $errors->has('sender_city') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="1" {{ old('sender_city') && old('sender_city') == "1" ? 'selected' : '' }}>Karachi</option>
                                                <option value="2" {{ old('sender_city') && old('sender_city') == "2" ? 'selected' : '' }}>Islamabad</option>
                                            </select>
                                            @if($errors->has('sender_city'))
                                                <span class="error">{{ $errors->first('sender_city') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-8">
                                            <label>Processing / Recruitment</label>
                                            <select name="processing_recruitment" class="form-control select2 {{ isset($errors) && $errors->has('processing_recruitment') ? 'has_error' : ''}}" style="width: 100%;">
                                                <option value="Processing" {{ old('processing_recruitment') && old('processing_recruitment') == "1" ? 'selected' : '' }}>Processing</option>
                                                <option value="Processing Direct" {{ old('processing_recruitment') && old('processing_recruitment') == "1" ? 'selected' : '' }}>Processing Direct</option>
                                                <option value="Recruitment" {{ old('processing_recruitment') && old('processing_recruitment') == "2" ? 'selected' : '' }}>Recruitment</option>
                                            </select>
                                            @if($errors->has('processing_recruitment'))
                                                <span class="error">{{ $errors->first('processing_recruitment') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Amount</label>
                                            <input type="number" name="amount" value="{{ old('amount') }}" class="form-control {{ isset($errors) && $errors->has('amount') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('amount'))
                                                <span class="error">{{ $errors->first('amount') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Other Expenses</label>
                                            <input type="number" name="other_expense" value="{{ old('other_expense') }}" class="form-control {{ isset($errors) && $errors->has('other_expense') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('other_expense'))
                                                <span class="error">{{ $errors->first('other_expense') }}<span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-8">
                                            <label for="">Other Details</label>
                                            <input type="text" name="other_details" value="{{ old('other_details') }}" class="form-control {{ isset($errors) && $errors->has('other_details') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('other_details'))
                                                <span class="error">{{ $errors->first('other_details') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Permission Number</label>
                                            <input type="text" name="permission_number" value="{{ old('permission_number') }}" class="form-control {{ isset($errors) && $errors->has('permission_number') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('permission_number'))
                                                <span class="error">{{ $errors->first('permission_number') }}<span>
                                            @endif
                                        </div>
                                        <div class="form-group col-2">
                                            <label for="">Permission Date</label>
                                            <input type="date" name="permission_date" value="{{ old('permission_date') }}" class="form-control {{ isset($errors) && $errors->has('permission_date') ? 'has_error' : ''}}" id="" placeholder="">
                                            @if($errors->has('permission_date'))
                                                <span class="error">{{ $errors->first('permission_date') }}<span>
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
