<!DOCTYPE html>
<html>
<head>
    <title>Upload</title>
    <?php require_once 'includes/libary.php'; ?>
    <?php
        if(isset($_POST['create_file'])){
            $thumb_file_name=$_POST['thumb_file_name'];
            if (!file_exists('paper_image/thumbnail_image/'.$thumb_file_name)) {
                mkdir('paper_image/thumbnail_image/'.$thumb_file_name, 0777, true);
            }

            $box_file_name=$_POST['box_file_name'];
            if (!file_exists('paper_image/box_image/'.$box_file_name)) {
                mkdir('paper_image/box_image/'.$box_file_name, 0777, true);
            }

            $paper_image_file_name=$_POST['paper_image_file_name'];
            if (!file_exists('paper_image/page_image/'.$paper_image_file_name)) {
                mkdir('paper_image/page_image/'.$paper_image_file_name, 0777, true);
            }
        }

    if(isset($_POST['move_image'])){
        $thumb_file_name=$_POST['thumb_file_name'];
        if (file_exists('paper_image/thumbnail_image/'.$thumb_file_name)) {
            rename('paper_image/thumbnail_image/1.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/1.png');
            rename('paper_image/thumbnail_image/2.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/2.png');
            rename('paper_image/thumbnail_image/3.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/3.png');
            rename('paper_image/thumbnail_image/4.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/4.png');
            rename('paper_image/thumbnail_image/5.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/5.png');
            rename('paper_image/thumbnail_image/6.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/6.png');
            rename('paper_image/thumbnail_image/7.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/7.png');
            rename('paper_image/thumbnail_image/8.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/8.png');
            rename('paper_image/thumbnail_image/9.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/9.png');
            rename('paper_image/thumbnail_image/10.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/10.png');
            rename('paper_image/thumbnail_image/11.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/11.png');
            rename('paper_image/thumbnail_image/12.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/12.png');
            rename('paper_image/thumbnail_image/13.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/13.png');
            rename('paper_image/thumbnail_image/14.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/14.png');
            rename('paper_image/thumbnail_image/15.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/15.png');
            rename('paper_image/thumbnail_image/16.png', 'paper_image/thumbnail_image/'.$thumb_file_name.'/16.png');
        }

        $box_file_name=$_POST['box_file_name'];
        if (file_exists('paper_image/box_image/'.$box_file_name)) {
            rename('paper_image/box_image/1.png', 'paper_image/box_image/'.$thumb_file_name.'/1.png');
            rename('paper_image/box_image/2.png', 'paper_image/box_image/'.$thumb_file_name.'/2.png');
            rename('paper_image/box_image/3.png', 'paper_image/box_image/'.$thumb_file_name.'/3.png');
            rename('paper_image/box_image/4.png', 'paper_image/box_image/'.$thumb_file_name.'/4.png');
            rename('paper_image/box_image/5.png', 'paper_image/box_image/'.$thumb_file_name.'/5.png');
            rename('paper_image/box_image/6.png', 'paper_image/box_image/'.$thumb_file_name.'/6.png');
            rename('paper_image/box_image/7.png', 'paper_image/box_image/'.$thumb_file_name.'/7.png');
            rename('paper_image/box_image/8.png', 'paper_image/box_image/'.$thumb_file_name.'/8.png');
            rename('paper_image/box_image/9.png', 'paper_image/box_image/'.$thumb_file_name.'/9.png');
            rename('paper_image/box_image/10.png', 'paper_image/box_image/'.$thumb_file_name.'/10.png');
            rename('paper_image/box_image/11.png', 'paper_image/box_image/'.$thumb_file_name.'/11.png');
            rename('paper_image/box_image/12.png', 'paper_image/box_image/'.$thumb_file_name.'/12.png');
            rename('paper_image/box_image/13.png', 'paper_image/box_image/'.$thumb_file_name.'/13.png');
            rename('paper_image/box_image/14.png', 'paper_image/box_image/'.$thumb_file_name.'/14.png');
            rename('paper_image/box_image/15.png', 'paper_image/box_image/'.$thumb_file_name.'/15.png');
            rename('paper_image/box_image/16.png', 'paper_image/box_image/'.$thumb_file_name.'/16.png');
        }

        $paper_image_file_name=$_POST['paper_image_file_name'];
        if (file_exists('paper_image/page_image/'.$paper_image_file_name)) {
            rename('paper_image/page_image/1.png', 'paper_image/page_image/'.$thumb_file_name.'/1.png');
            rename('paper_image/page_image/2.png', 'paper_image/page_image/'.$thumb_file_name.'/2.png');
            rename('paper_image/page_image/3.png', 'paper_image/page_image/'.$thumb_file_name.'/3.png');
            rename('paper_image/page_image/4.png', 'paper_image/page_image/'.$thumb_file_name.'/4.png');
            rename('paper_image/page_image/5.png', 'paper_image/page_image/'.$thumb_file_name.'/5.png');
            rename('paper_image/page_image/6.png', 'paper_image/page_image/'.$thumb_file_name.'/6.png');
            rename('paper_image/page_image/7.png', 'paper_image/page_image/'.$thumb_file_name.'/7.png');
            rename('paper_image/page_image/8.png', 'paper_image/page_image/'.$thumb_file_name.'/8.png');
            rename('paper_image/page_image/9.png', 'paper_image/page_image/'.$thumb_file_name.'/9.png');
            rename('paper_image/page_image/10.png', 'paper_image/page_image/'.$thumb_file_name.'/10.png');
            rename('paper_image/page_image/11.png', 'paper_image/page_image/'.$thumb_file_name.'/11.png');
            rename('paper_image/page_image/12.png', 'paper_image/page_image/'.$thumb_file_name.'/12.png');
            rename('paper_image/page_image/13.png', 'paper_image/page_image/'.$thumb_file_name.'/13.png');
            rename('paper_image/page_image/14.png', 'paper_image/page_image/'.$thumb_file_name.'/14.png');
            rename('paper_image/page_image/15.png', 'paper_image/page_image/'.$thumb_file_name.'/15.png');
            rename('paper_image/page_image/16.png', 'paper_image/page_image/'.$thumb_file_name.'/16.png');
        }

    }

    if(isset($_POST['upload_image'])){

        $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["thumb_file"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["thumb_file"]["name"][$key];
            $file_tmp=$_FILES["thumb_file"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
                if(!file_exists("paper_image/thumbnail_image/".$file_name)) {
                    move_uploaded_file($file_tmp=$_FILES["thumb_file"]["tmp_name"][$key],"paper_image/thumbnail_image/".$file_name);
                }
                else {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["thumb_file"]["tmp_name"][$key],"paper_image/thumbnail_image/".$newFileName);
                }
            }
            else {
                array_push($error,"$file_name, ");
            }
        }

        $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["box_file"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["box_file"]["name"][$key];
            $file_tmp=$_FILES["box_file"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
                if(!file_exists("paper_image/box_image/".$file_name)) {
                    move_uploaded_file($file_tmp=$_FILES["box_file"]["tmp_name"][$key],"paper_image/box_image/".$file_name);
                }
                else {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["box_file"]["tmp_name"][$key],"paper_image/box_image/".$newFileName);
                }
            }
            else {
                array_push($error,"$file_name, ");
            }
        }

        $error=array();
        $extension=array("jpeg","jpg","png","gif");
        foreach($_FILES["paper_image_file"]["tmp_name"] as $key=>$tmp_name) {
            $file_name=$_FILES["paper_image_file"]["name"][$key];
            $file_tmp=$_FILES["paper_image_file"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(in_array($ext,$extension)) {
                if(!file_exists("paper_image/page_image/".$file_name)) {
                    move_uploaded_file($file_tmp=$_FILES["paper_image_file"]["tmp_name"][$key],"paper_image/page_image/".$file_name);
                }
                else {
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.time().".".$ext;
                    move_uploaded_file($file_tmp=$_FILES["paper_image_file"]["tmp_name"][$key],"paper_image/page_image/".$newFileName);
                }
            }
            else {
                array_push($error,"$file_name, ");
            }
        }
    }
    ?>
