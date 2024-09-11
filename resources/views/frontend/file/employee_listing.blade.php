@extends('frontend.layout.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

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
                                                        File Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Name
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        E Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Category Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Visa Sender Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Employer Name /Kafil Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Visa Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($employeeList) && !empty($employeeList))
                                                    @forelse ($employeeList as $employee)
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1"> <b style="font-size: 25px"><a href="{{ isset($employee->file_id) && !empty($employee->file_id) ? url('/file-details').'/'.$employee->file_id : ' ' }}">{{ isset($employee->file_id) && !empty($employee->file_id) ? $employee->file_id : 'N/A' }}</b></a> <br><span style="font-size: 15px">{{ isset($employee->created_at) && !empty($employee->created_at) ? $employee->created_at : 'N/A' }}</span></td>
                                                            <td>Name       :&nbsp; {{ isset($employee->name) && !empty($employee->name) ? $employee->name : '' }}<br>
                                                                Father Name:&nbsp; {{ isset($employee->father_name) && !empty($employee->father_name) ? $employee->father_name : '' }}
                                                            </td>
                                                            <td>E Number :&nbsp;{{ isset($employee->E_Number) && !empty($employee->E_Number) ? $employee->E_Number : 'N/A' }}<br>
                                                                Passport :&nbsp;{{ isset($employee->passport) && !empty($employee->passport) ? $employee->passport : 'N/A' }}
                                                            </td>
                                                            @php
                                                                $categories = DB::table('categories')->get();
                                                                $sender = DB::table('sender_details')->where('file_id',$employee->file_id)->get();
                                                                $employer = DB::table('employer_details')->where('file_id',$employee->file_id)->get();


                                                            @endphp
                                                            @forelse ($categories as $item)
                                                            @if ($item->id == $employee->category_id)
                                                                <td >{{ $item->name }}/{{ $item->ar_name }}</td>
                                                            @endif

                                                            @empty
                                                            <td >Not found</td>
                                                            @endforelse

                                                            <td>{{ $sender[0]->name }}</td>

                                                            <td>{{ $employer[0]->name }}</td>

                                                            <td >{{ isset($employee->visa_status) && !empty($employee->visa_status) ? $employee->visa_status : 'N/A' }}</td>
                                                            <td>
                                                                <a href="{{ url('file_permission_print') }}" type="button" class="btn btn-block btn-outline-info btn-sm">Edit Employee</a>
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
<!-- /.content-wrapper -->
@stop

