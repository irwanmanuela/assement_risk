
@extends('base')
@section('content')
<div class="container-fluid container-fixed-lg p-t-15">
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-12 col-middle">
                <h3>Analisa Project</h3>
                {{ Form::open(['method' => 'POST', 'class'=>'p-t-15','route' => ['project.store']]) }}
                    <div class="panel panel-white">

                        <div class="panel-body">
                            <div class="m-t-10">
                                <input type="hidden"  id="type"  name="type" value="1">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="category" class="control-label">Supplier</label>
                                            <select class="js-example-basic-multiple full-width select2" id="supplier"  name="supplier" data-placeholder="-- Pilih --" data-init-plugin="select2">
                                                <option value="-">-</option>
                                                <option value="1"  selected>asdasd</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="category" class="control-label">Durasi Stock</label>
                                            <select class="js-example-basic-multiple full-width select2" id="duration"  name="duration" data-placeholder="-- Pilih --" data-init-plugin="select2">
                                                <option value="0">-</option>
                                                <option value="7">1 Minggu</option>
                                                <option value="14">2 Minggu</option>
                                                <option value="30">1 Bulan</option>
                                                <option value="60">2 Bulan</option>
                                                <option value="90">3 Bulan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label class="control-label">&nbsp;</label>
                                            <button type="button" class="btn btn-default btn-gray recommendation btn-block">Rekomendasi</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="send_date" class="control-label">Tanggal & Waktu Pesan</label>
                                            <div class="input-prepend input-group">
                                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                <input type="text" data-error="Tanggal & Waktu harus diisi" class="form-control rangedate" name="order_date" id="daterangepicker" class="form-control" value="{{ "now"|date("d M Y H:i:s") }}" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="send_date" class="control-label">Estimasi Tanggal & Waktu Tiba</label>
                                            <div class="input-prepend input-group">
                                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                <input type="text" data-error="Tanggal & Waktu harus diisi" class="form-control rangedate" name="eta_date" id="daterangepicker" class="form-control" value="{{ "now"|date("d M Y H:i:s") }}" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="stock" class="control-label">Customer PO Number</label>
                                            <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Document Number" value="asdasd">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="doc_type" class="control-label">PO Type</label>
                                            <select class="js-example-basic-multiple full-width select2" id="doc_type"  name="doc_type" data-init-plugin="select2">
                                                <option value="PURCHASE ORDER" >PURCHASE ORDER</option>
                                                <option value="RETURN NOTE" }>RETURN NOTE</option>
                                                <option value="TRANSFER NOTE" >TRANSFER NOTE</option>
                                                <option value="CHANGE SKU" >CHANGE SKU</option>
                                                <option value="ADJUSTMENT" >ADJUSTMENT</option>
                                                <option value="TRANSFER GOOD" >TRANSFER GOOD</option>
                                                <option value="TRANSFER BAD" >TRANSFER BAD</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="stock" class="control-label">Catatan</label>
                                    <textarea class="form-control" id="notes" name="notes" placeholder="catatan tambahan " rows="3" aria-invalid="false">asdasd</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="mixed-data">
                                            <ol class="list-inline list-block-mode">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Barang yang dipesan</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label">Jumlah</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                            <ol class="list-inline list-block-mode list-items">
                                                <li class="block">
                                                    <div class="row">
                                                        <div class="col-sm-11">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <select class="js-example-basic-multiple full-width select2 choosen" id=""  name="item_var[]" data-placeholder="-- Pilih --" data-init-plugin="select2">
                                                                            <option></option>

                                                                            <option class="" value="1" selected data-id = "1">asdasdasd</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0" required name="order[]" aria-required="true" value="1">
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
                                                                <div class="col-sm-12">
                                                                    <button class="btn btn-default btn-gray m-r-10 add-more-item bold600" type="button"><i class="fa fa-plus-circle"></i> Tambah</button>
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