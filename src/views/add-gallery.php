<?php
require_once '../system/system.php';
notlogin_header('home.php');

if ($_POST) {
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
    $detail = htmlspecialchars($_POST['detail'], ENT_QUOTES);
    $modified = date("Y-m-d H:i:s");
    $sql = "INSERT INTO tb_gallery VALUES (0, '$title', '$detail' , '$modified');";
    @mysql_query($sql) or die(mysql_error());

    header("Location: gallery.php");
    exit();
}

doc_head('Add Gallery');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="background-color: #e7e3b1;">
            <div class="col-md-12">
                <h2 class="text-center">Add Gallery</h2>
                <form class="form-horizontal" role="form" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">ชื่อแกลอรี <span style="color: red;">**</span></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">คำอธิบาย / รายละเอียด</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="2" name="detail"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" class="btn btn-default" onclick="window.location='gallery.php'">Cancel</button> &nbsp;
                            <input type="submit" value="Add" class="btn btn-primary"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php get_includes('footer'); ?>

    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
