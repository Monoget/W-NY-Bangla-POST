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
                    <center><a href="https://skdrivingschoolny.com/" target="_blank"><img
                                    src="img/SK_Driving_School_728x90_white.png" alt="ads"
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


                <form method="post" class="navbar-form pull-right searchWidget" role="search">
                    <!--action="https://epaper.purbanchal.com/epaper/default/dosearch"-->

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
                                data-toggle="dropdown"><span id="date_select"></span> <span
                                    class="caret"></span></button>
                        <ul class="dropdown-menu scrollable-menu" role="menu">
                            <?php
                            $data_list = $db_handle->runQuery("SELECT * FROM publishdate order by id desc");
                            $row_count = $db_handle->numRows("SELECT * FROM publishdate order by id desc");

                            for ($i = 0; $i < $row_count; $i++) {
                                ?>
                                <li>
                                    <a href="#" onclick="myFunction('<?php echo $data_list[$i]["date"]; ?>');">
                                        <?php
                                        $timestamp = strtotime($data_list[$i]["date"]);
                                        $day = date('d M Y', $timestamp);
                                        echo $day;
                                        ?>
                                    </a>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>


                    <script>
                        $("select[name=calender_dropdown]").on("change", function (e) {
                            e.preventDefault();
                            if ($(this).val() !== "0") {
                                window.location = $(this).val();
                            }
                        });

                        function myFunction(value) {
                            let date = new Date(value);
                            let ye = new Intl.DateTimeFormat('en', {year: 'numeric'}).format(date);
                            let mo = new Intl.DateTimeFormat('en', {month: '2-digit'}).format(date);
                            let da = new Intl.DateTimeFormat('en', {day: '2-digit'}).format(date);
                            let newDate = da + '-' + mo + '-' + ye;
                            setCookie('date', newDate);
                            location.reload();
                            $("#date_select").text(value);
                        }
                    </script>
                </div>
            </div>
        </div>
    </nav>


    <div class="breadcrumb topbread">
        <a href="প্রথম_পাতা">Home</a>
        <div style="padding-top:10px; padding-bottom:10px; min-height:800px;">

            <article class="edition-block">
                <header class="page-title">
                    <h1 class="page-heading">
                        <script>
                            function getCookie(name) {
                                var nameEQ = name + "=";
                                var ca = document.cookie.split(';');
                                for (var i = 0; i < ca.length; i++) {
                                    var c = ca[i];
                                    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                                    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
                                }
                                return null;
                            }

                            function eraseCookie(name) {
                                document.cookie = name + '=;';
                            }

                            function setCookie(name, value) {
                                document.cookie = name + '=' + value + ';';
                            }

                            let finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

                            String.prototype.getDigitBanglaFromEnglish = function() {
                                let retStr = this;
                                for (let x in finalEnlishToBanglaNumber) {
                                    retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
                                }
                                return retStr;
                            };

                            let date=getCookie("date");

                            let bangla_converted_number=date.getDigitBanglaFromEnglish();

                            document.write(bangla_converted_number+" এর সাপ্তাহিক পত্রিকা");
                        </script>
                        <div class="archive_calender">
                            <style>
                                .ui-datepicker {
                                    z-index: 3 !important;
                                }
                            </style>
                            <div class="input-group cal_outer">
                                <input style="" class="form-control" type="text" id="datetext_cal" name="datetext_cal"
                                       value=""/>
                                <span class="input-group-btn">
		<button id="datebtn_cal" style="" class="btn btn-primary btnCalender" href="#"><span
                    class="glyphicon glyphicon-calendar"></span></button>
	</span>
                            </div>


                            <script>
                                var array = [
                                    <?php
                                    $data_list = $db_handle->runQuery("SELECT * FROM publishdate order by id asc");
                                    $row_count = $db_handle->numRows("SELECT * FROM publishdate order by id desc");
                                    $string = '';
                                    for ($i = 0; $i < $row_count; $i++) {
                                        $string .= '"' . $data_list[$i]["date"] . '",';
                                    }
                                    echo substr($string, 0, -1);
                                    ?>
                                ];

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
                                            let url = "/epaper/go/T_ARC/T_CAT";
                                            url = url.replace("T_ARC", dateText);
                                            url = url.replace("T_CAT", "2");
                                            //alert(dateText);
                                            //window.location = url;

                                            let date = new Date(dateText);
                                            let ye = new Intl.DateTimeFormat('en', {year: 'numeric'}).format(date);
                                            let mo = new Intl.DateTimeFormat('en', {month: '2-digit'}).format(date);
                                            let da = new Intl.DateTimeFormat('en', {day: '2-digit'}).format(date);
                                            let newDate = da + '-' + mo + '-' + ye;
                                            setCookie('date', newDate)
                                            location.reload();
                                        }
                                    });


                                    $("#datetext_cal").datepicker("show");

                                });


                                window.onload = function () {
                                    setValue(getCookie('date'));
                                };

                                function setValue(value) {
                                    var valArr = value.split('-');
                                    let date = new Date(valArr[2] + '-' + valArr[1] + '-' + valArr[0]);
                                    let ye = new Intl.DateTimeFormat('en', {year: 'numeric'}).format(date);
                                    let mo = new Intl.DateTimeFormat('en', {month: 'short'}).format(date);
                                    let da = new Intl.DateTimeFormat('en', {day: '2-digit'}).format(date);
                                    let date_select = da + ' ' + mo + ' ' + ye;
                                    let date_cal = da + '-' + mo + '-' + ye;
                                    $("#date_select").text(date_select);
                                    $("#datetext_cal").val(date_cal);
                                }
                            </script>

                        </div>
                    </h1>
                </header>
                <!-- Page Lists Display -->
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
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%A5%E0%A6%AE_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE" || $_SERVER['REQUEST_URI'] == "/") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="প্রথম_পাতা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/1.png' alt='প্রথম পাতা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%87%E0%A6%AE%E0%A6%BF%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B6%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%86%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%AA%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4") echo "current"; ?>"
                                           data-id="1395" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="ইমিগ্রেশনের_আদ্যপান্ত">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/2.png' alt='ইমিগ্রেশনের আদ্যপান্ত'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%95%E0%A7%8D%E0%A6%B8%E0%A7%87%E0%A6%B6%E0%A6%A8") echo "current"; ?>"
                                           data-id="1396" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="নিউ_ইয়র্ক_ট্যাক্সেশন">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/3.png' alt='নিউইয়র্ক ট্যাক্সেশন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%95_%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1397" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ইসলামিক_বার্তা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/4.png' alt='ইসলামিক বার্তা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%AB") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="অন্যান্য_খবর-৫">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/5.png' alt='অন্যান্য খবর - ৫'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%AC") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="অন্যান্য_খবর-৬">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/6.png' alt='অন্যান্য খবর - ৬'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A6%AF%E0%A6%BC-%E0%A6%AC%E0%A6%BE%E0%A6%A8%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%AF") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="ব্যাবসায়-বানিজ্য">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/7.png' alt='ব্যাবসায় বানিজ্য'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B8%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A7%8D%E0%A6%AF_%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="সাস্থ্য_সুরক্ষা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/8.png' alt='সাস্থ্য সুরক্ষা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%96%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="খেলার_পাতা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/9.png' alt='খেলার পাতা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0_%E0%A6%96%E0%A6%AC%E0%A6%B0") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="চাকরির_খবর">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/10.png' alt='চাকরির খবর'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%BE%E0%A6%AA%E0%A6%A8") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="বিজ্ঞাপন">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/11.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AD%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A6%A8_%E0%A6%AC%E0%A6%BF%E0%A6%B2%E0%A6%BE%E0%A6%B8") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="ভ্রমন_বিলাস">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/12.png' alt='ভ্রমন বিলাস'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%86%E0%A6%AA%E0%A6%B8%E0%A7%8D%E0%A6%9F%E0%A7%87%E0%A6%9F") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="আপস্টেট">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/13.png' alt='আপস্টেট'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BE%E0%A6%AB%E0%A7%87%E0%A6%B2%E0%A7%8B-%E0%A7%A7%E0%A7%AA") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="বাফেলো-১৪">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/14.png' alt='বাফেলো - ১৪'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BE%E0%A6%AB%E0%A7%87%E0%A6%B2%E0%A7%8B-%E0%A7%A7%E0%A7%AB") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="বাফেলো-১৫">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/15.png' alt='বাফেলো - ১৫'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="শেষের_পাতা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/16.png' alt='শেষের পাতা'/>");
                                            </script>
                                        </a>
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
                                        <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span
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
                                                                href="প্রথম_পাতা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/1.png' alt='প্রথম পাতা'/>");
                                                            </script>
                                                        </a>
                                                        <div>প্রথম পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="ইমিগ্রেশনের_আদ্যপান্ত">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/2.png' alt='ইমিগ্রেশনের আদ্যপান্ত'/>");
                                                            </script>
                                                        </a>
                                                        <div>ইমিগ্রেশনের আদ্যপান্ত</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="নিউ_ইয়র্ক_ট্যাক্সেশন">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/3.png' alt='নিউইয়র্ক ট্যাক্সেশন'/>");
                                                            </script>
                                                        </a>
                                                        <div>নিউইয়র্ক ট্যাক্সেশন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="ইসলামিক_বার্তা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/4.png' alt='ইসলামিক বার্তা'/>");
                                                            </script>
                                                        </a>
                                                        <div>ইসলামিক বার্তা</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="অন্যান্য_খবর-৫">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/5.png' alt='অন্যান্য খবর - ৫'/>");
                                                            </script>
                                                        </a>
                                                        <div>অন্যান্য খবর - ৫</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="অন্যান্য_খবর-৬">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/6.png' alt='অন্যান্য খবর - ৬'/>");
                                                            </script>
                                                        </a>
                                                        <div>অন্যান্য খবর - ৬</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="ব্যাবসায়-বানিজ্য">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/7.png' alt='ব্যাবসায় বানিজ্য'/>");
                                                            </script>
                                                        </a>
                                                        <div>ব্যাবসায় বানিজ্য</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="সাস্থ্য_সুরক্ষা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/8.png' alt='সাস্থ্য সুরক্ষা'/>");
                                                            </script>
                                                        </a>
                                                        <div>সাস্থ্য সুরক্ষা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="current pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="1"
                                                                href="খেলার_পাতা">
                                                            <img
                                                                    src="paper_image/box_image/<?php echo $_COOKIE['date'] . '/'; ?>9.png"
                                                                    alt="খেলার পাতা"/>
                                                        </a>
                                                        <div>খেলার পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="চাকরির_খবর">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/10.png' alt='চাকরির খবর'/>");
                                                            </script>
                                                        </a>
                                                        <div>চাকরির খবর</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="বিজ্ঞাপন">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/11.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="ভ্রমন_বিলাস">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/12.png' alt='ভ্রমন বিলাস'/>");
                                                            </script>
                                                        </a>
                                                        <div>ভ্রমন বিলাস</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="আপস্টেট">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/13.png' alt='আপস্টেট'/>");
                                                            </script>
                                                        </a>
                                                        <div>আপস্টেট</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="বাফেলো-১৪">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/14.png' alt='বাফেলো - ১৪'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো - ১৪</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="বাফেলো-১৫">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/15.png' alt='বাফেলো - ১৫'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো - ১৫</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="শেষের_পাতা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/16.png' alt='শেষের পাতা'/>");
                                                            </script>
                                                        </a>
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
                <!-- <div class='row'>
                    <div class='col-xs-12'>
                        <br/>
                        <input type="text" class="form-control" value="<?php /*echo $_SERVER["REQUEST_URI"]; */ ?>"/>
                    </div>
                </div>-->