</head>
<body>
<?php require_once 'includes/header.php'; ?>
<!-- Page Display -->
<div class="row">


    <div class="col-xs-9">
        <div class="title-header clearfix">

            <h2 class="title-heading f-light">Upload</h2>

        </div>
        <div class="seperator_15"></div>
        <section class='widget'>
            <div class='widget_body'>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <input type="text" class="form-control" name="thumb_file_name" placeholder="Thumb File Name" required/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <input type="text" class="form-control" name="box_file_name" placeholder="Box File Name" required/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <input type="text" class="form-control" name="paper_image_file_name" placeholder="Paper Image File Name" required/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;">
                            <input type="submit" name="create_file" value="Create File" class="btn btn-info">
                            <input type="submit" name="move_image" value="Move Image" class="btn btn-success">
                        </div>
                    </div>
                </form>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <label>Thumb files</label>
                            <input type="file" class="form-control" name="thumb_file[]" multiple/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <label>Box files</label>
                            <input type="file" class="form-control" name="box_file[]" multiple/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;margin-right: 30px;">
                            <label>Paper files</label>
                            <input type="file" class="form-control" name="paper_image_file[]" multiple/>
                        </div>
                        <div class="col-12" style="margin-bottom: 30px;margin-left: 30px;">
                            <input type="submit" name="upload_image" value="Upload Image" class="btn btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div class="col-xs-3">
        <div class="seperator_15"></div>

        <section class='widget'>
            <header class='widget_title'><h1>Advertise here</h1></header>
            <div class='widget_body'><a href="https://buffalostardrivingschool.com/" target="_blank"><img
                            style="width: 100%; height: auto;"
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


