<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>รายการอื่นๆ</title>
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
                                        <a class="nav-link " href="MyTopup.php"><i class="far fa-clone"></i>เติมเงิน </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="Myinstallment.php"><i class="far fa-calendar-alt"></i>การผ่อน </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="MyDeposit.php"><i class="fas fa-calculator"></i>การมัดจำ </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link" href="MyPreorder.php"><i class="fas fa-dice-d6"></i>รายการพรีออเดอร์ </a>
                                    </li>
                                    <li class="nav-item active">
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
                                            <h4 class="widjet__title">รายการอื่นๆ</h4>


                                            <ul class="uk-tab-left uk-tab" uk-tab="connect: #component-tab-left; animation: uk-animation-fade" aria-expanded="true">
                                                <li class="uk-active">
                                                    <div class="uk-button uk-button-widjet">MAILBOX</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">ข้อควรระวัง</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">รายการเคลมสินค้า</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">ใบขนศุลกากร</div>
                                                </li>
                                                <li>
                                                    <div class="uk-button uk-button-widjet">อัตราการแลกเปลี่ยน</div>
                                                </li>
                                               
                                                <li>
                                                    <div class="uk-button uk-button-widjet">ติดต่อเรา</div>
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
                                                    <h3>MAILBOX</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="mailbox.php" target="_blank">ดูรายการ</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>ข้อควรระวัง</h3>
                                                    <div>
                                                        <p class="text-line3">1. ควรเลือกผู้ขายที่มีคะแนนตั้งแต่ 1000 ขึ้นไป</p>
                                                        <p class="text-line3">2. โปรดระวังสินค้าราคาถูกแต่จะมีค่าส่งแพง 5 เท่าจากจีน หากสั่งซื้อแล้วยกเลิกไม่ได้</p>
                                                        <p class="text-line3">3. สินค้าที่ให้ไปปรับเองหน้าร้านญี่ปุ่นงดให้บริการ</p>
                                                        <p class="text-line3">4. สินค้าราคาถูกกว่าปกติต้องดูให้รอบคอบ หากเป็นของปลอมยกเลิกไม่ได้</p>
                                                        <p class="text-line3">5. ห้ามบิดสินค้าผิดกฎหมายไทย</p>
                                                        <p class="text-line3">6. ประมูลสินค้าสำเร็จแล้วยกเลิกไม่ได้ทุกกรณี</p>
                                                        <p class="text-line3">7. หากเกิดสงคราม เรือร่ม โจรสลัด อุบัติเหตุ หรือโรคระบาด ที่ทำให้ไม่สามารถนำเข้าสินค้าได้ไม่สามารถคืนเงินได้ทุกกรณี</p>
                                                        <p class="text-line3">8. หากในสถานการณ์ปกติสินค้าสูญหาย คืนเงินให้เต็มจำนวน หลังสอบสวนภายในองค์กร 60 วัน นับจากวันที่สูญหาย</p>
                                                        <p class="text-line3">9. สินค้าแตกหัก บุบ เน่าเสีย แห้งตาย หมดอายุ ไม่สามารถคืนเงินได้ทุกกรณี</p>
                                                        <p><a href="#!"><img class="bottom-claim" src="../assets/img/home/btn-caution.png"></a></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>รายการเคลมสินค้า</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="claims-rose.php" target="_blank">ดูรายการ</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>รับทำใบขน-ดำเนินศุลกากรทางไปรษณีย์</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="clear-tax-audit.php" target="_blank">ดูรายการ</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>อัตราการแลกเปลี่ยน</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="exchange-rate.php" target="_blank">ดูรายการ</a></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h3>ติดต่อเรา</h3>
                                                    <div class="blog-card__more"><a class="uk-button uk-button-default" href="ticket.php" target="_blank">ดูรายการ</a></div>
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