
@extends('base')
@section ('page-css')
    <link href="{{asset('assets/plugins/jquery-metrojs/MetroJs.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/codrops-dialogFx/dialog.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/codrops-dialogFx/dialog-sandra.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/owl-carousel/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <link href="{{asset('assets/plugins/jquery-nouislider/jquery.nouislider.css')}}" rel="stylesheet" type="text/css" media="screen" />
@stop
@section('content')

    <!-- START PAGE-CONTAINER -->
    <div class="page-container">
        <!-- START HEADER -->
        <div class="header ">
            <!-- START MOBILE CONTROLS -->
            <!-- LEFT SIDE -->
            <div class="pull-left full-height visible-sm visible-xs">
                <!-- START ACTION BAR -->
                <div class="sm-action-bar">
                    <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
                        <span class="icon-set menu-hambuger"></span>
                    </a>
                </div>
                <!-- END ACTION BAR -->
            </div>
            <!-- RIGHT SIDE -->
            <div class="pull-right full-height visible-sm visible-xs">
                <!-- START ACTION BAR -->
                <div class="sm-action-bar">
                    <a href="#" class="btn-link" data-toggle="quickview" data-toggle-element="#quickview">
                        <span class="icon-set menu-hambuger-plus"></span>
                    </a>
                </div>
                <!-- END ACTION BAR -->
            </div>
            <!-- END MOBILE CONTROLS -->
            <div class=" pull-left sm-table">
                <div class="header-inner">
                    <div class="brand inline">
                        <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    </div>
                </div>
            </div>
            <div class=" pull-right">
                <div class="header-inner">
                    <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
                </div>
            </div>
            <div class=" pull-right">
                <!-- START User Info-->
                <div class="visible-lg visible-md m-t-10">
                    <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                        <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                    </div>
                    <div class="dropdown pull-right">
                        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
                        </button>
                        <ul class="dropdown-menu profile-dropdown" role="menu">
                            <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                            </li>
                            <li><a href="#"><i class="pg-signals"></i> Help</a>
                            </li>
                            <li class="bg-master-lighter">
                                <a href="#" class="clearfix">
                                    <span class="pull-left">Logout</span>
                                    <span class="pull-right"><i class="pg-power"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END User Info-->
            </div>
        </div>
        <!-- END HEADER -->
        <!-- START PAGE CONTENT WRAPPER -->
        <div class="page-content-wrapper">
            <!-- START PAGE CONTENT -->
            <div class="content">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <!-- START CATEGORY -->
                    <div class="gallery">
                        <div class="gallery-filters p-t-20 p-b-10">
                            <ul class="list-inline text-right">
                                <li class="hint-text">Sort by: </li>
                                <li><a href="#" class="active text-master p-r-5 p-l-5">Name</a>
                                </li>
                                <li><a href="#" class="text-master hint-text p-r-5 p-l-5">Views</a>
                                </li>
                                <li><a href="#" class="text-master hint-text p-r-5 p-l-5">Cost</a>
                                </li>
                                <li>
                                    <button class="btn btn-primary m-l-10" data-toggle="filters">More filters</button>
                                </li>
                            </ul>
                        </div>
                        <!-- START GALLERY ITEM -->
                        <!--
                              FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN
                              FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT
                          -->
                        <div class="gallery-item gallery-item-awal first" data-width="1" data-height="2">
                            <!-- START PREVIEW -->

                            <img src="{{asset('assets/img/dashboard/image1.jpg')}}" alt="" class="image-responsive-height" style="height: 100%;">
                            <!-- END PREVIEW -->
                            <!-- START ITEM OVERLAY DESCRIPTION -->
                            <div class="overlayer bottom-left full-width">
                                <div class="overlayer-wrapper item-info ">
                                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                        <div class="">
                                            <h3 class="pull-left bold text-white no-margin">{{ $data_project[0]->name }}</h3>
                                            <div class="clearfix"></div>
                                            <span class="hint-text pull-left text-white">{{ $data_project[0]->type_project }}</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10">
                                            <div class="thumbnail-wrapper d32 circular m-t-5">
                                                <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="no-margin text-white fs-12">{{ $data_project[0]->notes }}</p>
                                                <p class="rating">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star"></i>
                                                </p>
                                            </div>
                                            <div class="pull-right m-t-10">
                                                <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT OVERLAY DESCRIPTION -->
                        </div>
                        <!-- END GALLERY ITEM -->
                        <!-- START GALLERY ITEM -->
                        <!--
                              FOR DEMO PURPOSES, FIRST GALLERY ITEM (.first) IS HIDDEN
                              FOR SCREENS <920px. PLEASE REMOVE THE CLASS 'first' WHEN YOU IMPLEMENT
                          -->
                        <div class="gallery-item gallery-item-result-1" data-width="2" data-height="2">
                            <!-- START PREVIEW -->
                            <div class="live-tile slide" data-speed="750" data-delay="4000" data-mode="carousel">
                                    <img src="{{asset('assets/img/dashboard/image3.jpg')}}" alt="" class="image-responsive-height">
                            </div>
                            <!-- END PREVIEW -->
                            <!-- START ITEM OVERLAY DESCRIPTION -->
                            <div class="overlayer bottom-left full-width">
                                <div class="overlayer-wrapper item-info more-content">
                                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                        <div class="">
                                            <h3 class="pull-left bold text-white no-margin">{{ $data_project_match[0][0]->name }}</h3>
                                            <h3 class="pull-right semi-bold text-white font-montserrat bold no-margin">{{ $data_matching[0]->persentase }}%</h3>
                                            <div class="clearfix"></div>
                                            <span class="hint-text pull-left text-white">{{ $data_project_match[0][0]->type_project }}</span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10">
                                            <div class="thumbnail-wrapper d32 circular m-t-5">
                                                <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="no-margin text-white fs-12">{{ $data_project_match[0][0]->notes }}</p>
                                                <p class="rating">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star"></i>
                                                </p>
                                            </div>
                                            <div class="pull-right m-t-10">
                                                <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT OVERLAY DESCRIPTION -->
                        </div>
                        <!-- END GALLERY ITEM -->
                        <!-- START GALLERY ITEM -->
                        <div class="gallery-item gallery-item-result-2" data-width="1" data-height="1">
                            <!-- START PREVIEW -->
                            <img src="{{asset('assets/img/dashboard/pages_hero.jpg')}}" alt="" class="image-responsive-height">
                            <!-- END PREVIEW -->
                            <!-- START ITEM OVERLAY DESCRIPTION -->
                            <div class="overlayer bottom-left full-width">
                                <div class="overlayer-wrapper item-info ">
                                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                        <div class="">
                                            <p class="pull-left bold text-white fs-14 p-t-10">{{ $data_project_match[1][0]->name }}</p>
                                            <h5 class="pull-right semi-bold text-white font-montserrat bold">{{ $data_matching[1]->persentase }}%</h5>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10">
                                            <div class="thumbnail-wrapper d32 circular m-t-5">
                                                <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                                                <p class="rating">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star"></i>
                                                </p>
                                            </div>
                                            <div class="pull-right m-t-10">
                                                <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT OVERLAY DESCRIPTION -->
                        </div>
                        <!-- END GALLERY ITEM -->
                        <!-- START GALLERY ITEM -->
                        <div class="gallery-item gallery-item-result-3" data-width="1" data-height="1">
                            <!-- START PREVIEW -->
                            <img src="{{asset('assets/img/dashboard/image4.jpg')}}" alt="" class="image-responsive-height">
                            <!-- END PREVIEW -->
                            <!-- START ITEM OVERLAY DESCRIPTION -->
                            <div class="overlayer bottom-left full-width">
                                <div class="overlayer-wrapper item-info ">
                                    <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                                        <div class="">
                                            <p class="pull-left bold text-white fs-14 p-t-10">{{ $data_project_match[2][0]->name }}</p>
                                            <h5 class="pull-right semi-bold text-white font-montserrat bold">{{ $data_matching[2]->persentase }}%</h5>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="m-t-10">
                                            <div class="thumbnail-wrapper d32 circular m-t-5">
                                                <img width="40" height="40" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                                            </div>
                                            <div class="inline m-l-10">
                                                <p class="no-margin text-white fs-12">Designed by Alex Nester</p>
                                                <p class="rating">
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star rated"></i>
                                                    <i class="fa fa-star"></i>
                                                </p>
                                            </div>
                                            <div class="pull-right m-t-10">
                                                <button class="btn btn-white btn-xs btn-mini bold fs-14" type="button">+</button>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PRODUCT OVERLAY DESCRIPTION -->
                        </div>
                        <!-- END GALLERY ITEM -->

                    </div>
                    <!-- END CATEGORY -->
                </div>
                <!-- END CONTAINER FLUID -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START DIALOG -->
    <div id="itemDetails" class="dialog item-details">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="container-fluid">
                <div class="row dialog__overview" style=" max-height: calc(100vh - 210px); overflow-y: auto;">
                    <div class="col-sm-5 no-padding item-slideshow-wrapper full-height">
                        <div class="item-slideshow full-height">

                            <div class="slide"  data-image="{{asset('assets/img/dashboard/image1.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 p-r-35 p-t-35 p-l-35 full-height item-description">
                        <h2 class="semi-bold no-margin font-montserrat">{{ $data_project[0]->name }}</h2>
                        <p class=" pull-left">Category {{ $data_project[0]->type_project }}</p>
                        <br>
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Pendahuluan</h5>
                        @foreach($data_pendahuluan as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Antara</h5>
                        @foreach($data_antara as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Draft Akhir</h5>
                        @foreach($data_draft_akhir as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Akhir</h5>
                        @foreach($data_akhir as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach

                        <br>

                    </div>
                </div>
                <div class="row dialog__footer bg-info-dark hidden-xs">
                    <div class="col-sm-7 full-height separator">
                        <div class="row-xs-height">
                            <div class="col-xs-7 col-xs-height col-middle no-padding">
                                <div class="inline m-l-15">
                                    <h2 class="bold text-white price font-montserrat">Analisa Project</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 full-height">
                        <button class="btn btn-primary buy-now pull-right m-t-20">Simpan</button>
                    </div>
                </div>
            </div>
            <button class="close action top-right" data-dialog-close><i class="pg-close fs-14"></i>
            </button>
        </div>
    </div>
    <!-- END DIALOG -->

    <div id="itemDetails1" class="dialog item-details">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="container-fluid">
                <div class="row dialog__overview" style=" max-height: calc(100vh - 210px); overflow-y: auto;">
                    <div class="col-sm-5 no-padding item-slideshow-wrapper full-height">
                        <div class="item-slideshow full-height">
                            <div class="slide"  data-image="{{asset('assets/img/dashboard/image3.jpg')}}"></div>
                        </div>
                    </div>
                    <div class="col-sm-7 p-r-35 p-t-35 p-l-35 full-height item-description">

                        <h2 class="semi-bold no-margin font-montserrat">{{ $data_project_match[0][0]->name }}</h2>
                        <p class=" pull-left">Category {{ $data_project_match[0][0]->type_project }}</p>
                        <br>
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Pendahuluan</h5>
                        @foreach($data_pendahuluan_match[0][0] as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Antara</h5>
                        @foreach($data_antara as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Draft Akhir</h5>
                        @foreach($data_draft_akhir as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach
                        <h5 class="semi-bold no-margin font-montserrat">Laporan Akhir</h5>
                        @foreach($data_akhir as $data)
                            <li>
                                {{ $data->activity_name }}
                            </li>
                            <p class="fs-13 m-l-20">{{ $data->activity_desc }}</p>
                            <p class="font-montserrat fs-13 m-l-20"><b>Solusi :</b> {{ $data->activity_solution }}</p>
                        @endforeach

                        <br>

                    </div>
                </div>
                <div class="row dialog__footer bg-info-dark hidden-xs">
                    <div class="col-sm-7 full-height separator">
                        <div class="row-xs-height">
                            <div class="col-xs-7 col-xs-height col-middle no-padding">
                                <div class="inline m-l-15">
                                    <h2 class="bold text-white price font-montserrat">Kecocokan</h2>
                                </div>
                            </div>
                            <div class="col-xs-5 col-xs-height col-middle text-right  no-padding">
                                <h2 class="bold text-white price font-montserrat">{{ $data_matching[0]->persentase }} %</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 full-height">
                        <button class="btn btn-primary buy-now pull-right m-t-20">Simpan</button>
                    </div>
                </div>
            </div>
            <button class="close action top-right" data-dialog-close><i class="pg-close fs-14"></i>
            </button>
        </div>
    </div>
    <!-- END DIALOG -->

    <div id="itemDetails2" class="dialog item-details">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="container-fluid">
                <div class="row dialog__overview">
                    <div class="col-sm-7 no-padding item-slideshow-wrapper full-height">
                        <div class="item-slideshow full-height">
                            <div class="slide" data-image="assets/img/gallery/item-square.jpg">
                            </div>
                            <div class="slide" data-image="assets/img/gallery/item-square.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 visible-xs bg-info-dark">
                        <div class="container-xs-height">
                            <div class="row row-xs-height">
                                <div class="col-xs-8 col-xs-height col-middle no-padding">
                                    <div class="thumbnail-wrapper d32 circular inline">
                                        <img width="32" height="32" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
                                    </div>
                                    <div class="inline m-l-15">
                                        <p class="text-white no-margin">{{ $data_project[0]->name }}</p>
                                        <p class="hint-text text-white no-margin fs-12">{{ $data_project[0]->type_project }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-xs-height col-middle text-right  no-padding">
                                    <h2 class="bold text-white price font-montserrat">$20.00</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 p-r-35 p-t-35 p-l-35 full-height item-description">
                        <h2 class="semi-bold no-margin font-montserrat"> Un Happy Ninja</h2>
                        <p class="rating fs-12 m-t-5">
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star "></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </p>
                        <p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
                        </p>
                        <div class="row m-b-20 m-t-20">
                            <div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Price ranges</span>
                            </div>
                            <div class="col-xs-6 text-right">$20.00 - $40.00</div>
                        </div>
                        <div class="row m-t-20 m-b-10">
                            <div class="col-xs-6"><span class="font-montserrat all-caps fs-11">Paint sizes</span>
                            </div>
                        </div>
                        <button class="btn btn-white">S</button>
                        <button class="btn btn-white">M</button>
                        <button class="btn btn-white">L</button>
                        <button class="btn btn-white">XL</button>
                        <br>
                        <button class="btn btn-primary buy-now">Buy Now</button>
                    </div>
                </div>
                <div class="row dialog__footer bg-info-dark hidden-xs">
                    <div class="col-sm-7 full-height separator">
                        <div class="container-xs-height">
                            <div class="row row-xs-height">
                                <div class="col-xs-7 col-xs-height col-middle no-padding">
                                    <div class="thumbnail-wrapper d48 circular inline">
                                        <img width="48" height="48" src="assets/img/profiles/2.jpg" data-src="assets/img/profiles/2.jpg" data-src-retina="assets/img/profiles/2x.jpg" alt="">
                                    </div>
                                    <div class="inline m-l-15">
                                        <p class="text-white no-margin">Alex Nester</p>
                                        <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-xs-height col-middle text-right  no-padding">
                                    <h2 class="bold text-white price font-montserrat">$20.00</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 full-height">
                        <ul class="recommended list-inline pull-right m-t-10 m-b-0">
                            <li>
                                <a href="#"><img src="assets/img/gallery/thumb-1.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/gallery/thumb-2.jpg">
                                </a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/gallery/thumb-3.jpg">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <button class="close action top-right" data-dialog-close><i class="pg-close fs-14"></i>
            </button>
        </div>
    </div>
    <!-- END DIALOG -->
@stop
@section('page-script')
    <script src="{{asset('assets/plugins/jquery-metrojs/MetroJs.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-isotope/isotope.pkgd.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/codrops-dialogFx/dialogFx.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/owl-carousel/owl.carousel.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-nouislider/jquery.nouislider.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/plugins/jquery-nouislider/jquery.liblink.js')}}" type="text/javascript"></script>
    <!-- END VENDOR JS -->

    <!-- BEGIN PAGE LEVEL JS -->
    <script src="{{asset('assets/js/gallery.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
@stop