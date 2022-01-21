<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Preordertoys Register </title>
    <meta content="Joy Preordertoys" name="author">
    <meta content="Joy Preordertoys" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=no">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <?php include('../layout/headlink.php'); ?>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600&display=swap');
.title-re{
    font-size: 18px;
    margin-top: 20px;
}
.uk-container>:last-child {
    margin-bottom: 15vh;
}
.top-title{
    font-size: 40px;
    text-align: center;
    margin-top: 20px;
    font-weight: 600;
}
.uk-button {
    margin: 0;
    width: 100%;
    padding: 0px 20px;
    /* padding: 0px 290px 0 20px; */
    border-radius: 5px;
    text-align: left;
    text-align-last: left;
    height: 30px;
    background-color: #dfd8b8;
    font-size: 14px;
    font-weight: normal;
    justify-content: left;
}
#wd-fm{
    width: 45%;
}
#wd-fm-au{
    width: 10%;
}
.section-banner--register {
    background: url(../img/home/line-gold.png), url(../img/home/line-gold.png), url(../img/home/back-regis.png);
    background-position: left top, left bottom, center center;
    background-size: contain, contain, cover;
    background-repeat: no-repeat, no-repeat, repeat;
    height: 90vh;
}


@media (max-width: 1549px){

    .section-banner--register {
    height: 115vh;
}

}

@media (max-width: 1449px){

    .section-banner--register {
    height: 95vh;
}

}

@media (max-width: 1059px){

}

@media (max-width: 598px){
.section-banner--register {
    height: 190vh;
}
}

</style>

<body class="page-home">
    <div class="page-wrapper">
        <header class="page-header _bgheader">
            <?php include('../view/header.php'); ?>
        </header>

        <main class="page-main">
            <!-- container -->
            <div class="section-banner section-banner--register">
            <div class="uk-container">
                <p class="top-title">สมัครสมาชิก</p>
            <div class="p-product-list-note uk-padding uk-margin" id="bot-fm">
                                        <ul uk-tab>
                                            <li><a href="#"><span class="title_detail">รายละเอียดผู้สมัคร</span> </a></li>
                                            <li><a href="#"><span class="title_detail">รายละเอียดที่อยู่</span> </a></li>
                                        </ul>

                                        <ul class="uk-switcher uk-margin">
                                            <li>
                                                <div class="detail-note">
 <p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> รายละเอียดผู้สมัคร</p>

                                                    <form class="uk-grid-small" uk-grid>
    <!-- <div class="uk-width-1-1">
        <p>ชื่อผู้ใช้</p>
        <input class="uk-input" type="text" placeholder="100">
    </div> -->
    <div class="uk-width-1-3@s">
    <p>ชื่อผู้ใช้</p>
        <input class="uk-input" type="text" placeholder="ชื่อผู้ใช้">
    </div>
    <div class="uk-width-1-3@s">
    <p>รหัสผ่าน</p>
        <input class="uk-input" type="text" placeholder="รหัสผ่าน">
    </div>
    <div class="uk-width-1-3@s">
    <p>ยืนยันรหัสผ่าน</p>
        <input class="uk-input" type="text" placeholder="ยืนยันรหัสผ่าน">
    </div>
    <div class="uk-width-auto@m" id="wd-fm-au">
    <p>คำนำหน้า</p>
        <!-- <input class="uk-input" type="text" placeholder="50"> -->
        <div class="uk-margin">
        <div uk-form-custom="target: > * > span:first-child">
            <select>
                <option value="">นาย</option>
                <option value="1">นาง</option>
                <option value="2">นางสาว</option>
            </select>
            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                <span></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>
    </div>
    <div class="uk-width-1-3@s" id="wd-fm">
    <p>ชื่อ</p>
        <input class="uk-input" type="text" placeholder="ชื่อ">
    </div>
    <div class="uk-width-1-3@s" id="wd-fm">
    <p>นามสกุล</p>
        <input class="uk-input" type="text" placeholder="นามสกุล">
    </div>
    <div class="uk-width-1-3@s">
    <p>วันเกิด(ว/ด/ป)</p>
        <input class="uk-input" type="date" placeholder="50">
    </div>
    <div class="uk-width-1-3@s">
    <p>บัตรประชาชน</p>
        <input class="uk-input" type="text" placeholder="บัตรประชาชน">
    </div>
    <div class="uk-width-1-3@s">
        <!-- <input class="uk-input" type="text" placeholder="50"> -->
    </div>
</form>
                                                    <!-- <p>ราคาพรีออเดอร์ 1970 บาท มัดจำ 500 บาท</p>
                                                    <p>** ไม่รวมส่ง</p>
                                                    <p></p>
                                                    <p></p>
                                                    <p>สินค้าเริ่มจำหน่าย 03/2021</p>
                                                    <p>[ ถ้ามัดจำไว้สินค้ามาแล้ว แอดมินจะอีเมล์ไปหานะคะ ^_^ ]</p>
                                                    <p> ------------------------------------------------------
                                                    </p>
                                                    <p> BULLET KNIGHTS Launcher- Megami Device
                                                    </p>
                                                    <p> Material ：Plastic Model Kit PS･ABS･POM･PVC 1/1-scale articulated figure.
                                                    </p>
                                                    <p> Approximately 345mm in height
                                                    </p>
                                                    <p> Height : 345mm
                                                    </p>
                                                    <p> Scale : 1/1
                                                    </p>
                                                    <p></p>
                                                    <p> Brand : Kotobukiya
                                                    </p>
                                                    <p> ***สินค้าลิขสิทธิ์แท้ล็อตตัวแทนจำหน่าย
                                                    </p>
                                                    <p> รหัสสินค้า: PLMD-03
                                                    </p>
                                                    <p></p>
                                                    <p></p> -->
                                                </div>
                                                <div class="detail-note">
                                                    <p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> ข้อมูลติดต่อ</p>

                                                    <form class="uk-grid-small" uk-grid>

    <div class="uk-width-1-3@s">
    <p>Email</p>
        <input class="uk-input" type="text" placeholder="Email">
    </div>
    <div class="uk-width-1-3@s">
    <p>LINE ID</p>
        <input class="uk-input" type="text" placeholder="LINE ID">
    </div>
    <div class="uk-width-1-3@s">
    <p>ซอย</p>
        <input class="uk-input" type="text" placeholder="ซอย">
    </div>
    <div class="uk-width-1-3@s">
    <p>โทรศัพท์</p>
        <input class="uk-input" type="text" placeholder="โทรศัพท์">
    </div>
    <div class="uk-width-1-3@s">
    
    </div>
    <div class="uk-width-1-3@s">
   
    </div>
   
