<script>
    $("body").iealert({
        support: "ie7",
        title: "Did you know that your Internet Explorer is out of date?",
        text: "To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.",
        upgradeTitle: "Upgrade"
    });
</script>


<section class="container outer">
    <header id="header">
        <div class="row">
            <div class="col-xs-4">

                <a href="প্রথম_পাতা">
                    <img src="uploads/black.png" alt="নিউইয়র্ক বাংলা পোস্ট"/>
                </a>
            </div>
            <div class="col-xs-8">
                <div class="ad-468">
                    <center><a href="https://skdrivingschoolny.com/" target="_blank"><img src="img/SK_Driving_School_728x90_white.png" alt="ads"
                                 style="width:100%; height:auto;"></a></center>
                </div>
            </div>
        </div>
    </header>
    <nav id="mainmenu">
        <div class="navbar navbar-default navbar-inverse">
            <div class="navbar-inner">
                <ul class="nav navbar-nav">
                    <li><a rel="nofollow" href="প্রথম_পাতা"><span class='glyphicon glyphicon-home'></span></a></li>
                    <li><a target="_blank" href="#">নিউজ সংস্করণ</a></li>
                </ul>


                <form method="post" class="navbar-form pull-right searchWidget" role="search"><!--action="https://epaper.purbanchal.com/epaper/default/dosearch"-->

                    <div class="input-group">
                        <input name="search" type="text" class="form-control" placeholder="Search..." value=""/>
                        <span class="input-group-btn">
       <input type="hidden" name="ed_id" value="0"/>
      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
      </span>
                    </div>
                </form>
                <div class="pull-right" style="margin-right:10px;">
                    <style>
                        .scrollable-menu-btn {
                            font-family: sans-serif;
                        }

                        .scrollable-menu {
                            height: auto;
                            max-height: 200px;
                            overflow-x: hidden;

                        }
                    </style>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle scrollable-menu-btn navbar-btn2"
                                data-toggle="dropdown">11 Feb 2022 <span class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            <li>
                                <a href="প্রথম_পাতা">11
                                    Feb 2022</a></li>
                        </ul>
                    </div>


                    <script>
                        $("select[name=calender_dropdown]").on("change", function (e) {
                            e.preventDefault();
                            if ($(this).val() !== "0") {
                                window.location = $(this).val();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </nav>


    <div class="breadcrumb topbread">
        <a href="প্রথম_পাতাl">Home</a>
        <div style="padding-top:10px; padding-bottom:10px; min-height:800px;">

            <article class="edition-block">
                <header class="page-title">
                    <h1 class="page-heading">আজকের পত্রিকা
                        <div class="archive_calender">
                            <style>
                                .ui-datepicker {
                                    z-index: 3 !important;
                                }
                            </style>
                            <div class="input-group cal_outer">
                                <input style="" class="form-control" type="text" id="datetext_cal" name="datetext_cal"
                                       value="11-Feb-2022"/>
                                <span class="input-group-btn">
		<button id="datebtn_cal" style="" class="btn btn-primary btnCalender" href="#"><span
                class="glyphicon glyphicon-calendar"></span></button>
	</span>
                            </div>


                            <script>
                                var array = ["2022-01-07", "2022-01-14","2022-01-21","2022-01-28","2022-02-04","2022-02-11"];

                                $(document).on("click", "#datebtn_cal", function (e) {
                                    e.preventDefault();

                                    $("#datetext_cal").datepicker({
                                        dateFormat: "dd M yy",
                                        currentText: "14-Jan-2022",
                                        changeMonth: true,
                                        changeYear: true,
                                        minDate: "-20Y",
                                        maxDate: "Y",
                                        beforeShowDay: function (date) {
                                            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
                                            var oldDate = new Date();
                                            oldDate.setFullYear(oldDate.getFullYear() - 5);
                                            var thisDate = new Date(string);

                                            if (thisDate.getTime() <= oldDate.getTime()) {
                                                return [true];
                                            } else {
                                                return [array.indexOf(string) > -1];
                                            }
                                        },
                                        onSelect: function (dateText) {
                                            var url = "/epaper/go/T_ARC/T_CAT";
                                            url = url.replace("T_ARC", dateText);
                                            url = url.replace("T_CAT", "2");
                                            window.location = url;
                                        }
                                    });


                                    $("#datetext_cal").datepicker("show");
                                });

                            </script>

                        </div>
                    </h1>
                </header>
                <!-- Page Lists Display -->
                <script>
                    $(function () {
                        // initialize scrollable
                        var currentpage = 1;
                        var seekto = Math.ceil(currentpage / 4) - 1;
                        $(".scrollable").scrollable();
                        var api = $(".scrollable").data("scrollable");
                        api.seekTo(seekto);
                    });
                </script>

                <div class=" pager-block">
                    <div class="row">
                        <!-- "previous page" action -->
                        <div class="col-xs-1">
                            <a class="prev browse left btn btn-default btn-sm"><span
                                    class="glyphicon glyphicon-backward"></span></a>
                        </div>
                        <div class="col-xs-10">
                            <!-- root element for scrollable -->
                            <div class="scrollable" id="scrollable">
                                <!-- root element for the items -->
                                <div class="items">
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A5%E0%A6%AE_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE" || $_SERVER['REQUEST_URI']=="/") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="প্রথম_পাতা"><img
                                                src="paper_image/thumbnail_image/1.png"
                                                alt="প্রথম পাতা"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%96%E0%A6%AC%E0%A6%B0") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="খবর"><img
                                                src="paper_image/thumbnail_image/2.png"
                                                alt="খবর"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%87%E0%A6%AE%E0%A6%BF%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B6%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%86%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%AA%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="ইমিগ্রেশনের_আদ্যপান্ত"><img
                                                src="paper_image/thumbnail_image/3.png"
                                                alt="ইমিগ্রেশনের আদ্যপান্ত"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%95%E0%A7%8D%E0%A6%B8%E0%A7%87%E0%A6%B6%E0%A6%A8") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="নিউ_ইয়র্ক_ট্যাক্সেশন"><img
                                                src="paper_image/thumbnail_image/4.png"
                                                alt="নিউ ইয়র্ক ট্যাক্সেশন"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%95_%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="ইসলামিক_বার্তা"><img
                                                src="paper_image/thumbnail_image/5.png"
                                                alt="ইসলামিক বার্তা"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE_%E0%A6%AA%E0%A7%8B%E0%A6%B8%E0%A7%8D%E0%A6%9F-%E0%A7%AC") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="নিউ_ইয়র্ক_বাংলা_পোস্ট-৬"><img
                                                src="paper_image/thumbnail_image/6.png"
                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৬"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE_%E0%A6%AA%E0%A7%8B%E0%A6%B8%E0%A7%8D%E0%A6%9F-%E0%A7%AD") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="নিউ_ইয়র্ক_বাংলা_পোস্ট-৭"><img
                                                src="paper_image/thumbnail_image/7.png"
                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৭"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%96%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="খেলার_পাতা"><img
                                                src="paper_image/thumbnail_image/8.png"
                                                alt="খেলার পাতা"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%B8%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A7%8D%E0%A6%AF_%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="সাস্থ্য_সুরক্ষা"><img
                                                src="paper_image/thumbnail_image/9.png"
                                                alt="সাস্থ্য সুরক্ষা"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A6%AF%E0%A6%BC-%E0%A6%AC%E0%A6%BE%E0%A6%A8%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%AF") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="ব্যাবসায়-বানিজ্য"><img
                                                src="paper_image/thumbnail_image/10.png"
                                                alt="ব্যাবসায়-বানিজ্য"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%A7") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="চাকরির_খবর-১"><img
                                                src="paper_image/thumbnail_image/11.png"
                                                alt="চাকরির খবর - ১"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%A8") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="চাকরির_খবর-২"><img
                                                src="paper_image/thumbnail_image/12.png"
                                                alt="চাকরির খবর - ২"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%AD%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A6%A8_%E0%A6%AC%E0%A6%BF%E0%A6%B2%E0%A6%BE%E0%A6%B8") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="ভ্রমন_বিলাস"><img
                                                src="paper_image/thumbnail_image/13.png"
                                                alt="ভ্রমন বিলাস"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%86%E0%A6%AA%E0%A6%B8%E0%A7%8D%E0%A6%9F%E0%A7%87%E0%A6%9F") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="আপস্টেট"><img
                                                src="paper_image/thumbnail_image/14.png"
                                                alt="আপস্টেট"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%AC%E0%A6%BE%E0%A6%AB%E0%A7%87%E0%A6%B2%E0%A7%8B") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="বাফেলো"><img
                                                src="paper_image/thumbnail_image/15.png"
                                                alt="বাফেলো"/></a>
                                    </div>
                                    <div>
                                        <a class="<?php if($_SERVER['REQUEST_URI']=="/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>" data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="শেষের_পাতা"><img
                                                src="paper_image/thumbnail_image/16.png"
                                                alt="শেষের পাতা"/></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-1">
                            <a class="next browse right btn  btn-default  btn-sm"><span
                                    class="glyphicon glyphicon-forward"></span></a>
                        </div>
                    </div>

                </div>

                <div class='row'>
                    <div class='col-xs-6'>
                        <a href="#" id="linkbtnThumb" class="btn btn-default"><span
                                class='glyphicon glyphicon-th-large'></span></a>
                        <script>
                            $(document).ready(function (e) {
                                $(document).on("click", "#linkbtnThumb", function (e) {
                                    e.preventDefault();
                                    $('#thumbnail_browser').modal("show");
                                });
                            });
                        </script>
                        <div id="thumbnail_browser" class="modal fade">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">আজকের পত্রিকা</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div style="height: 600px; overflow: auto;">
                                            <div style="width:95%;">
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="current pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="1"
                                                            href="প্রথম_পাতা"><img
                                                                src="paper_image/box_image/1.png"
                                                                alt="প্রথম পাতা"/></a>
                                                        <div>প্রথম পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="খবর"><img
                                                                src="paper_image/box_image/2.png"
                                                                alt="খবর"/></a>
                                                        <div>খবর</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="ইমিগ্রেশনের_আদ্যপান্ত"><img
                                                                src="paper_image/box_image/3.png"
                                                                alt="ইমিগ্রেশনের আদ্যপান্ত"/></a>
                                                        <div>ইমিগ্রেশনের আদ্যপান্ত</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="নিউ_ইয়র্ক_ট্যাক্সেশন"><img
                                                                src="paper_image/box_image/4.png"
                                                                alt="নিউ ইয়র্ক ট্যাক্সেশন"/></a>
                                                        <div>নিউ ইয়র্ক ট্যাক্সেশন</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="ইসলামিক_বার্তা"><img
                                                                src="paper_image/box_image/5.png"
                                                                alt="ইসলামিক বার্তা"/></a>
                                                        <div>ইসলামিক বার্তা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="নিউ_ইয়র্ক_বাংলা_পোস্ট-৬"><img
                                                                src="paper_image/box_image/6.png"
                                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৬"/></a>
                                                        <div>নিউ ইয়র্ক বাংলা পোস্ট - ৬</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="নিউ_ইয়র্ক_বাংলা_পোস্ট-৭"><img
                                                                src="paper_image/box_image/7.png"
                                                                alt="নিউ ইয়র্ক বাংলা পোস্ট - ৭"/></a>
                                                        <div>নিউ ইয়র্ক বাংলা পোস্ট - ৭</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="4"
                                                            href="খেলার_পাতা"><img
                                                                src="paper_image/box_image/8.png"
                                                                alt="খেলার পাতা"/></a>
                                                        <div>খেলার পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="current pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="1"
                                                            href="সাস্থ্য_সুরক্ষা"><img
                                                                src="paper_image/box_image/9.png"
                                                                alt="সাস্থ্য সুরক্ষা"/></a>
                                                        <div>সাস্থ্য সুরক্ষা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="ব্যাবসায়-বানিজ্য"><img
                                                                src="paper_image/box_image/10.png"
                                                                alt="ব্যাবসায়-বানিজ্য"/></a>
                                                        <div>ব্যাবসায়-বানিজ্য</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="চাকরির_খবর-১"><img
                                                                src="paper_image/box_image/11.png"
                                                                alt="চাকরির খবর - ১"/></a>
                                                        <div>চাকরির খবর - ১</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="চাকরির_খবর-২"><img
                                                                src="paper_image/box_image/12.png"
                                                                alt="চাকরির খবর - ২"/></a>
                                                        <div>চাকরির খবর - ২</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="ভ্রমন_বিলাস"><img
                                                                src="paper_image/box_image/13.png"
                                                                alt="ভ্রমন বিলাস"/></a>
                                                        <div>ভ্রমন বিলাস</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="2"
                                                            href="আপস্টেট"><img
                                                                src="paper_image/box_image/14.png"
                                                                alt="আপস্টেট"/></a>
                                                        <div>আপস্টেট</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="3"
                                                            href="বাফেলো"><img
                                                                src="paper_image/box_image/15.png"
                                                                alt="বাফেলো"/></a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                            class="pagethumb thumbnail" data-id="1394"
                                                            data-alias="আজকের-পত্রিকা" data-page="4"
                                                            href="শেষের_পাতা"><img
                                                                src="paper_image/box_image/16.png"
                                                                alt="শেষের পাতা"/></a>
                                                        <div>শেষের পাতা</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div>


                    </div>
                    <div class='col-xs-6 text-right'>

                    </div>
                </div>