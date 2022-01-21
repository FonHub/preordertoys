
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
                    <a class="btn-register" href="#register-center"> <img class="img-register" src="../assets/img/home/btn-register.png" alt=""></a>
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
        <div id="offcanvas" data-uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar uk-flex uk-flex-column uk-flex-between"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
                <div>
                    <div class="uk-margin">
                        <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="../assets/img/logo.svg" alt=""></a></div>
                    </div>
                    <div class="uk-margin-medium">
                        <ul class="uk-navbar-nav">
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
                        </ul>
                    </div>
                </div>
                <div>
                    <div class="uk-margin uk-text-center"><a class="sing-in" href="#signin-center"> <i class="fas fa-sign-in-alt"></i><span>Sign in</span></a></div>
                    <div class="uk-margin"> <a class="uk-button uk-button-danger" href="#register-center"> <span data-uk-icon="plus"></span><span>Register</span></a></div>
                </div>
            </div>
        </div>
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
            <a href="../view/register.php"><img class="btn_register" src="../assets/img/home/img-register.png" alt=""></a>
        </div>

    </div>
</div>