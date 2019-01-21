
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
                                {{--<div class="form-group">--}}
                                    {{--<label for="stock" class="control-label">Catatan</label>--}}
                                    {{--<textarea class="form-control" id="notes" name="notes" placeholder="catatan tambahan " rows="3" aria-invalid="false">asdasd</textarea>--}}
                                    {{--<div class="help-block with-errors"></div>--}}
                                {{--</div>--}}
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <ol class="list-block-mode">
                                                <li class="block">
                                                    <div class="row">
                                                        <H4>Laporan Pendahuluan</H4>
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Permasalahan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Deskripsi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Durasi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Pinalti</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <ol class="list-block-mode list-items-pendahuluan">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        {{--<select class="js-example-basic-multiple full-width"  name="item_pendahuluan[]" data-placeholder="-- Pilih --" data-init-plugin="select2">--}}
                                                                            {{--<option></option>--}}
                                                                            {{--@foreach($data_pendahuluan as $data)--}}
                                                                                {{--<option class="" value="{{ $data->id }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>--}}
                                                                            {{--@endforeach--}}

                                                                        {{--</select>--}}

                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Masalah" required name="item_pendahuluan[]" aria-required="true" value="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Deskripsi" required name="desc_pendahuluan[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_pendahuluan[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0,-" required name="pinalti_pendahuluan[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <button type="button" class="remove-invite btn btn-danger btn-sm" aria-hidden="true"><i class="pg-close"></i>x
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <div class="clearfix"></div>

                                            <ol class="list-inline list-block-mode ">
                                                <li class="block">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-12 m-l-45">
                                                                    <button class="btn btn-default btn-gray m-r-10 add-more-item-pendahuluan bold600" type="button"><i class="fa fa-plus-circle"></i> Tambah</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1"></div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <ol class="list-block-mode">
                                                <li class="block">
                                                    <div class="row">
                                                        <H4>Laporan Antara</H4>
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Permasalahan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Deskripsi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Durasi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Pinalti</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <ol class="list-block-mode list-items-antara">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        {{--<select class="js-example-basic-multiple full-width select2 choosen" id=""  name="item_antara[]" data-placeholder="-- Pilih --" data-init-plugin="select2">--}}
                                                                            {{--@foreach($data_antara as $data)--}}
                                                                                {{--<option class="" value="{{ $data->id }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>--}}
                                                                            {{--@endforeach--}}

                                                                        {{--</select>--}}
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Masalah" required name="item_antara[]" aria-required="true" value="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Deskripsi" required name="desc_antara[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_antara[]" aria-required="true">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0,-" required name="pinalti_antara[]" aria-required="true" >
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <button type="button" class="remove-invite btn btn-danger btn-sm" aria-hidden="true"><i class="pg-close"></i>x
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <div class="clearfix"></div>

                                            <ol class="list-inline list-block-mode ">
                                                <li class="block">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-12 m-l-45">
                                                                    <button class="btn btn-default btn-gray m-r-10 add-more-item-antara bold600" type="button"><i class="fa fa-plus-circle"></i> Tambah</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1"></div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <ol class="list-block-mode">
                                                <li class="block">
                                                    <div class="row">
                                                        <H4>Laporan Draft Akhir</H4>
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Permasalahan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Deskripsi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Durasi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Pinalti</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <ol class="list-block-mode list-items-draft-akhir">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">

                                                                        {{--<select class="js-example-basic-multiple full-width select2 choosen" id=""  name="item_draft_akhir[]" data-placeholder="-- Pilih --" data-init-plugin="select2">--}}
                                                                            {{--<option></option>--}}
                                                                            {{--@foreach($data_draft_akhir as $data)--}}
                                                                                {{--<option class="" value="{{ $data->id }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>--}}
                                                                            {{--@endforeach--}}

                                                                        {{--</select>--}}

                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Masalah" required name="item_draft_akhir[]" aria-required="true" value="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Deskripsi" required name="desc_draft_akhir[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_draft_akhir[]" aria-required="true">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0,-" required name="pinalti_draft_akhir[]" aria-required="true" >
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <button type="button" class="remove-invite btn btn-danger btn-sm" aria-hidden="true"><i class="pg-close"></i>x
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <div class="clearfix"></div>

                                            <ol class="list-inline list-block-mode ">
                                                <li class="block">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-12 m-l-45">
                                                                    <button class="btn btn-default btn-gray m-r-10 add-more-item-draft-akhir bold600" type="button"><i class="fa fa-plus-circle"></i> Tambah</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1"></div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <ol class="list-block-mode">
                                                <li class="block">
                                                    <div class="row">
                                                        <H4>Laporan Akhir</H4>
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Permasalahan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Deskripsi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Durasi</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Pinalti</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <ol class="list-block-mode list-items-akhir">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-4">
                                                                    <div class="form-group">
                                                                        {{--<select class="js-example-basic-multiple full-width select2 choosen" id=""  name="item_akhir[]" data-placeholder="-- Pilih --" data-init-plugin="select2">--}}
                                                                            {{--@foreach($data_akhir as $data)--}}
                                                                                {{--<option class="" value="{{ $data->id }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>--}}
                                                                            {{--@endforeach--}}

                                                                        {{--</select>--}}

                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Masalah" required name="item_akhir[]" aria-required="true" value="">
                                                                            <div class="help-block with-errors"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Deskripsi" required name="desc_akhir[]" aria-required="true" value="">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_akhir[]" aria-required="true">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0,-" required name="pinalti_akhir[]" aria-required="true">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-1">
                                                                    <button type="button" class="remove-invite btn btn-danger btn-sm" aria-hidden="true"><i class="pg-close"></i>x
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>

                                            <div class="clearfix"></div>

                                            <ol class="list-inline list-block-mode ">
                                                <li class="block">
                                                    <div class="row clearfix">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-12 m-l-45">
                                                                    <button class="btn btn-default btn-gray m-r-10 add-more-item-akhir bold600" type="button"><i class="fa fa-plus-circle"></i> Tambah</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1"></div>
                                                    </div>
                                                </li>
                                            </ol>
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
