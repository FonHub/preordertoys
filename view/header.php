<link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="shortcut icon" href="../assets/img/favicon/favicon.ico">
<meta name="msapplication-TileColor" content="#2b5797">
<meta name="msapplication-config" content="../assets/img/favicon/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="../assets/css/uikit.min.css">
<link rel="stylesheet" href="../assets/css/all.min.css">
<link rel="stylesheet" href="../assets/css/simple-line-icons.css">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" href="../assets/css/style.min.css">
<link rel="stylesheet" href="../assets/css/responsive.min.css">

<!-- V2 -->
<link rel="stylesheet" href="../assets/css/styleV2.min.css">

<div class="page-header__scroll">
    <div class="uk-container uk-container-xlarge">
        <div class="page-header__inner">
            <div class="page-header__left">
                <div class="page-header__time">
                    <img class="icon_clock" src="../assets/img/home/icon-clock.png" alt="">
                    <div class="time-home">
                        <div class="time-zone">
                            <img class="icon_thai" src="../assets/img/home/icon-thai.png" alt="">
                            <p>เวลาญี่ปุ่น :</p>
                        </div>
                        <div class="time-date">
                            <div class="uk-grid-small uk-child-width-auto uk-grid ">
                                <div class="time-date __DD">28
                                    <span class="time-date-separator">:</span>
                                </div>
                                <div class="time-date __MM">Sep
                                    <span class="time-date-separator">:</span>
                                </div>
                                <div class="time-date __YYYY">2021
                                </div>
                            </div>
                        </div>
                        <div class="time-hours">
                            <div class="uk-grid-small uk-child-width-auto uk-grid ">
                                <div class="time-hours __hh">15
                                    <span class="time-hours">:</span>
                                </div>
                                <div class="time-hours __mm">00
                                    <span class="time-hours">:</span>
                                </div>
                                <div class="time-hours __ss">05
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-header__center">
                <div class="page-header__logo logo"><a class="logo__link" href="../view/index.php">
                        <img class="logo__img" src="../assets/img/home/logo_joy.png" alt=""></a>
                </div>
            </div>
            <div class="page-header__right">
                <div class="page-header__sing-in">
                    <a class="sing-in" href="#signin-center" uk-toggle> <img class="img-sing-in" src="../assets/img/home/btn-signin.png" alt=""></a>
                    <a class="btn-register" href="#register-condition" uk-toggle> <img class="img-register" src="../assets/img/home/btn-register.png" alt=""></a>
                    <div>
                        <div class="uk-inline">
                            <button class="uk-button uk-button-default _myprofile" type="button">โปร์ไฟล์ของฉัน</button>
                            <div uk-dropdown="pos: bottom-justify">
                                <ul class="uk-nav uk-dropdown-nav text_f">
                                    <li class="uk-active"><a href="MyAccount.php">ข้อมูลทั่วไป</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">เติมเงิน</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">การผ่อน</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">การมัดจำ</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">ประมูล</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">รายการพรีออเดอร์</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">อื่นๆ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-header__cart">
                    <a class="btn-addtocart" href="#!">
                        <img src="../assets/img/home/btn-addtocart-1.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="bar-welcome">
            <img src="../assets/img/home/bar-welcome.png" alt="">
        </div>
        <div>
            <div class="page-header__mainmenu">
                <nav class="mainmenu" data-uk-navbar="">
                    <ul class="uk-navbar-nav">
                        <li><a href="../view/index.php"> HOME</a>
                        </li>
                        <li><a href="../view/auctionjapan.php">ประมูลสินค้า</a>
                        </li>
                        <li><a href="#!">วิธีการใช้งาน</a>
                        </li>
                        <li><a href="../view/preorderfigures.php">PREORDER FIGURES</a>
                        </li>
                        <li><a href="../view/preorderresin.php">PREORDER RESIN</a>
                        </li>
                        <li><a href="../view/news.php">ข่าวสาร</a>
                        </li>
                        <li><a href="../view/auctionrose.php">ประมูลในไทย</a>
                        </li>
                        <li><a href="#!">BUNDLE ITEMS</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="page-header__btn-menu"><a href="#offcanvas" data-uk-toggle data-uk-icon="menu"></a></div>
        </div>
        <!-- offcanvas -->
        <div id="offcanvas" data-uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
                <div>
                    <div class="uk-margin">
                        <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="../assets/img/logo.svg" alt=""></a></div>
                    </div>
                    <div class="shift __styleV2">
                        <ul class="">
                            <li><a href="../view/index.php"> Home</a>
                            </li>
                            <li><a href="../view/auctionjapan.php">ประมูลสินค้า</a>
                            </li>
                            <li><a href="">วิธีการใช้งาน</a>
                            </li>
                            <li><a href="../view/preorderfigures.php">PREORDER FIGURES</a>
                            </li>
                            <li><a href="../view/preorderresin.php">PREORDER RESIN</a>
                            </li>
                            <li><a href="../view/news.php">ข่าวสาร</a>
                            </li>
                            <li><a href="../view/auctionrose.php">ประมูลในไทย</a>
                            </li>
                            <li><a href="../view/bundleitems.php">Bundle items</a>
                            </li>
                            <li>
                                <a class="sing-in" href="#signin-center" uk-toggle> Sign in</a>
                            </li>
                            <li>
                                <a href="#register-condition" uk-toggle> <span>Register</a>
                            </li>
                            <li>
                                <a href="#!" class="_myprofile">โปร์ไฟล์ของฉัน</a>
                                <div uk-dropdown="pos: bottom-justify">
                                    <ul class="uk-nav uk-dropdown-nav text_f">
                                        <li class="uk-active"><a href="MyAccount.php">ข้อมูลทั่วไป</a></li>
                                        <li><a href="#">เติมเงิน</a></li>
                                        <li><a href="#">การผ่อน</a></li>
                                        <li><a href="#">การมัดจำ</a></li>
                                        <li><a href="#">ประมูล</a></li>
                                        <li><a href="#">รายการพรีออเดอร์</a></li>
                                        <li><a href="#">อื่นๆ</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas -->
    </div>
