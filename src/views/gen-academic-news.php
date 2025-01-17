<?php
require_once '../system/system.php';

doc_head('ข่าววิชาการทั่วไป');
?>

<!-- Datepicker -->
<link href="../plugins/jqueryui/jquery-ui-1.10.3/themes/base/jquery-ui.css" rel="stylesheet" />
<style>
    #ui-datepicker-div{
        width: 316px;
    }
</style>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>
        <div class="bs-example">
            <h2 class="text-center"><a href="gen-academic-news.php">ข่าววิชาการทั่วไป</a></h2>
            <?php
            if (isset($_GET['news_id'])) {
                $news_id = $_GET['news_id'];
                $sql = "SELECT * FROM tb_news WHERE id = '$news_id';";
                $result = mysql_query($sql);
                $p = mysql_fetch_array($result);
                if ($p['type'] != 'gen-academic') {
                    echo '
                    <script>
                        window.location = \'gen-academic-news.php\';
                    </script>     
                    ';
                    exit();
                }
                if ($p['new'] == 'y') {
                    $new_gif = ' <img src="../images/new1.gif">';
                } else {
                    $new_gif = '';
                }
                echo '                            
                            <div id="news-' . $p['id'] . '">
                                ';
                admin('<p><a id="edit-news" style="cursor: pointer; font-weight: bold;"><span class="glyphicon glyphicon-wrench"></span> Edit</a></p>');
                echo '
                                <h3>' . htmlspecialchars_decode($p['title']) . $new_gif . '</h3>
                                <p><small><em>' . thai_date($p['date']) . '</small></em></p>
                                ' . htmlspecialchars_decode($p['content_long']) . '
                            </div>
                            ';
                ?>
                <script>
                    $(function(){
                        $('#edit-news').click(function(){
                            $(document).ajaxStart(function(){
                                $('.bs-example').html("<div class=\"span12 text-center\" ><img src='../images/demo_wait.gif' /></div>");
                            });
                            $.get("<?php controll('edit-gen-news'); ?>", {edit_news: "<?php echo $p['id']; ?>"}, 
                            function(data){ $('.bs-example').html(data); }
                        );
                        });
                                                            
                    });
                </script>
                <?php
            } else {
                echo '<p>&nbsp</p>';
                $sql = "SELECT * FROM tb_news WHERE type = 'gen-academic' ORDER BY date DESC;";
                $result = mysql_query($sql);
                if (mysql_num_rows($result) > 0) {
                    $l = 0;
                    while ($p = mysql_fetch_array($result)) {
                        $l++;
                        if ($p['new'] == 'y') {
                            $new_gif = ' <img src="../images/new1.gif">';
                        } else {
                            $new_gif = '';
                        }
                        echo '                            
                            <div id="news-' . $p['id'] . '">
                                <h4 style="display: inline;"><a onclick="window.location=\'?news_id=' . $p['id'] . '\';" style="cursor: pointer;">' . $l . '. ' . htmlspecialchars_decode($p['title']) . $new_gif . '</a></h4>
                                <small><em>' . thai_date($p['date']) . '</small></em>                                
                            </div>
                            <hr>
                            ';
                    } // END while
                } else {
                    echo '<h3 class="text-center">ขออภัย ไม่พบข้อมูล</h3>';
                }
            } // END if else
            ?>

            <p>&nbsp;</p>            
        </div>
        <?php get_includes('footer'); ?>
    </div>
    <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>

</body>
</html>