</form>
              
                                                </div>
                                            </li>
                                            <li>
                                                <div class="detail-note">
<p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> รายละเอียดที่อยู่</p>

<form class="uk-grid-small" uk-grid>
<!-- <div class="uk-width-1-1">
<p>ชื่อผู้ใช้</p>
<input class="uk-input" type="text" placeholder="100">
</div> -->
<div class="uk-width-1-3@s">
<p>ชื่อผู้ใช้</p>
<input class="uk-input" type="text" placeholder="ชื่อผู้ใช้">
</div>
<div class="uk-width-1-3@s">
<p>รหัสผ่าน</p>
<input class="uk-input" type="text" placeholder="รหัสผ่าน">
</div>
<div class="uk-width-1-3@s">
<p>ยืนยันรหัสผ่าน</p>
<input class="uk-input" type="text" placeholder="ยืนยันรหัสผ่าน">
</div>
<div class="uk-width-auto@m" id="wd-fm-au">
<p>คำนำหน้า</p>
<!-- <input class="uk-input" type="text" placeholder="50"> -->
<div class="uk-margin">
<div uk-form-custom="target: > * > span:first-child">
<select>
<option value="">นาย</option>
<option value="1">นาง</option>
<option value="2">นางสาว</option>
</select>
<button class="uk-button uk-button-default" type="button" tabindex="-1">
<span></span>
<span uk-icon="icon: chevron-down"></span>
</button>
</div>
</div>
</div>
<div class="uk-width-1-3@s" id="wd-fm">
<p>ชื่อ</p>
<input class="uk-input" type="text" placeholder="ชื่อ">
</div>
<div class="uk-width-1-3@s" id="wd-fm">
<p>นามสกุล</p>
<input class="uk-input" type="text" placeholder="นามสกุล">
</div>
<div class="uk-width-1-3@s">
<p>วันเกิด(ว/ด/ป)</p>
<input class="uk-input" type="date" placeholder="50">
</div>
<div class="uk-width-1-3@s">
<p>บัตรประชาชน</p>
<input class="uk-input" type="text" placeholder="บัตรประชาชน">
</div>
<div class="uk-width-1-3@s">
<!-- <input class="uk-input" type="text" placeholder="50"> -->
</div>
</form>
<!-- <p>ราคาพรีออเดอร์ 1970 บาท มัดจำ 500 บาท</p>
<p>** ไม่รวมส่ง</p>
<p></p>
<p></p>
<p>สินค้าเริ่มจำหน่าย 03/2021</p>
<p>[ ถ้ามัดจำไว้สินค้ามาแล้ว แอดมินจะอีเมล์ไปหานะคะ ^_^ ]</p>
<p> ------------------------------------------------------
</p>
<p> BULLET KNIGHTS Launcher- Megami Device
</p>
<p> Material ：Plastic Model Kit PS･ABS･POM･PVC 1/1-scale articulated figure.
</p>
<p> Approximately 345mm in height
</p>
<p> Height : 345mm
</p>
<p> Scale : 1/1
</p>
<p></p>
<p> Brand : Kotobukiya
</p>
<p> ***สินค้าลิขสิทธิ์แท้ล็อตตัวแทนจำหน่าย
</p>
<p> รหัสสินค้า: PLMD-03
</p>
<p></p>
<p></p> -->
</div>
<div class="detail-note">
<p class="title-re"><img src="../assets/css/img/icon-bunny.png" style="width:20px;"> ข้อมูลติดต่อ</p>

<form class="uk-grid-small" uk-grid>

<div class="uk-width-1-3@s">
<p>Email</p>
<input class="uk-input" type="text" placeholder="Email">
</div>
<div class="uk-width-1-3@s">
<p>LINE ID</p>
<input class="uk-input" type="text" placeholder="LINE ID">
</div>
<div class="uk-width-1-3@s">
<p>ซอย</p>
<input class="uk-input" type="text" placeholder="ซอย">
</div>
<div class="uk-width-1-3@s">
<p>โทรศัพท์</p>
<input class="uk-input" type="text" placeholder="โทรศัพท์">
</div>
<div class="uk-width-1-3@s">

</div>
<div class="uk-width-1-3@s">

</div>

</form>
                                                    <!-- <p>สินค้าที่ได้รับความเสียหายจากผู้ผลิตจะต้องส่งคืน เพื่อออกผลิตภัณฑ์ทดแทน </p> -->
                                                </div>
                                            </li>
                                        </ul>
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
    <!-- body -->
</body>

</html>