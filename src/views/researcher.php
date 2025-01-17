<?php
require_once '../system/system.php';

require '../includes/paging.inc.php';

if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {

    if (strlen(trim($_GET['keyword'])) == 0):
        header("Location: researcher.php");
        exit();
    endif;

    $field_search = htmlspecialchars($_GET['field_search'], ENT_QUOTES);
    $kw = htmlspecialchars($_GET['keyword'], ENT_QUOTES);
    $kw_ori = $kw;
    $kw = "%$kw%";

// Read order of current page
    $current_page = 1;
    if (isset($_GET['page'])) {
        $current_page = $_GET['page'];
    }

// Set rows per page and find the starting row
    $rows_per_page = 20;
    $start_row = paging_start_row($current_page, $rows_per_page);

    if ($field_search == 'firstname') {
        $sql_all = "SELECT SQL_CALC_FOUND_ROWS * FROM res_profile WHERE (firstname_th LIKE '$kw') OR (firstname_en LIKE '$kw') ORDER BY firstname_en LIMIT $start_row, $rows_per_page;";
        $sql_for_nums = "SELECT * FROM res_profile WHERE (firstname_th LIKE '$kw') OR (firstname_en LIKE '$kw') ORDER BY firstname_en;";
    } elseif ($field_search == 'lastname') {
        $sql_all = "SELECT SQL_CALC_FOUND_ROWS * FROM res_profile WHERE (lastname_th LIKE '$kw') OR (lastname_en LIKE '$kw') ORDER BY lastname_en LIMIT $start_row, $rows_per_page;";
        $sql_for_nums = "SELECT * FROM res_profile WHERE (lastname_th LIKE '$kw') OR (lastname_en LIKE '$kw') ORDER BY lastname_en;";
    } elseif ($field_search == 'institute') {
        $sql_all = "SELECT SQL_CALC_FOUND_ROWS * FROM res_employment WHERE institute LIKE '$kw' ORDER BY institute LIMIT $start_row, $rows_per_page;";
        $sql_for_nums = "SELECT * FROM res_employment WHERE institute LIKE '$kw' ORDER BY institute;";
    } elseif ($field_search == 'expertise') {
        $sql_all = "SELECT SQL_CALC_FOUND_ROWS * FROM res_expertise WHERE (topic LIKE '$kw') OR (specific_topic LIKE '$kw') LIMIT $start_row, $rows_per_page;";
        $sql_for_nums = "SELECT * FROM res_expertise WHERE (topic LIKE '$kw') OR (specific_topic LIKE '$kw');";
    } else {
        header("Location: index.php"); // Don't play around, sir!!!!
    }
    $result_all = mysql_query($sql_all);

    $result_for_nums = mysql_query($sql_for_nums);

// Find number of rows
    $found_rows = mysql_query("SELECT FOUND_ROWS();");
    $total_rows = mysql_result($found_rows, 0, 0);

// total page number
    $total_pages = paging_total_pages($total_rows, $rows_per_page);
} else {
    $field_search = 'firstname';
}

// END if

function check_field($field, $value) {
    if ($field == $value):
        echo ' selected';
    endif;
}

doc_head('ฐานข้อมูลนักนักฟิสิกส์ / นักวิจัย ศูนย์ความเป็นเลิศด้านฟิสิกส์');
?>

</head>

