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
                            <h3 class="card-title">File Details</h3>
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
                                                        File #</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Country
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Visa City</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Visa Number / ID Number</th>

                                                    <th>Visa Sender Name</th>
                                                    <th>Total Number of Visa</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($filesList) && !empty($filesList))
                                                    @forelse ($filesList as $file)
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1"> <b style="font-size: 25px"><a href="{{ isset($file->id) && !empty($file->id) ? url('/file-details').'/'.$file->id : ' ' }}">{{ isset($file->id) && !empty($file->id) ? $file->id : 'N/A' }}</b></a> <br><span style="font-size: 15px">{{ isset($file->created_at) && !empty($file->created_at) ? $file->created_at : 'N/A' }}</span></td>
                                                            <td>{{ isset($file->country) && !empty($file->country) ? $file->country : 'N/A' }}</td>
                                                            <td>{{ isset($file->city) && !empty($file->city) ? $file->city : 'N/A' }}</td>
                                                            @php
                                                                $total_visa_count = 0;
                                                                $employer = DB::table('employer_details')->where('file_id',$file->id)->get();
                                                                $categories = DB::table('categories')->get();
                                                                $employment_details = DB::table('employment_details')->select('*')->where('file_id',$file->id)->get();
                                                                $sender = DB::table('sender_details')->where('file_id',$file->id)->get();
                                                                $employee_details = DB::table('employee_details')->where('file_id',$file->id)->get();
                                                                foreach ($employment_details as $visa) {
                                                                    $total_visa_count = $total_visa_count + $visa->total_visa;

                                                                }

                                                            @endphp
                                                            @forelse ($employer as $item)
                                                            <td style="font-size: 25px">Visa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->visa_number }}<br>ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $item->id_number }}</td>
                                                            @empty
                                                            <td >Not found</td>
                                                            @endforelse
                                                            {{-- {{ $item->id }} --}}
                                                            @forelse ($sender as $item)
                                                            <td >{{ $item->name }}</td>
                                                            @empty

                                                            <td >Not found</td>
                                                            @endforelse
                                                            <td>Total Visa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                {{ $total_visa_count }}
                                                                @foreach ($employment_details as $visa)
                                                                    @foreach ($categories as $item2)
                                                                        @if ($visa->category_id == $item2->id)
                                                                            ({{ $visa->total_visa }} {{ $item2->ar_name }})
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                                <br>Total Stamped Visa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
                                                                <br>Total Remaining Visa &nbsp;&nbsp;&nbsp;
                                                                    {{-- @php
                                                                    $remaining_ar[] = NULL;
                                                                    $count = 0;
                                                                    @endphp
                                                                    @foreach ($employment_details as $employment)
                                                                        @foreach ($employee_details as $employee)
                                                                            @if ($employee->category_id == $employment->category_id)

                                                                                    @foreach ($categories as $item2)
                                                                                        @if ($employee->category_id == $item2->id)
                                                                                            @php
                                                                                                $remaining_ar[$count]['id'] = $item2->id;
                                                                                                $remaining_ar[$count]['count'] = $remaining_ar[$count]['count'] + 1;
                                                                                            @endphp
                                                                                        @endif
                                                                                    @endforeach

                                                                            @endif
                                                                        @endforeach

                                                                @endforeach--}}
                                                                </td>
                                                            <td>
                                                                <form method="get" action="{{ url('add-employee') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ isset($file->id) && !empty($file->id) ? $file->id : '' }}">
                                                                    <button type="submit" class="btn btn-block btn-outline-info btn-sm">Add Employee</button>
                                                                </form>
                                                                <a href="{{ url('file_permission_print').'/'.$file->id }}" type="button" class="btn btn-block btn-outline-info btn-sm">Permission Forms</a>
                                                            </td>
                                                            {{-- <td><button type="button" class="btn btn-block btn-outline-info btn-sm">File Details</button></td> --}}
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

