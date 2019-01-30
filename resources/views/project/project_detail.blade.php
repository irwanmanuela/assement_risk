
@extends('base')
@section('content')
<div class="container-fluid container-fixed-lg p-t-15">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12 col-middle">
                <h3>Analisa Project</h3>
                {{ Form::open(['method' => 'POST', 'class'=>'p-t-15','route' => 'save-detail']) }}
                    <div class="panel panel-white">

                        <div class="panel-body">
                            <div class="m-t-10">
                                <input type="hidden"  name="id" value="{{ $id }}">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <div class="container-fluid container-fixed-lg">
                                                <!-- START PANEL -->
                                                <div class="panel panel-transparent">
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-sm-10">
                                                                <h3>Laporan Pendahuluan</h3>
                                                                <p>Jika Solusi tidak sesuai anda dapat melakukan perubahan data dengan mempertimbangkan solusi yang paling sesuai.
                                                                </p>
                                                                @foreach($data_pendahuluan as $pendahuluan)
                                                                    <div>
                                                                        <div class="form-group ">
                                                                            <label for="fname" class="col-sm-3 control-label">Permasalahan</label>
                                                                            <div class="col-sm-9 m-b-10">
                                                                                <input type="text" class="form-control" id="fname" placeholder="" name="name" value="{{ $pendahuluan->activity_name }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-t-10">
                                                                            <label for="name" class="col-sm-3 control-label">Description</label>
                                                                            <div class="col-sm-9 m-b-10">
                                                                                <textarea class="form-control" id="name" placeholder="">{{ $pendahuluan->activity_desc }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-3 control-label">Duration</label>
                                                                            <div class="col-sm-9">
                                                                                {{--<p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>--}}
                                                                                {{--<p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>--}}
                                                                                <div class="row">
                                                                                    <div class="col-sm-1">
                                                                                        <label for="fname" class="col-sm-3 control-label">Month</label>
                                                                                    </div>
                                                                                    <div class="col-sm-5">
                                                                                        <input type="text" class="form-control" placeholder="" value="{{ $pendahuluan->duration_date }}" required>
                                                                                    </div>
                                                                                    <div class="col-sm-1">
                                                                                        <label for="fname" class="col-sm-3 control-label">Pinalti</label>

                                                                                    </div>
                                                                                    <div class="col-sm-5 sm-m-t-10 m-b-10">
                                                                                        <input type="text" placeholder="" class="form-control" value="{{$pendahuluan->pinalty}}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group ">
                                                                            <label for="fname" class="col-sm-3 control-label">Risk</label>
                                                                            <div class="col-sm-9 m-b-10">
                                                                                <input type="text" class="form-control" id="risk" placeholder="" name="risk" value="{{ $pendahuluan->activity_risk }}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group m-t-10">
                                                                            <label for="name" class="col-sm-3 control-label">Solution</label>
                                                                            <div class="col-sm-8 m-b-10">
                                                                                <textarea class="form-control" id="solution" placeholder="">{{ $pendahuluan->persentase  > 0 ? $pendahuluan->activity_solution : "" }}</textarea>
                                                                            </div>
                                                                            <div class="col-sm-1 m-b-10">
                                                                                <a class="btn btn-success"  style="height: 50px; font-size: 20px; text-align: center; padding-top: 15px; margin-left: -5px;" href="{{ url('project/match-detail/'.$pendahuluan->project_id) }}" >{{ $pendahuluan->persentase }} %</a>
                                                                            </div>
                                                                        </div>

                                                                        <br>
                                                                        <hr>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END PANEL -->
                                            </div>
                                            <!-- END CONTAINER FLUID -->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <div class="col-sm-10">
                                                <h3>Laporan Antara</h3>
                                                <p>Jika Solusi tidak sesuai anda dapat melakukan perubahan data dengan mempertimbangkan solusi yang paling sesuai.
                                                </p>
                                                @foreach($data_antara as $antara)
                                                    <div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Permasalahan</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="fname" placeholder="" name="name" value="{{ $antara->activity_name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <textarea class="form-control" id="name" placeholder="">{{ $antara->activity_desc }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Duration</label>
                                                            <div class="col-sm-9">
                                                                {{--<p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>--}}
                                                                {{--<p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>--}}
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Month</label>
                                                                    </div>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" placeholder="" value="{{ $antara->duration_date }}" required>
                                                                    </div>
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Pinalti</label>

                                                                    </div>
                                                                    <div class="col-sm-5 sm-m-t-10 m-b-10">
                                                                        <input type="text" placeholder="" class="form-control" value="{{$antara->pinalty}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Risk</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="risk" placeholder="" name="risk" value="{{ $antara->activity_risk }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Solution</label>
                                                            <div class="col-sm-8 m-b-10">
                                                                <textarea class="form-control" id="solution" placeholder="">{{ $antara->persentase > 0 ? $antara->activity_solution : "" }}</textarea>
                                                            </div>
                                                            <div class="col-sm-1 m-b-10">
                                                                <a class="btn btn-success"  style="height: 50px; font-size: 20px; text-align: center; padding-top: 15px; margin-left: -5px;" href="{{ url('project/match-detail/'.$antara->project_id) }}" >{{ $antara->persentase }} %</a>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <hr>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <div class="col-sm-10">
                                                <h3>Laporan Draft Akhir</h3>
                                                <p>Jika Solusi tidak sesuai anda dapat melakukan perubahan data dengan mempertimbangkan solusi yang paling sesuai.
                                                </p>
                                                @foreach($data_draft_akhir as $draft_akhir)
                                                    <div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Permasalahan</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="fname" placeholder="" name="name" value="{{ $draft_akhir->activity_name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <textarea class="form-control" id="name" placeholder="">{{ $draft_akhir->activity_desc }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Duration</label>
                                                            <div class="col-sm-9">
                                                                {{--<p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>--}}
                                                                {{--<p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>--}}
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Month</label>
                                                                    </div>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" placeholder="" value="{{ $draft_akhir->duration_date }}" required>
                                                                    </div>
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Pinalti</label>

                                                                    </div>
                                                                    <div class="col-sm-5 sm-m-t-10 m-b-10">
                                                                        <input type="text" placeholder="" class="form-control" value="{{$draft_akhir->pinalty}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Risk</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="risk" placeholder="" name="risk" value="{{ $draft_akhir->activity_risk }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Solution</label>
                                                            <div class="col-sm-8 m-b-10">
                                                                <textarea class="form-control" id="solution" placeholder="">{{ $draft_akhir->persentase > 0 ? $draft_akhir->activity_solution : "" }}</textarea>
                                                            </div>
                                                            <div class="col-sm-1 m-b-10">
                                                                <a id="" class="btn btn-success"  style="height: 50px; font-size: 20px; text-align: center; padding-top: 15px; margin-left: -5px;" href="{{ url('project/match-detail/'.$draft_akhir->project_id) }}" >{{ $draft_akhir->persentase }} %</a>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <hr>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <div class="col-sm-10">
                                                <h3>Laporan Akhir</h3>
                                                <p>Jika Solusi tidak sesuai anda dapat melakukan perubahan data dengan mempertimbangkan solusi yang paling sesuai.
                                                </p>
                                                @foreach($data_akhir as $akhir)
                                                    <div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Permasalahan</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="fname" placeholder="" name="name" value="{{ $akhir->activity_name }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Description</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <textarea class="form-control" id="name" placeholder="">{{ $akhir->activity_desc }}</textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label">Duration</label>
                                                            <div class="col-sm-9">
                                                                {{--<p>Have you Worked at page Inc. before, Or joined the Pages Supirior Club?</p>--}}
                                                                {{--<p class="hint-text small">If yes State which Place, if yes note date and Job CODE / Membership Number</p>--}}
                                                                <div class="row">
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Month</label>
                                                                    </div>
                                                                    <div class="col-sm-5">
                                                                        <input type="text" class="form-control" placeholder="" value="{{ $akhir->duration_date }}" required>
                                                                    </div>
                                                                    <div class="col-sm-1">
                                                                        <label for="fname" class="col-sm-3 control-label">Pinalti</label>

                                                                    </div>
                                                                    <div class="col-sm-5 sm-m-t-10 m-b-10">
                                                                        <input type="text" placeholder="" class="form-control" value="{{$akhir->pinalty}}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="fname" class="col-sm-3 control-label">Risk</label>
                                                            <div class="col-sm-9 m-b-10">
                                                                <input type="text" class="form-control" id="risk" placeholder="" name="risk" value="{{ $akhir->activity_risk }}" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-t-10">
                                                            <label for="name" class="col-sm-3 control-label">Solution</label>
                                                            <div class="col-sm-8 m-b-10">
                                                                <textarea class="form-control" id="solution" placeholder="">{{ $akhir->persentase > 0 ? $akhir->activity_solution : "" }}</textarea>
                                                            </div>
                                                            <div class="col-sm-1 m-b-10">
                                                                <a class="btn btn-success"  style="height: 50px; font-size: 20px; text-align: center; padding-top: 15px; margin-left: -5px;" href="{{ url('project/match-detail/'.$akhir->project_id) }}" >{{ $akhir->persentase }} %</a>
                                                            </div>
                                                        </div>

                                                        <br>
                                                        <hr>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-blue m-l-10 pull-right save">Simpan</button>
                            <a href="#" class="btn btn-default pull-right">Batal</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')

    <script src="assets/js/form_layouts.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
<script>
    $("body").on('click', '.add-more-item-pendahuluan', function() {
        if($(".list-items li").length < 1001) {
            var url = "{{ ("/project/add-item-pendahuluan") }}";

            $.get(url, function(data) {
                $(".list-items-pendahuluan").append(data);


                $(".js-example-basic-multiplex").select2();
                $("#pendahuluan").select2();
                $(".no-item").remove();
            }).done(function() {
            });
        } else {
            $(".add-more-item").attr('disabled', true);
        }
    });

    $("body").on('click', '.add-more-item-antara', function() {
        if($(".list-items li").length < 1001) {
            var url = "{{ ("/project/add-item-antara") }}";

            $.get(url, function(data) {
                $(".list-items-antara").append(data);
                $("#pendahuluan").select2("destroy").select2({});
                $(".js-example-basic-multiplean").select2();
                $(".no-item").remove();
            }).done(function() {
            });
        } else {
            $(".add-more-item").attr('disabled', true);
        }
    });

    $("body").on('click', '.add-more-item-draft-akhir', function() {
        if($(".list-items li").length < 1001) {
            var url = "{{ ("/project/add-item-draft-akhir") }}";

            $.get(url, function(data) {
                $(".list-items-draft-akhir").append(data);
                $("#pendahuluan").select2("destroy").select2({});
                $(".js-example-basic-multipleda").select2();
                $(".no-item").remove();
            }).done(function() {
            });
        } else {
            $(".add-more-item").attr('disabled', true);
        }
    });

    $("body").on('click', '.add-more-item-akhir', function() {

        if($(".list-items li").length < 1001) {
            var url = "{{ ("/project/add-item-akhir") }}";

            $.get(url, function(data) {
                $(".list-items-akhir").append(data);

                $("#pendahuluan").select2("destroy").select2({});
                $(".js-example-basic-multiplea").select2();

                $(".no-item").remove();
            }).done(function() {
            });
        } else {
            $(".add-more-item").attr('disabled', true);
        }
    });



    $("body").on('click', '.remove-invite', function() {
        $(this).parents('li').remove();

        if($(".list-items li").length < 1001) {
            $(".add-more-item").attr('disabled', false);
        }

        $('#createPurchaseOrderForm').validator('destroy').validator();
    });

</script>
@stop
