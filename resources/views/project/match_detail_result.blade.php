
@extends('base')
@section('content')
<div class="container-fluid container-fixed-lg p-t-15">
    <div class="row">
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg">
            <div class="panel panel-transparent">
                <div class="panel-heading">
                    <div class="panel-title">Permasalahan Sejenis
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading separator">
                                    <div class="panel-title">
                                        Kecocokan {{ $data_matching[0]->persentase }} %
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Masalah</div>
                                        <h5>{{ $data_matching[0]->activity_name }}</h5>
                                        <p>{{ $data_matching[0]->activity_desc }}</p>
                                    </div>

                                    <div class="panel-heading separator">
                                        <div class="panel-title">Risiko</div>
                                        <p>{{ $data_matching[0]->activity_risk }}</p>
                                    </div>
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Solution</div>
                                        <p>{{ $data_matching[0]->activity_solution }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading separator">
                                    <div class="panel-title">
                                        Kecocokan {{ $data_matching[1]->persentase }} %
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Masalah</div>
                                        <h5>{{ $data_matching[1]->activity_name }}</h5>
                                        <p>{{ $data_matching[1]->activity_desc }}</p>
                                    </div>

                                    <div class="panel-heading separator">
                                        <div class="panel-title">Risiko</div>
                                        <p>{{ $data_matching[1]->activity_risk }}</p>
                                    </div>
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Solution</div>
                                        <p>{{ $data_matching[1]->activity_solution }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading separator">
                                    <div class="panel-title">
                                        Kecocokan {{ $data_matching[2]->persentase }} %
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Masalah</div>
                                        <h5>{{ $data_matching[2]->activity_name }}</h5>
                                        <p>{{ $data_matching[2]->activity_desc }}</p>
                                    </div>

                                    <div class="panel-heading separator">
                                        <div class="panel-title">Risiko</div>
                                        <p>{{ $data_matching[2]->activity_risk }}</p>
                                    </div>
                                    <div class="panel-heading separator">
                                        <div class="panel-title">Solution</div>
                                        <p>{{ $data_matching[2]->activity_solution }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTAINER FLUID -->
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
