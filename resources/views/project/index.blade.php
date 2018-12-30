@extends('base')
@section ('page-css')
    <link href="{{asset('pages/css/pages-icons.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/jquery-datatable/media/css/jquery.dataTables.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/datatables-responsive/css/datatables.responsive.css')}}" rel="stylesheet" type="text/css" media="screen" />
@stop
@section('content')
    <div class="page-content-wrapper">
        <!-- START PAGE CONTENT -->
        <div class="content">
            <!-- START CONTAINER FLUID -->
            <div class="container-fluid container-fixed-lg bg-white">
                <!-- START PANEL -->
                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <div class="panel-title">Pages Default Tables Style
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="basicTable">
                                <thead>
                                <tr>
                                    <th style="width:20%">Code</th>
                                    <th style="width:20%">Nama Pasien</th>
                                    <th style="width:20%">Tanggal Jatuh Tempo</th>
                                    <th style="width:15%">Nominal</th>
                                    <th style="width:15%">Status</th>
                                    <th style="width:15%">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $project)
                                <tr>
                                    <td class="v-align-middle ">
                                        <p>{{ $project->name }}</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>{{ $project->type_project }}</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>{{ $project->start_date }}</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>{{ $project->notes }}</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p><span class="">Menunggu Pembayaran</span></p>
                                    </td>
                                    <td class="v-align-middle">
                                        <a id="anchorID" class="btn btn-success btn-cons m-b-10" href="invoice" target="_blank">Cetak Invoice</a>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td class="v-align-middle ">
                                        <p>eko1234</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>Eko</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>7 December 2017</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p>Rp 725,000</p>
                                    </td>
                                    <td class="v-align-middle">
                                        <p><span class="">Menunggu Pembayaran</span></p>
                                    </td>
                                    <td class="v-align-middle">
                                        <a id="anchorID" class="btn btn-success btn-cons m-b-10" href="invoice" target="_blank">Cetak Invoice</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END PANEL -->
            </div>
            <!-- END CONTAINER FLUID -->

        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <p class="small no-margin pull-left sm-pull-reset">
                    <span class="hint-text">Copyright © 2014 </span>
                    <span class="font-montserrat">REVOX</span>.
                    <span class="hint-text">All rights reserved. </span>
                    <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
                </p>
                <p class="small no-margin pull-right sm-pull-reset">
                    <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
@stop
@section('page-script')
    <script src="{{asset('assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/lodash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/datatables.responsive.js')}}"></script>
    <!-- END VENDOR JS -->
@stop