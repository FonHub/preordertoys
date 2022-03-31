<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>My Account</title>
    <meta content="Joy Preordertoys" name="author">
    <meta content="Joy Preordertoys" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <?php include('../layout/headlink.php'); ?>

</head>

<body class="page-home">
    <div class="page-wrapper">
        <header class="page-header _bgheader">
            <?php include('../view/header.php'); ?>
        </header>

        <main class="page-main">
            <div class="section-news">
                <!-- container -->
                <div class="uk-container uk-container-expands">

                    <div class="uk-margin">
                        <nav class="navbar navbar-expand-custom navbar-mainbg" style="height: 65px;">

                            <div class="collapse navbar-collapse _mymenu_pc" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <div class="hori-selector">
                                        <div class="left"></div>
                                        <div class="right"></div>
                                    </div>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyAuction.php"><i class="fas fa-tachometer-alt"></i>ประมูล</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="MyAccount.php"><i class="far fa-address-book"></i>โปร์ไฟล์ของฉัน</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyTopup.php"><i class="far fa-clone"></i>เติมเงิน</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Myinstallment.php"><i class="far fa-calendar-alt"></i>การผ่อน</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyDeposit.php"><i class="fas fa-calculator"></i>การมัดจำ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyPreorder.php"><i class="fas fa-dice-d6"></i>รายการพรีออเดอร์</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyOther.php"><i class="far fa-copy"></i>อื่นๆ</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- menu mobile  -->
                        <?php include('../view/mymenuMB.php'); ?>
                        <!-- menu mobile  -->
                    </div>
                    <div>
                        <!-- form -->
                        <form>
                            <fieldset class="uk-fieldset">
                                <div class="uk-column-1-1@s uk-column-1-2@m uk-margin">
                                    <div class="uk-margin">
                                        <label class="uk-legend">ชื่อผู้ใช้งาน <span>*</span> </label>
                                        <input class="uk-input" type="text" placeholder="">
                                    </div>
                                    <div class="uk-margin">
                                        <label class="uk-legend">รหัสผ่าน <span>*</span> </label>
                                        <input class="uk-input" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="uk-column-1-1@s uk-column-1-2@m uk-margin ">
                                    <div class="uk-flex">
                                        <label class="uk-form-label">คำนำหน้า<span>*</span>
                                            <div>
                                                <div uk-form-custom="target: > * > span:first-child">
                                                    <select>
                                                        <option value=""></option>
                                                        <option value="1">นาง</option>
                                                        <option value="2">นางสาว</option>
                                                    </select>
                                                    <button class="uk-button uk-button-default btn-style2" type="button" tabindex="-1">
                                                        <span></span>
                                                        <span uk-icon="icon: chevron-down"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </label>
                                        <div class="uk-form-controls btn__block">
                                            <label>ชื่อ<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
                                        </div>
                                    </div>
                                    <label>นามสกุล<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
                                </div>
                                <div class="uk-column-1-1@s uk-column-1-2@m uk-margin ">
                                    <label>วันเกิด(ว/ด/ป)<span class="text-danger">*</span><input class="uk-input" type="date" placeholder=""></label>
                                    <label>บัตรประชาชน<span class="text-danger">*</span><input class="uk-input" type="number" placeholder=""> </label>
                                </div>
                                <div>
                                    <p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> ข้อมูลติดต่อ</p>
                                </div>
                                <div class="uk-column-1-1@s uk-column-1-3@m uk-margin ">
                                    <label>โทรศัพท์<span class="text-danger">*</span><input class="uk-input" type="number" placeholder=""> </label>
                                    <label>Email<span class="text-danger">*</span><input class="uk-input" type="email" placeholder=""></label>
                                    <label>LINE ID<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
                                </div>
                                <div class="uk-margin uk-text-center ">
                                    <button class="btn-bgstyle2" type="button">บันทึก</button>
                                </div>


                            </fieldset>
                        </form>
                        <!-- //form -->
                    </div>
                </div>
            </div>



        </main>
        <!-- footer -->
        <?php include('../view/footer.php'); ?>
        <!-- /page wrapper -->
    </div>
    <!-- script -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/uikit.min.js"></script>
    <script src="../assets/js/uikit-icons.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        // ---------Responsive-navbar-active-animation-----------
        function test() {
            var tabsNewAnim = $('#navbarSupportedContent');
            var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
            var activeItemNewAnim = tabsNewAnim.find('.active');
            var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
            var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
            var itemPosNewAnimTop = activeItemNewAnim.position();
            var itemPosNewAnimLeft = activeItemNewAnim.position();
            $(".hori-selector").css({
                "top": itemPosNewAnimTop.top + "px",
                "left": itemPosNewAnimLeft.left + "px",
                "height": activeWidthNewAnimHeight + "px",
                "width": activeWidthNewAnimWidth + "px"
            });
            $("#navbarSupportedContent").on("click", "li", function(e) {
                $('#navbarSupportedContent ul li').removeClass("active");
                $(this).addClass('active');
                var activeWidthNewAnimHeight = $(this).innerHeight();
                var activeWidthNewAnimWidth = $(this).innerWidth();
                var itemPosNewAnimTop = $(this).position();
                var itemPosNewAnimLeft = $(this).position();
                $(".hori-selector").css({
                    "top": itemPosNewAnimTop.top + "px",
                    "left": itemPosNewAnimLeft.left + "px",
                    "height": activeWidthNewAnimHeight + "px",
                    "width": activeWidthNewAnimWidth + "px"
                });
            });
        }
        $(document).ready(function() {
            setTimeout(function() {
                test();
            });
        });
        $(window).on('resize', function() {
            setTimeout(function() {
                test();
            }, 500);
        });
        $(".navbar-toggler").click(function() {
            $(".navbar-collapse").slideToggle(300);
            setTimeout(function() {
                test();
            });
        });



        // --------------add active class-on another-page move----------
        jQuery(document).ready(function($) {
            // Get current path and find target link
            var path = window.location.pathname.split("/").pop();

            // Account for home page with empty path
            if (path == '') {
                path = 'index.html';
            }

            var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
            // Add active class to target link
            target.parent().addClass('active');
        });
    </script>
    <!-- body -->
</body>

</html>