</div>

<!-- modal signin -->
<div id="signin-center" class="uk-flex-top " uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical _boxsigninbg">

        <div class="signin __form">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="section-title uk-text-center h3box-auction">
                <h3 class="h3-home-titel"><img class="h3-signin-img mb-20 " src="../assets/img/home/h3-login.png" alt=""></h3>
            </div>
            <form>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin uk-text-center ">
                        <label class="uk-legend">ชื่อผู้ใช้งาน <span class="uk-alert-danger">*</span> </label>
                        <input class="uk-input" type="text" placeholder="ชื่อผู้ใช้">
                    </div>
                    <div class="uk-margin uk-text-center ">
                        <label class="uk-legend">รหัสผ่าน <span class="uk-alert-danger">*</span> </label>
                        <input class="uk-input" type="text" placeholder="รหัส">
                    </div>
                    <div class="uk-margin uk-flex uk-flex-between">
                        <label><input class="uk-checkbox" type="checkbox" checked> จดจำชื่อผู้ใช้และรหัสผ่าน</label>
                        <label><a href="#!">ลืมรหัสผ่าน</a> </label>
                    </div>

                    <div class="uk-margin uk-text-center ">
                        <a href="#!">
                            <img class="btn_signin" src="../assets/img/home/img-btnsingin.png" alt="">
                        </a>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="uk-modal-footer uk-flex uk-flex-between _boxsignin">
            <p>หากท่านยังไม่มีบัญชีผู้ใช้</p>
            <a href="#register-condition" uk-toggle><img class="btn_register" src="../assets/img/home/img-register.png" alt=""></a>
        </div>

    </div>
</div>

<!-- modal register condition-->
<div id="register-condition" class="uk-flex-top " uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical wbox-100">

        <div class="register __form">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <form>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin uk-text-center ">
                        <a href="#register-center" uk-toggle>
                            <img src="../assets/img/popup/condition.png" alt="">
                        </a>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>


