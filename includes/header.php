<script>
    $("body").iealert({
        support: "ie7",
        title: "Did you know that your Internet Explorer is out of date?",
        text: "To get the best possible experience using our site we recommend that you upgrade to a modern web browser. To download a newer web browser click on the Upgrade button.",
        upgradeTitle: "Upgrade"
    });
</script>
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

    const t = new Date().getDate() + (6 - new Date().getDay() - 1) ;
    const lastFriday = new Date();
    lastFriday.setDate(t);

    let ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(lastFriday);
    let mo = new Intl.DateTimeFormat('en', { month: '2-digit' }).format(lastFriday);
    let da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(lastFriday);

    let date  = da+'-'+mo+'-'+ye;
    if(getCookie("date")===null){
        setCookie("date",date);
        location.reload();
    }
</script>

<section class="container outer">
    <header id="header">
        <div class="row">
            <div class="col-xs-4">

                <a href="প্রথম-পাতা">
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
                    <li><a rel="nofollow" href="প্রথম-পাতা"><span class='glyphicon glyphicon-home'></span></a></li>
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
        <a href="প্রথম-পাতা">Home</a>
        <div style="padding-top:10px; padding-bottom:10px; min-height:800px;">

            <article class="edition-block">
                <header class="page-title">
                    <h1 class="page-heading" id="heading">
                        <script>

                            let finalEnlishToBanglaNumber={'0':'০','1':'১','2':'২','3':'৩','4':'৪','5':'৫','6':'৬','7':'৭','8':'৮','9':'৯'};

                            String.prototype.getDigitBanglaFromEnglish = function() {
                                let retStr = this;
                                for (let x in finalEnlishToBanglaNumber) {
                                    retStr = retStr.replace(new RegExp(x, 'g'), finalEnlishToBanglaNumber[x]);
                                }
                                return retStr;
                            };

                            date=getCookie("date");

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
                                           href="প্রথম-পাতা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/1.png' alt='প্রথম পাতা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%87%E0%A6%AE%E0%A6%BF%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A7%87%E0%A6%B6%E0%A6%A8%E0%A7%87%E0%A6%B0_%E0%A6%86%E0%A6%A6%E0%A7%8D%E0%A6%AF%E0%A6%AA%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%A4") echo "current"; ?>"
                                           data-id="1395" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="সম্পাদকীয়">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/2.png' alt='সম্পাদকীয়'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%95%E0%A7%8D%E0%A6%B8%E0%A7%87%E0%A6%B6%E0%A6%A8") echo "current"; ?>"
                                           data-id="1396" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="আন্তর্জাতিক">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/3.png' alt='আন্তর্জাতিক'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%A8%E0%A6%BF%E0%A6%89_%E0%A6%87%E0%A6%AF%E0%A6%BC%E0%A6%B0%E0%A7%8D%E0%A6%95_%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%95%E0%A7%8D%E0%A6%B8%E0%A7%87%E0%A6%B6%E0%A6%A8") echo "current"; ?>"
                                           data-id="1396" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="সাহিত্য-সম্ভার">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/4.png' alt='সাহিত্য সম্ভার'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%87%E0%A6%B8%E0%A6%B2%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%95_%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1397" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ব্যবসা-বাণিজ্য">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/5.png' alt='ব্যবসা বাণিজ্য'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%AB") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="তথ্য-ও-প্রযুক্তি">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/6.png' alt='তথ্য ও প্রযুক্তি'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%AF_%E0%A6%96%E0%A6%AC%E0%A6%B0-%E0%A7%AC") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="ভ্রমন-বিলাস">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/7.png' alt='খেলাধুলা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AC%E0%A6%B8%E0%A6%BE%E0%A6%AF%E0%A6%BC-%E0%A6%AC%E0%A6%BE%E0%A6%A8%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%AF") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="বিজ্ঞাপন-১">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/8.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B8%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A7%8D%E0%A6%AF_%E0%A6%B8%E0%A7%81%E0%A6%B0%E0%A6%95%E0%A7%8D%E0%A6%B7%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বাংলাদেশ">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/9.png' alt='স্বাস্থ্য সুরক্ষা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%96%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা" data-page="1"
                                           href="খেলাধুলা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/10.png' alt='খেলাধুলা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%9A%E0%A6%BE%E0%A6%95%E0%A6%B0%E0%A6%BF%E0%A6%B0_%E0%A6%96%E0%A6%AC%E0%A6%B0") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="বিজ্ঞাপন-২">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/11.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%BE%E0%A6%AA%E0%A6%A8") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="বাংলাদেশ">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/12.png' alt='বাংলাদেশ'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AD%E0%A7%8D%E0%A6%B0%E0%A6%AE%E0%A6%A8_%E0%A6%AC%E0%A6%BF%E0%A6%B2%E0%A6%BE%E0%A6%B8") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="বিজ্ঞাপন-৩">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/13.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BE%E0%A6%AB%E0%A7%87%E0%A6%B2%E0%A7%8B-%E0%A7%A7%E0%A7%AA") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="2"
                                           href="শিক্ষা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/14.png' alt='শিক্ষা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%AC%E0%A6%BE%E0%A6%AB%E0%A7%87%E0%A6%B2%E0%A7%8B-%E0%A7%A7%E0%A7%AB") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="3"
                                           href="জীবনী">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/15.png' alt='জীবনী'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="আবশ্যক">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/16.png' alt='আবশ্যক'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিনোদন">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/17.png' alt='বিনোদন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="লাইফ-স্টাইল">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/18.png' alt='লাইফ স্টাইল'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৪">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/19.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="জাম্প-পেইজ">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/20.png' alt='জাম্প পেইজ'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ক্লাসিফাইড-১">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/21.png' alt='ক্লাসিফাইড'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="রসুইঘর">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/22.png' alt='রসুইঘর'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ক্লাসিফাইড-২">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/23.png' alt='ক্লাসিফাইড'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="আইন">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/24.png' alt='আইন'/>");
                                            </script>
                                        </a>
                                    </div><div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="আপস্টেট">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/25.png' alt='আপস্টেট'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="রাজনীতি">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/26.png' alt='রাজনীতি'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="অপরাধ">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/27.png' alt='অপরাধ'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ইসলামিক-বার্তা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/28.png' alt='ইসলামিক বার্তা'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৫">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/29.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৬">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/30.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বাফেলো-১">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/31.png' alt='বাফেলো'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বাফেলো-২">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/32.png' alt='বাফেলো'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৭">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/33.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বাফেলো-৩">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/34.png' alt='বাফেলো'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৮">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/35.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বাফেলো-৪">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/36.png' alt='বাফেলো'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="বিজ্ঞাপন-৯">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/37.png' alt='বিজ্ঞাপন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="প্রবাস">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/38.png' alt='প্রবাস'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="ইমিগ্রেশন">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/39.png' alt='ইমিগ্রেশন'/>");
                                            </script>
                                        </a>
                                    </div>
                                    <div>
                                        <a class="<?php if ($_SERVER['REQUEST_URI'] == "/%E0%A6%B6%E0%A7%87%E0%A6%B7%E0%A7%87%E0%A6%B0_%E0%A6%AA%E0%A6%BE%E0%A6%A4%E0%A6%BE") echo "current"; ?>"
                                           data-id="1394" data-alias="আজকের-পত্রিকা"
                                           data-page="4"
                                           href="শেষের-পাতা">
                                            <script>
                                                document.write("<img src='paper_image/thumbnail_image/" + getCookie("date") + "/40.png' alt='শেষের পাতা'/>");
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
                                                                href="প্রথম-পাতা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/1.png' alt='প্রথম পাতা'/>");
                                                            </script>
                                                        </a>
                                                        <div>প্রথম পাতা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="সম্পাদকীয়">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/2.png' alt='সম্পাদকীয়'/>");
                                                            </script>
                                                        </a>
                                                        <div>সম্পাদকীয়</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="আন্তর্জাতিক">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/3.png' alt='আন্তর্জাতিক'/>");
                                                            </script>
                                                        </a>
                                                        <div>আন্তর্জাতিক</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="সাহিত্য-সম্ভার">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/4.png' alt='সাহিত্য সম্ভার'/>");
                                                            </script>
                                                        </a>
                                                        <div>সাহিত্য সম্ভার</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="ব্যবসা-বাণিজ্য">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/5.png' alt='ব্যবসা বাণিজ্য'/>");
                                                            </script>
                                                        </a>
                                                        <div>ব্যবসা বাণিজ্য</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="তথ্য-ও-প্রযুক্তি">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/6.png' alt='তথ্য ও প্রযুক্তি'/>");
                                                            </script>
                                                        </a>
                                                        <div>তথ্য ও প্রযুক্তি</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="ভ্রমন-বিলাস">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/7.png' alt='ভ্রমন বিলাস'/>");
                                                            </script>
                                                        </a>
                                                        <div>ভ্রমন বিলাস</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="বিজ্ঞাপন-১">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/8.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="স্বাস্থ্য-সুরক্ষা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/9.png' alt='স্বাস্থ্য সুরক্ষা'/>");
                                                            </script>
                                                        </a>
                                                        <div>স্বাস্থ্য সুরক্ষা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="current pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="1"
                                                                href="খেলাধুলা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/10.png' alt='খেলাধুলা'/>");
                                                            </script>
                                                        </a>
                                                        <div>খেলাধুলা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="বিজ্ঞাপন-২">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/11.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="বাংলাদেশ">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/12.png' alt='বাংলাদেশ'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাংলাদেশ</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="বিজ্ঞাপন-৩">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/13.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="শিক্ষা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/14.png' alt='শিক্ষা'/>");
                                                            </script>
                                                        </a>
                                                        <div>শিক্ষা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="2"
                                                                href="জীবনী">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/15.png' alt='জীবনী'/>");
                                                            </script>
                                                        </a>
                                                        <div>জীবনী</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="3"
                                                                href="আবশ্যক">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/16.png' alt='আবশ্যক'/>");
                                                            </script>
                                                        </a>
                                                        <div>আবশ্যক</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিনোদন">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/17.png' alt='বিনোদন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিনোদন</div>
                                                    </div><div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="লাইফ-স্টাইল">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/18.png' alt='লাইফ স্টাইল'/>");
                                                            </script>
                                                        </a>
                                                        <div>লাইফ স্টাইল</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৪">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/19.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="জাম্প-পেইজ">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/20.png' alt='জাম্প পেইজ'/>");
                                                            </script>
                                                        </a>
                                                        <div>জাম্প পেইজ</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="ক্লাসিফাইড-১">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/21.png' alt='ক্লাসিফাইড'/>");
                                                            </script>
                                                        </a>
                                                        <div>ক্লাসিফাইড</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="রসুইঘর">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/21.png' alt='রসুইঘর'/>");
                                                            </script>
                                                        </a>
                                                        <div>রসুইঘর</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="ক্লাসিফাইড-২">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/22.png' alt='ক্লাসিফাইড'/>");
                                                            </script>
                                                        </a>
                                                        <div>ক্লাসিফাইড</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="আইন">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/23.png' alt='আইন'/>");
                                                            </script>
                                                        </a>
                                                        <div>আইন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="আপস্টেট">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/24.png' alt='আপস্টেট'/>");
                                                            </script>
                                                        </a>
                                                        <div>আপস্টেট</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="রাজনীতি">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/25.png' alt='রাজনীতি'/>");
                                                            </script>
                                                        </a>
                                                        <div>রাজনীতি</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="অপরাধ">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/26.png' alt='অপরাধ'/>");
                                                            </script>
                                                        </a>
                                                        <div>অপরাধ</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="ইসলামিক-বার্তা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/27.png' alt='ইসলামিক বার্তা'/>");
                                                            </script>
                                                        </a>
                                                        <div>ইসলামিক বার্তা</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৫">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/28.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৬">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/29.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বাফেলো-১">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/30.png' alt='বাফেলো'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বাফেলো-২">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/31.png' alt='বাফেলো'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বাফেলো-২">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/32.png' alt='বাফেলো'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৭">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/33.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বাফেলো-৩">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/34.png' alt='বাফেলো'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৮">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/35.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বাফেলো-৪">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/36.png' alt='বাফেলো'/>");
                                                            </script>
                                                        </a>
                                                        <div>বাফেলো</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="বিজ্ঞাপন-৯">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/37.png' alt='বিজ্ঞাপন'/>");
                                                            </script>
                                                        </a>
                                                        <div>বিজ্ঞাপন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="প্রবাস">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/38.png' alt='প্রবাস'/>");
                                                            </script>
                                                        </a>
                                                        <div>প্রবাস</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="ইমিগ্রেশন">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/39.png' alt='ইমিগ্রেশন'/>");
                                                            </script>
                                                        </a>
                                                        <div>ইমিগ্রেশন</div>
                                                    </div>
                                                    <div class='col-xs-3 text-center' style='margin-bottom:20px;'><a
                                                                class="pagethumb thumbnail" data-id="1394"
                                                                data-alias="আজকের-পত্রিকা" data-page="4"
                                                                href="শেষের-পাতা">
                                                            <script>
                                                                document.write("<img src='paper_image/box_image/" + getCookie("date") + "/40.png' alt='শেষের পাতা'/>");
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