<body>
    <div class="container">

        <?php get_includes('header'); ?>

        <div class="row" style="margin-top: 10px;">
            <h2 class="text-center">ฐานข้อมูลนักฟิสิกส์ / นักวิจัย</h2>

            <p>&nbsp;</p>

            <!-- =============================== Search Researcher ================================= -->
            <div class="col-md-12 well" style="border: solid 1px #ddd;">

                <h3 class="text-center"><span class="glyphicon glyphicon-search"></span> Search ค้นหานักฟิสิกส์ / นักวิจัย</h3>
                <form role="form" name="form1" method="get" action="">
                    <div class="row">
                        <div class="col-sm-1 col-md-1" style=""><strong>ค้นหาจาก</strong></div>
                        <div class="col-sm-2 col-md-2" style="">
                            <select name="field_search" class="form-control">
                                <option value="firstname"<?php check_field($field_search, 'firstname'); ?>>ชื่อ</option>
                                <option value="lastname"<?php check_field($field_search, 'lastname'); ?>>นามสกุล</option>
                                <option value="institute"<?php check_field($field_search, 'institute'); ?>>สถาบัน</option>
                                <option value="expertise"<?php check_field($field_search, 'expertise'); ?>>ความเชี่ยวชาญ</option>
                            </select>
                        </div>
                        <div class="col-sm-7 col-md-7">
                            <input class="form-control" name="keyword" type="text" id="keyword" placeholder="คำค้น (keyword)" required 
                                   value="<?php
                                   if (isset($kw_ori)) {
                                       echo $kw_ori;
                                   }
                                   ?>">
                        </div>
                        <div class="col-sm-2 col-md-2"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></div>
                    </div>
                    <p>&nbsp;</p>
                </form>

            </div>

            <!-- =============================== END Search Researcher ================================= -->       


            <?php if (isset($result_all)): ?>
                <div class="col-md-12" style="margin-top: 20px;">
                    <h3>ผลการค้นหา</h3>
                    คำค้นหา <strong style="color: blue;"><?php echo $kw_ori; ?></strong>

                    <?php if (mysql_num_rows($result_all) > 0): ?>

                        <?php if ($field_search == 'firstname') : ?>
                            <br>ค้นหาจาก <strong>ชื่อ (firstname)</strong> 
                            <?php $num_rows = mysql_num_rows($result_for_nums); ?>
                            <?php $start_at = $rows_per_page * ($current_page - 1) + 1; ?> 
                            <?php $i = $start_at; ?>

                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <strong style="color: green;"><?php echo $num_rows; ?></strong> คน ดังนี้                            

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_em = "SELECT * FROM res_employment WHERE researcher_id = $r_all->researcher_id ORDER BY institute;"; ?>
                                        <?php $result_em = mysql_query($sql_em); ?>

                                        <?php if (mysql_num_rows($result_em) > 0): ?>
                                            <?php while ($r_em = mysql_fetch_object($result_em)): ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                            <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $r_em->institute; ?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                        <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td> - </td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php elseif ($field_search == 'lastname') : ?>
                            <br>ค้นหาจาก <strong>นามสกุล (surname)</strong>
                            <?php $num_rows = mysql_num_rows($result_for_nums); ?>
                            <?php $start_at = $rows_per_page * ($current_page - 1) + 1; ?> 
                            <?php $i = $start_at; ?>
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <strong style="color: green;"><?php echo $num_rows; ?></strong> คน ดังนี้

                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_em = "SELECT * FROM res_employment WHERE researcher_id = $r_all->researcher_id ORDER BY institute;"; ?>
                                        <?php $result_em = mysql_query($sql_em); ?>

                                        <?php if (mysql_num_rows($result_em) > 0): ?>
                                            <?php while ($r_em = mysql_fetch_object($result_em)): ?>

                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td>
                                                        <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                            <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                        </a>
                                                    </td>
                                                    <td><?php echo $r_em->institute; ?></td>
                                                </tr>

                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_all->researcher_id; ?>">
                                                        <?php echo $r_all->title_en . $r_all->firstname_en . ' ' . $r_all->lastname_en . '<br>' . $r_all->title_th . $r_all->firstname_th . ' ' . $r_all->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td> - </td>
                                            </tr>
                                        <?php endif; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php elseif ($field_search == 'institute') : ?>
                            <br>ค้นหาจาก <strong>สถาบัน (institute)</strong>
                            <?php $num_rows = mysql_num_rows($result_for_nums); ?>
                            <?php $start_at = $rows_per_page * ($current_page - 1) + 1; ?> 
                            <?php $i = $start_at; ?>
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <strong style="color: green;"><?php echo $num_rows; ?></strong> คน ดังนี้


                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>สถาบัน (institute)</th>
                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>
                                        <?php $sql_pro = "SELECT * FROM res_profile WHERE researcher_id = $r_all->researcher_id ORDER BY firstname_en;"; ?>
                                        <?php $result_pro = mysql_query($sql_pro); ?>

                                        <?php while ($r_pro = mysql_fetch_object($result_pro)): ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_pro->researcher_id; ?>">
                                                        <?php echo $r_pro->title_en . $r_pro->firstname_en . ' ' . $r_pro->lastname_en . '<br>' . $r_pro->title_th . $r_pro->firstname_th . ' ' . $r_pro->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $r_all->institute; ?></td>
                                            </tr>

                                        <?php endwhile; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>


                        <?php elseif ($field_search == 'expertise') : ?>
                            <br>ค้นหาจาก <strong>ความเชี่ยวชาญ (expertise)</strong>
                            <?php $num_rows = mysql_num_rows($result_for_nums); ?>
                            <?php $start_at = $rows_per_page * ($current_page - 1) + 1; ?> 
                            <?php $i = $start_at; ?>
                            <br>พบนักฟิสิกส์ / นักวิจัย ทั้งหมด <strong style="color: green;"><?php echo $num_rows; ?></strong> คน ดังนี้


                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th width="12">No.</th>
                                        <th>ชื่อ นามสกุล (first name & surname)</th>
                                        <th>ความเชี่ยวชาญ (expertise)</th>

                                    </tr>
                                    <?php while ($r_all = mysql_fetch_object($result_all)) : ?>

                                        <?php $sql_pro = "SELECT * FROM res_profile WHERE researcher_id = $r_all->researcher_id ORDER BY firstname_en DESC;"; ?>
                                        <?php $result_pro = mysql_query($sql_pro); ?>                                
                                        <?php while ($r_pro = mysql_fetch_object($result_pro)): ?>

                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td>
                                                    <a href="researcher_profile.php?id=<?php echo $r_pro->researcher_id; ?>">
                                                        <?php echo $r_pro->title_en . $r_pro->firstname_en . ' ' . $r_pro->lastname_en . '<br>' . $r_pro->title_th . $r_pro->firstname_th . ' ' . $r_pro->lastname_th; ?>
                                                    </a>
                                                </td>
                                                <td>                                                    
                                                    <?php if (!empty($r_all->topic)): ?>
                                                        <?php echo $r_all->topic; ?><br>
                                                    <?php endif; ?>
                                                    <?php if (!empty($r_all->specific_topic)): ?>
                                                        - <?php echo $r_all->specific_topic; ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>

                                        <?php endwhile; ?>

                                        <?php $i++; ?>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>

                        <?php endif; ?>

                    <?php else : ?>

                        <?php if ($field_search == 'firstname'): ?>
                            <br>ค้นหาจาก <strong>ชื่อ (firstname)</strong>
                        <?php elseif ($field_search == 'lastname'): ?>
                            <br>ค้นหาจาก <strong>นามสกุล (surname)</strong>
                        <?php elseif ($field_search == 'institute'): ?>
                            <br>ค้นหาจาก <strong>สถาบัน (institute)</strong>
                        <?php elseif ($field_search == 'expertise'): ?>
                            <br>ค้นหาจาก <strong>ความเชี่ยวชาญ (expertise)</strong>
                        <?php endif; ?>
                        <p><strong style="color: red;">ขออภัย ไม่พบข้อมูล</strong></p>

                    <?php endif; ?>

                </div>
                <?php if (isset($start_at) && isset($i)): ?>
                    <p>แสดงข้อมูลลำดับที่ 
                        <strong>
                            <?php
                            if ($start_at == ($i - 1)):
                                echo $start_at;
                            else:
                                echo $start_at . ' - ' . --$i;
                            endif;
                            ?>
                        </strong>
                        จากจำนวน <strong><?php echo $num_rows; ?></strong> คน
                    </p>

                    <?php
                    $page_range = 5;
                    $qry_string = "field_search=$field_search&keyword=$kw_ori";

                    // Create link between pages
                    $page_str = paging_pagenum($current_page, $total_pages, $page_range, $qry_string);
                    ?>

                    <?php if ($num_rows > $rows_per_page): ?>
                        <nav>
                            <ul class="pagination">
                                <?php echo $page_str; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>                    

                <?php endif; ?>

            <?php endif; ?>

        </div> <!-- /.row -->

        <?php get_includes('footer'); ?>

    </div> <!-- /.container -->

    <?php get_includes('bootstrap-core'); ?>
</body>
</html>
