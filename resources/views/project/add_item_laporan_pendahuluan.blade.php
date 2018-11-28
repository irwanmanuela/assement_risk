<li class="block">
    <div class="row">
        <div class="col-sm-11">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="js-example-basic-multiplex full-width "  name="item_pendahuluan[]" data-placeholder="-- Pilih --" data-init-plugin="select2">
                            @foreach($data_pendahuluan as $data)
                                <option class="" value="{{ $data->id }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>
                            @endforeach

                        </select>
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
                        <input type="text" class="form-control order" data-error="wajib diisi"  placeholder="0 Month" required name="duration_pendahuluan[]" aria-required="true" value="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control order" data-error="wajib diisi" placeholder="Rp. 0,-" required name="pinalti_pendahuluan[]" aria-required="true" value="">
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
