<?php
require_once("includes/dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html>
<head>
    <title>ক্লাসিফাইড - নিউইয়র্ক বাংলা পোস্ট ইপেপার</title>
    <?php require_once 'includes/libary.php'; ?>
</head>
<body>
<?php require_once 'includes/header.php'; ?>
<!-- Page Display -->
<div class="row">


    <div class="col-xs-9">
        <div class="title-header clearfix">

            <h2 class="title-heading f-light">ক্লাসিফাইড</h2>

        </div>
        <div class="seperator_15"></div>
        <script>
            document.write("<a class='thumbnail imagethumb' target='_blank' href='paper_image/page_image/" + getCookie("date") + "/23.png'>" +
                "<img src='paper_image/page_image/" + getCookie("date") + "/23.png' alt='ক্লাসিফাইড'/>" +
                "</a>");
        </script>
    </div>
    <div class="col-xs-3">
        <div class="seperator_15"></div>

        <section class='widget'>
            <header class='widget_title'><h1>Advertise here</h1></header>
            <div class='widget_body'><a href="https://buffalostardrivingschool.com/" target="_blank"><img style="width: 100%; height: auto;"
                                                                                                          src="img/pnp_ads_300x600.png"
                                                                                                          alt="Side Ads"/></a>
                <br><br></div>
        </section>

        <section class='widget'>
            <div class='widget_body'><a href="http://www.aanandoodrivingschool.com/" target="_blank"><img
                            style="width: 100%; height: 100%;" src="img/Driving_School.png"
                            alt="epaper"/></a>

                <br><br></div>
        </section>

        <section class='widget'>
            <header class='widget_title'><h1>Subscribe Here</h1></header>
            <div class='widget_body'>
                <form style="border:1px solid #ccc;padding:3px;text-align:center;"
                      action="" method="post">
                    <p>Enter your email address:</p>
                    <p><input type="text" style="width:140px" name="email"/></p><input type="hidden"
                                                                                       value="purbanchal/rss"
                                                                                       name="uri"/><input
                            type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe"/>
                    <p>Delivered by NY Bangla Post
                    </p></form>
            </div>
        </section>
    </div>


</div>
<?php require_once 'includes/footer.php'; ?>
</body>
</html>
<script>
    $(function () {
        // initialize scrollable
        var currentpage = 63;
        var seekto = Math.ceil(currentpage / 4) - 1;
        $(".scrollable").scrollable();
        var api = $(".scrollable").data("scrollable");
        api.seekTo(seekto);
    });
</script>

