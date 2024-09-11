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
    .viewVisa:hover{
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
                                <h3 class="card-title">File Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>File Number:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    {{-- @php
                                                        var_dump($arr_details['fileDetails']);
                                                        die();
                                                    @endphp --}}
                                                    <label><b>{{ $arr_details['fileDetails'][0]->id }}</b></label>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Country:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['fileDetails'][0]->country }}</b></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>City:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label><b>{{ $arr_details['fileDetails'][0]->city }}</b></label>
                                                </div>
                                            </div>
                                        </div>
                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Date & Time:  </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['fileDetails'][0]->created_at }}</b></label>
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>created_at: </label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>2020-11-20T19:15:22.000000Z</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>updated_at: </label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>2020-11-20T19:15:22.000000Z</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>status:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>Pending</b></label> -->
                                                </div>

                                            </div>
                                        </div>


                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>name:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>Karachi</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>country: </label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>Pakistan</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>city:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>Karachi</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>Expiry Date:</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>N/A</b></label> -->
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>No:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b></b></label>
                                                </div>
                                            </div>
                                        </div>

                                         <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>Website:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b></b></label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-12">

                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                                <h3 class="card-title">Employer Details</h3>
                            </div>
                            <!-- /.card-header -->
                            @if (isset($arr_details['employerDetails'][0]))
                            <div class="card-body">
                                <form role="form">
                                    <div class="row">
                                         <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Name:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['employerDetails'][0]->name }}1</b></label>
                                                </div>
                                            </div>
                                          </div>

                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Arabic Name:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['employerDetails'][0]->ar_name }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Type:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label><b> {{ $arr_details['employerDetails'][0]->type }} </b></label>
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Visa Number:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['employerDetails'][0]->visa_number }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>ID Number:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['employerDetails'][0]->id_number }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Issue Date</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label><b>{{ $arr_details['employerDetails'][0]->issue_date }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>issue_date:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>Issue Date (Arabic) 1</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>id_number</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>122</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>city_id</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>1</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                            <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>address:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>Address Employer 1</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                            <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>fax_number:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>123</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>mobile_number</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>123</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>phone_number:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>03152859740</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>email</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>muzzamil.shahzad15@gmail.com</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                        <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>website </label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>www.google.com</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                         <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>created_at:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>2020-11-20T19:15:22.000000Z</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>updated_at</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>2020-11-20T19:15:22.000000Z</b></label> -->
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>city</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>Karachi</b></label> -->
                                                </div>
                                            </div>
                                          </div>

                                    </div>
                                </form>
                            </div>
                            @endif

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                          <!-- general form elements disabled -->

                          <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                                <h3 class="card-title">Employment Details</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                   <div class="form-group col-12">

                                            <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Employment Details</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="example1"
                                                                class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                                                aria-describedby="example1_info">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                                            rowspan="1" colspan="1" aria-sort="ascending"
                                                                            aria-label="Rendering engine: activate to sort column descending">
                                                                            Category</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Browser: activate to sort column ascending">Job Title
                                                                        </th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Platform(s): activate to sort column ascending">
                                                                            Total Visa</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example1"
                                                                            rowspan="1" colspan="1"
                                                                            aria-label="Engine version: activate to sort column ascending">
                                                                            Salary</th>
                                                                            <th>Contract Period</th>
                                                                        <!-- <th>date</th>
                                                                        <th>employer_name</th>
                                                                        <th>kd_number</th> -->


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if(isset($arr_details['employmentDetails']) && !empty($arr_details['employmentDetails']))
                                                                        @forelse ($arr_details['employmentDetails'] as $employmentDetail)
                                                                            <tr role="row" class="odd">
                                                                                <td tabindex="0" class="sorting_1"> {{ isset($employmentDetail->category) && !empty($employmentDetail->category) ? $employmentDetail->category : 'N/A' }} </td>
                                                                                <td>{{ isset($employmentDetail->job_title) && !empty($employmentDetail->job_title) ? $employmentDetail->job_title : 'N/A' }}</td>
                                                                                <td>{{ isset($employmentDetail->total_visa) && !empty($employmentDetail->total_visa) ? $employmentDetail->total_visa : 'N/A' }}</td>
                                                                                <td>{{ isset($employmentDetail->salary) && !empty($employmentDetail->salary) ? $employmentDetail->salary.' ( Monthly )' : 'N/A' }}</td>
                                                                                <td>
                                                                                    @php
                                                                                        $contract_period = explode (",", $employmentDetail->contract_period);
                                                                                        echo $contract_period[0].' year(s) '.$contract_period[1].' months(s) ';
                                                                                    @endphp
                                                                                </td>
                                                                            </tr>
                                                                        @empty
                                                                            <tr role="row" class="odd text-center">
                                                                                <td colspan="7">Empty...</th>
                                                                            </tr>
                                                                        @endforelse
                                                                    @endisset
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </section>
                                          </div>



                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (right) -->
                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                                <h3 class="card-title">Employee Details</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                   <div class="form-group col-12">
                                            <section class="content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3 class="card-title">Employee Details</h3>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table id="example1"
                                                                class="table table-bordered table-striped dataTable dtr-inline" role="grid"
                                                                aria-describedby="example1_info">
                                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Rendering engine: activate to sort column descending">
                                                        Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Father Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        CNIC</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        District</th>
                                                    {{-- <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending">CSS
                                                        grade</th> --}}
                                                    <th>Province</th><th class="sorting" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="CSS grade: activate to sort column ascending">Action</th>
                                                    <!-- <th>date</th>
                                                    <th>employer_name</th>
                                                    <th>kd_number</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($arr_details['employeeDetails']) && !empty($arr_details['employeeDetails']))
                                                @forelse ($arr_details['employeeDetails'] as $employeeDetail)
                                                    <tr role="row" class="odd">
                                                        <td tabindex="0" class="sorting_1"> {{ isset($employeeDetail->name) && !empty($employeeDetail->name) ? $employeeDetail->name : 'N/A' }} </td>
                                                        <td>{{ isset($employeeDetail->father_name) && !empty($employeeDetail->father_name) ? $employeeDetail->father_name : 'N/A' }}</td>
                                                        <td>{{ isset($employeeDetail->cnic) && !empty($employeeDetail->cnic) ? $employeeDetail->cnic : 'N/A' }}</td>
                                                        <td>{{ isset($employeeDetail->district) && !empty($employeeDetail->district) ? $employeeDetail->district : 'N/A' }}</td>
                                                        <td>{{ isset($employeeDetail->province) && !empty($employeeDetail->province) ? $employeeDetail->province : 'N/A' }}</td>
                                                        <td>
                                                            <button class="viewVisa" style="cursor: pointer;display: block;
                                                            width: 100%;padding: 0.25rem 0.5rem;
                                                            font-size: 0.875rem;
                                                            line-height: 1.5;
                                                            border-radius: 0.2rem;color: #17a2b8;
                                                            border-color: #17a2b8;"  onclick="location.href = '{{ url('employee_details') }}';" > View Visa </button>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr role="row" class="odd text-center">
                                                        <td colspan="7">Empty...</th>
                                                    </tr>
                                                @endforelse
                                            @endisset
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
                                          </div>



                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- Form Element sizes -->
                    @isset($arr_details['senderDetails'][0])

                    <div class="col-md-12">
                        <div class="card card-success">
                            <div class="card-header" style="background-color:#f8f3fd; color:#000; font-weight:bold">
                                <h3 class="card-title">Sender Details</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                   <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Name:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->name }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                   <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Nationality:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->nationality }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                   <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Mobile Number:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->mobile_number }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                     <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Amount:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->amount }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                    <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label> Permission Number</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->permission_number }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                    <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>Permission Date:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->permission_date }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                     <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label>Other Expenses:</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b>{{ $arr_details['senderDetails'][0]->other_expense }}</b></label>
                                                </div>
                                            </div>
                                          </div>

                                      <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>Experience:</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <label><b></b></label>
                                                </div>
                                            </div>
                                          </div>

                                       <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>Other Qualifications:</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>N/A</b></label> -->
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>No. of Persons <br> Granted :</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>N/A</b></label> -->
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <!-- <label>No. of Persons <br> Registered :</label> -->
                                                </div>
                                                <div class="col-md-7">
                                                    <!-- <label><b>N/A</b></label> -->
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-group col-4">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <!-- <label>No. of Reg. <br> Requested :</label> -->
                                                </div>
                                                <div class="col-md-9">
                                                    <!-- <label><b>N/A</b></label> -->
                                                </div>
                                            </div>
                                          </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    @endisset
                </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    @stop