<!-- modal register -->
<div id="register-center" class="uk-flex-top " uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical wbox-100">

        <div class="register __form">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="section-title uk-text-center h3box-auction">
                <h3 class="h3-home-titel"><img class="h3-signin-img mb-20 " src="../assets/img/popup/H-register.png" alt=""></h3>
            </div>
            <form id="regForm" action="">
                <!-- One "tab" for each step in the form: -->
                <div class="tab tab01">
                    <h3 class="h3-tab01-titel"><img class="h3-tab01 mb-20 " src="../assets/img/popup/tab01.png" alt=""></h3>
                    <div>
                        <p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> รายละเอียดผู้สมัคร</p>

                        <form>
                            <div class="uk-column-1-1@s uk-column-1-3@m uk-margin ">
                                <label>ชื่อผู้ใช้<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
                                <label>รหัสผ่าน<span class="text-danger">*</span><input class="uk-input" type="number" placeholder=""> </label>
                                <label>ยืนยันรหัสผ่าน<span class="text-danger">*</span><input class="uk-input" type="number" placeholder=""> </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-3@m uk-margin ">
                                <label>คำนำหน้า<span class="text-danger">*</span>
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
                                <label>ชื่อ<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
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
                        </form>
                    </div>
                </div>

                <div class="tab tab02">
                    <h3 class="h3-tab01-titel"><img class="h3-tab01 mb-20 " src="../assets/img/popup/tab02.png" alt=""></h3>
                    <div>
                        <p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> ที่อยู่ปัจจุบัน:</p>

                        <form>
                            <div class="uk-column-1-1@s uk-margin">
                                <label>สถานที่ตั้ง <small>(หมู่บ้าน/อาคาร/อื่นๆ)</small><span class="text-danger">*</span><input class="uk-input" type="text" placeholder=""> </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-2@m  uk-margin">
                                <label>บ้านเลขที่<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                                <label>เลขที่ห้อง<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-2@m  uk-margin">
                                <label>ชั้นที่<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                                <label>หมู่<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-2@m  uk-margin">
                                <label>ตรอก/ซอย<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                                <label>ถนน<span class="text-danger">*</span><input class="uk-input" type="text" placeholder=" "> </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-2@m  uk-margin">
                                <label>รหัสไปรษณีย์<span class="text-danger">*</span>
                                    <div>
                                        <select class="uk-select" placeholder="กรุณาเลือก">
                                            <option>10400</option>
                                            <option>10900</option>
                                        </select>
                                    </div>
                                </label>
                                <label>จังหวัด<span class="text-danger">*</span>
                                    <div>
                                        <select class="uk-select" placeholder="กรุณาเลือก">
                                            <option>กรุงเทพฯ</option>
                                            <option>นนทบุรี</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                            <div class="uk-column-1-1@s uk-column-1-2@m  uk-margin">
                                <label>เขต/อำเภอ<span class="text-danger">*</span>
                                    <div>
                                        <select class="uk-select" placeholder="กรุณาเลือก">
                                            <option>สามเสน/พญาไท</option>
                                            <option>จอมพล/จตุจักร</option>
                                        </select>
                                    </div>
                                </label>
                                <label>แขวง/ตำบล <span class="text-danger">*</span>
                                    <div>
                                        <select class="uk-select" placeholder="กรุณาเลือก">
                                            <option>คลองเตย</option>
                                            <option>คลองตัน</option>
                                        </select>
                                    </div>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div style="overflow:auto;">
                    <div style="text-align: center;">
                        <button class="btn-bgstyle2" type="button" id="prevBtn" onclick="nextPrev(-1)">ย้อนกลับ</button>
                        <button class="btn-bgstyle2" type="button" id="nextBtn" onclick="nextPrev(1)">ถัดไป</button>
                    </div>
                </div>

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "ส่ง";
        } else {
            document.getElementById("nextBtn").innerHTML = "ถัดไป";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>