
<div class="row">
    <a title="Thailand Center of Excellence in Physics" href="home_en.php"><img class="img-responsive" style="margin: 0 auto;" alt="ThEP-Center" src="../images/thep_head_9_1200.png"></a>
</div>

<div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6"><p><a title="Thailand Center of Excellence in Physics" href="home_en.php">HOME</a></p></div>
    <div class="col-xs-6 col-sm-6 col-md-6 text-right" style="padding-right: 20px;">
        <?php if (isset($_SESSION['login'])): $login_name = $_SESSION['login']; else : $login_name = ''; endif;
        login('<span style="background-color: #e7e3b1;"><strong >Hello <span style="color: #cc3000;">' . $login_name . '</span></strong>&nbsp; [ <a href="logout.php" style="color: red;"><span class="glyphicon glyphicon-log-out"></span> Logout</a>]</span> &nbsp;'); ?> <a title="เว็บฉบับภาษาไทย" href="home.php"><img style="width: 30px;" alt="Thai" src="../images/thailand-flag.gif"></a> <img title="English version" style="width: 30px;" alt="English" src="../images/en_ver.gif"></div>
</div>

<!-- /#header -->
<div class="pageline" id="firstpageline"></div>
