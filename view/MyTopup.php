<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>เติมเงิน</title>
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
                        <nav class="navbar navbar-expand-custom navbar-mainbg _mymenu_pc" style="height: 65px;">

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <div class="hori-selector">
                                        <div class="left"></div>
                                        <div class="right"></div>
                                    </div>
                                    <li class="nav-item">
                                        <a class="nav-link " href="MyAuction.php"><i class="fas fa-tachometer-alt"></i>ประมูล </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="MyAccount.php"><i class="far fa-address-book"></i>โปร์ไฟล์ของฉัน </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="MyTopup.php"><i class="far fa-clone"></i>เติมเงิน </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Myinstallment.php"><i class="far fa-calendar-alt"></i>การผ่อน </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyDeposit.php"><i class="fas fa-calculator"></i>การมัดจำ </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyPreorder.php"><i class="fas fa-dice-d6"></i>รายการพรีออเดอร์ </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="MyOther.php"><i class="far fa-copy"></i>อื่นๆ </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- menu mobile  -->
                        <?php include('../view/mymenuMB.php'); ?>
                        <!-- menu mobile  -->
                    </div>
                    <div class="section-content">

                        <div class="uk-container uk-container-expand">
                            <div class="uk-margin-large-bottom uk-grid-collapse" data-uk-grid>
                                <div class="uk-width-1-5@l  _sidebar">
                                    <aside class="sidebar">
                                        <div class="widjet widjet-time-work">
                                            <h4 class="widjet__title">การเติมเงิน</h4>


                                            <ul class="uk-tab-left uk-tab" uk-tab="connect: #component-tab-left; animation: uk-animation-fade" aria-expanded="true">
                                                <li class="uk-active">
                                                    <div class="uk-button uk-button-widjet">เติมเงินค่าขนส่ง</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">เติมเงินค่านำเข้า</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">ประวัติเติมเงินค่านำเข้า</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                                <div class="uk-width-4-5@l list-padding-large">
                                    <div>

                                        <ul id="component-tab-left" class="uk-switcher" style="touch-action: pan-y pinch-zoom;">
                                            <li class="uk-active">
                                                <div>
                                                    <h3>เติมเงินค่าขนส่ง</h3>
                                                    <form>
                                                        <div class="uk-margin">
                                                            <p class="text-line3">จำนวนเงิน</p>
                                                            <div><input class="uk-input uk-form-width-medium" type="text" placeholder="กรอกจำนวนเงิน" id="width-fm"></div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <p>วันที่และเวลาที่ได้โอน</p>
                                                            <div class="uk-column-1-1@s uk-column-1-3@m uk-margin ">
                                                                <label>วัน<input class="uk-input uk-form-width-medium" type="date" placeholder=""></label>
                                                                <label>เวลา<input class="uk-input uk-form-width-medium" type="time" placeholder=""></label>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-horizontal-text"></label>
                                                            <div uk-form-custom="" class="uk-form-custom">
                                                                <input type="file">
                                                                <span class="uk-link"><img class="img-upload" src="../assets/img/home/butt-upload-deposit-figures02.png" alt=""></span>
                                                            </div>
                                                            <p class="text-price">จำนวนเงินคงเหลือทั้งหมด</p>
                                                            <p class="num-price">1425.00</p>
                                                            <div><a href="#!"><img class="bottom-claim" src="../assets/img/home/cf-but.png"></a></div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>เติมเงินค่านำเข้า</h3>
                                                    <form>
                                                        <div class="uk-margin">
                                                            <p class="text-line3">จำนวนเงิน</p>
                                                            <div><input class="uk-input uk-form-width-medium" type="text" placeholder="กรอกจำนวนเงิน" id="width-fm"></div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <p>วันที่และเวลาที่ได้โอน</p>
                                                            <div class="uk-column-1-1@s uk-column-1-3@m uk-margin ">
                                                                <label>วัน<input class="uk-input uk-form-width-medium" type="date" placeholder=""></label>
                                                                <label>เวลา<input class="uk-input uk-form-width-medium" type="time" placeholder=""></label>
                                                            </div>
                                                        </div>
                                                        <div class="uk-margin">
                                                            <label class="uk-form-label" for="form-horizontal-text"></label>
                                                            <div uk-form-custom="" class="uk-form-custom">
                                                                <input type="file">
                                                                <span class="uk-link"><img class="img-upload" src="../assets/img/home/butt-upload-deposit-figures02.png" alt=""></span>
                                                            </div>
                                                            <p class="text-price">จำนวนเงินคงเหลือทั้งหมด</p>
                                                            <p class="num-price">1425.00</p>
                                                            <div><a href="#!"><img class="bottom-claim" src="../assets/img/home/cf-but.png"></a></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>ประวัติเติมเงินค่านำเข้า</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="history-import.php" target="_blank">ดูรายการ</a></div>
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
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