<li class="block">
    <div class="row">
        <div class="col-sm-11">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        {{--<select class="js-example-basic-multiplean full-width select2 choosen" id=""  name="item_antara[]" data-placeholder="-- Pilih --" data-init-plugin="select2">--}}
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
                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_antara[]" aria-required="true" value="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0 ,-" required name="pinalti_antara[]" aria-required="true" value="">
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