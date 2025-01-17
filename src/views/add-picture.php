<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    $gallery_id = $_POST['gallery_id'];
    for ($i = 1; $i <= 6; $i++) {
        $upl = 'upload' . $i;
        if ($_FILES[$upl]['error'] == 0) {
            $caption = htmlspecialchars($_POST['caption' . $i], ENT_QUOTES);
            $file = $_FILES[$upl]['tmp_name'];
            $file_name = htmlspecialchars($_FILES[$upl]['name'], ENT_QUOTES);

            $new_file_name = substr(md5(microtime()), rand(0, 26), 8) . '.' . get_file_type($file_name);

            $pic_no = 1;
            $type = $_FILES[$upl]['type'];
            $size = $_FILES[$upl]['size'];
            $dir = '../../upload02/img/picture'; // The directory that you want to download the file into it.
            $path = $dir . '/' . $new_file_name;
            $modified = date("Y-m-d H:i:s");
            if (file_exists($dir)) {
                if (move_uploaded_file($file, $path)) { //upload file to path folder
                    $sql = "INSERT INTO 
                                    tb_picture
                                VALUES
                                    (0, '$new_file_name', '$caption', '$gallery_id', $pic_no, '$type', '$size', '$dir', '$modified');        
                    ";
                    @mysql_query($sql) or die(mysql_error());
                } else {
                    echo 'ERROR: Can not Upload file!';
                    exit;
                }
            } else {
                echo 'ERROR: Upload folder not found!';
                exit;
            } // END file_exists
        }
    } // END for
    header("Refresh: 2; url=gallery.php");
    echo "Uploading file ...";
    exit;
}

$gallery_id = $_GET['gallery_id'];

$sql_g = "SELECT * FROM tb_gallery 
            WHERE id = $gallery_id;
        ";
$re_g = mysql_query($sql_g);
$g = mysql_fetch_array($re_g);

doc_head('ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="background-color: #e7e3b1;">
            <h2 class="text-center header-type">เพิ่มภาพในแกลอรี <span style="color: #333;"><?php echo $g['title']; ?></span></h2>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <form role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <input name="gallery_id" type="hidden" value="<?php echo $g['id']; ?>">
                    <div class="form-group">
                        <h3>ไฟล์ภาพที่ 1<span style="color: red;">**</span></h3>                                
                        <input type="file" name="upload1" required>                                            
                    </div>

                    <div class="form-group">                           
                        <label>Caption / คำอธิบายภาพ</label>
                        <input class="form-control" type="text" name="caption' . $i . '" placeholder="Caption / คำอธิบายภาพ">
                    </div>
                    <div style="border-top: 1px solid #777;">&nbsp;</div>
                    
                    <?php
                    for ($i = 2; $i <= 6; $i++) {
                        echo '                         
                                <div class="form-group">
                                    <h3>ไฟล์ภาพที่ ' . $i . '</h3>                                
                                    <input type="file" name="upload' . $i . '">                                            
                                </div>
                            
                                <div class="form-group">                           
                                    <label>Caption / คำอธิบายภาพ</label>
                                    <input class="form-control" type="text" name="caption' . $i . '" placeholder="Caption / คำอธิบายภาพ">
                                </div>
                                <div style="border-top: 1px solid #777;">&nbsp;</div>
                                ';
                    }
                    ?>
                    <button type="button" class="btn btn-default" onclick="window.location = 'gallery.php?gal_id=<?php echo $gallery_id; ?>';">Cancel</button> &nbsp;
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
            <p>&nbsp;</p>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
