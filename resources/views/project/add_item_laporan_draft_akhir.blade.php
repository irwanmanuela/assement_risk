<li class="block">
    <div class="row">
        <div class="col-sm-11">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <select class="js-example-basic-multipleda full-width select2 choosen" id=""  name="item_draft_akhir[]" data-placeholder="-- Pilih --" data-init-plugin="select2">
                            @foreach($data_draft_akhir as $data)
                                <option class="" value="{{ $data->activity }}" selected data-id = "{{ $data->id }}">{{ $data->activity }}</option>
                            @endforeach
                        </select>

                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Masalah" required name="item_draft_akhir[]" aria-required="true" value="">--}}
                            {{--<div class="help-block with-errors"></div>--}}
                        {{--</div>--}}
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
                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="0 Month" required name="duration_draft_akhir[]" aria-required="true" value="">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="text" class="form-control order" data-error="wajib diisi" id="order" placeholder="Rp. 0,-" required name="pinalti_draft_akhir[]" aria-required="true" value="">
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