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
                            <h3 class="card-title">Categories/Occupation Details</h3>
                        </div>
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
                                                        Categories #</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Categories Name English
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Categories Name Arabic</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(isset($categoriesList) && !empty($categoriesList))
                                                    @forelse ($categoriesList as$row)
                                                        <tr role="row" class="odd">
                                                            <td tabindex="0" class="sorting_1"> <b style="font-size: 25px">#{{ isset($row->id) && !empty($row->id) ?$row->id : 'N/A' }}</b></td>
                                                            <td>{{ isset($row->name) && !empty($row->name) ?$row->name : 'N/A' }}</td>
                                                            <td>{{ isset($row->ar_name) && !empty($row->ar_name) ?$row->ar_name : 'N/A' }}</td>
                                                            <td>
                                                                {{-- <form method="get" action="{{ url('add-employee') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ isset($row->id) && !empty($row->id) ?$row->id : '' }}">
                                                                    <button type="submit" class="btn btn-block btn-outline-info btn-sm">Add Employee</button>
                                                                </form>
                                                                <a href="{{ url('file_permission_print') }}" type="button" class="btn btn-block btn-outline-info btn-sm">Permission Forms</a> --}}
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

