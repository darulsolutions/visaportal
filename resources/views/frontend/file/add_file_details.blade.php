    @extends('frontend.layout.app')
    @section('content')
    <!-- Content Wrapper. Contains page content -->
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
                                                        Rendering engine</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Browser: activate to sort column ascending">Browser
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Platform(s): activate to sort column ascending">
                                                        Platform(s)</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Engine version: activate to sort column ascending">
                                                        Engine version</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1"
                                                        rowspan="1" colspan="1"
                                                        aria-label="CSS grade: activate to sort column ascending">CSS
                                                        grade</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">Gecko</td>
                                                    <td>Firefox 1.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.7</td>
                                                    <td>A</td>
                                                    <td><a href=""><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0" class="sorting_1">Gecko</td>
                                                    <td>Firefox 1.5</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">Gecko</td>
                                                    <td>Firefox 2.0</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td tabindex="0" class="sorting_1">Gecko</td>
                                                    <td>Firefox 3.0</td>
                                                    <td>Win 2k+ / OSX.3+</td>
                                                    <td>1.9</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Camino 1.0</td>
                                                    <td>OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Camino 1.5</td>
                                                    <td>OSX.3+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Netscape 7.2</td>
                                                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                    <td>1.7</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Netscape Browser 8</td>
                                                    <td>Win 98SE+</td>
                                                    <td>1.7</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Netscape Navigator 9</td>
                                                    <td>Win 98+ / OSX.2+</td>
                                                    <td>1.8</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1" tabindex="0">Gecko</td>
                                                    <td>Mozilla 1.0</td>
                                                    <td>Win 95+ / OSX.1+</td>
                                                    <td>1</td>
                                                    <td>A</td>
                                                    <td><a href="#"><button type="button" class="btn btn-block btn-outline-info btn-sm">Details</button></a></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Rendering engine</th>
                                                    <th rowspan="1" colspan="1">Browser</th>
                                                    <th rowspan="1" colspan="1">Platform(s)</th>
                                                    <th rowspan="1" colspan="1">Engine version</th>
                                                    <th rowspan="1" colspan="1">CSS grade</th>
                                                     <th rowspan="1" colspan="1">Details</th>
                                                </tr>
                                            </tfoot>
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
