<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Preordertoys Home </title>
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
.blog-cat {
    display: block;
    background: #edd8c0;
    margin: 80px 0px;
    border-radius: 30px;
}
.section-popular {
    background-color: #dddbc3 !important;
}
.uk-input, .uk-select:not([multiple]):not([size]) {
    background: #c6c5a7 !important;
}
.uk-textarea {
    background: #eae0d6 !important;
}
.section-popular {
    display: block;
    position: relative;
    background-color: #e0daca;
}
.blog-cat .nav-side>li.uk-parent.uk-open>a {
    background: #c28149;
}
.nav-side .uk-nav-sub>li {
    background-color: #d9ae81;
}
::marker {
   color: #fff;
}
.blog-cat .nav-side>li.uk-parent.uk-open {
    background-color: #bdc9ab00;
    list-style: url(../assets/css/img/icon-bunny.png);
    border-radius: 10px;
    padding: 0;
}
.uk-button-default {
    background-color: #dfd8b8;
    color: #0a0a0a;
    border: 1px solid #e5e5e5;
    font-weight: normal;
}
.uk-button {
    border-radius: 0;
    height: 30px;
}
.bottom-claim{
    width: 20%;
    margin-top:  50px;
}
.img-claims-list{
    width: 100px;
    float: left;
}
.uk-table th {
    padding: 16px 12px;
    text-align: center;
    background: #f2ece4;
    border-bottom: 20px solid #e0daca;
    font-size: 18px;
    font-weight: 400;
    color: #8c6239;
    vertical-align: top;
    border-left: 0px solid #fff;
}
.uk-table td {
    padding: 16px 12px;
    vertical-align: inherit;
    text-align: center;
    border-left: 1px solid #9cb585;
}
.uk-table tbody tr {
    background: #d3d8bf;
    border-bottom: 20px solid #e0daca;
}
.uk-width-1-2\@s {
    width: 100%;
}
.table-width{
    width: auto;
}
.table-width2{
    width: 35%;
}
.name-pro{
    text-align: left;
    margin: 0 0 0 120px;
}
.title-cradit{
    color: #807123;
    font-size: 18px;
    font-weight: 600;
}
.title-cradit2{
    color: #ad8149;
    font-size: 22px;
    font-weight: 600;  
    margin: 0;
}
#back-form-claims{
    background: url(../assets/img/home/background-claims-form.png);
    background-repeat: round;
}
#form-claim{
    padding: 80px;
}
.title-num-page{
text-align: right;
margin: 0;
color: #7c7b46;
}
.right-img{
    text-align: right;
}
.h3-home-img {
    max-width: 20%;
}
.back-number{
    text-align: right;
}
.back-num-col{
background-color: #eae0d3;
    width: min-content;
    text-align: right;
    text-align-last: right;
    float: right;
    padding: 2px 0px;
}
.number1{
    color: #fff;
    font-size: 20px;
    margin: 10px 10px;
    background: #b4bc9b;
    padding: 0px 10px;
}
.number2{
    color: #9d9d6c;
    font-size: 20px;
    margin: 10px 10px;
}
#con-top{
    margin-top: -110px;
    position: relative;
    z-index: 9999;
}
.img-country{
    width: 20%;
}
.icon-bunny-installment{
    float: left;
}
.img-icon-bunny{
    width: 14px;
    float: left;
    text-align: center;
}
.cen-icon p{
    text-align: center;
}
.border-left0 p{
    margin: 0px;
}
.uk-table .border-left1 {
    border-left: 0;
}
/* .num-deposit{
    margin: 0;
}
.num-deposit2{
    margin: 0;
    text-align: right;
}
.line-rotate{
    display: block;
    filter: flipv fliph;
    -webkit-transform: rotate(
-45deg);
    -moz-transform: rotate(-45deg);
    transform: rotate(
-35deg);
    position: relative;
    width: 100%;
    white-space: nowrap;
    font-size: 20px;
    margin-bottom: 5px;
    left: 0px;
    text-align: center;
    border-top: 1px solid #9cb585;
} */
.uk-button {
    border-radius: 15px;

}
.uk-margin {
    margin-bottom: 0px;
}
.h3-home-img-top{
    width: 65%;
}
.uk-width-1-3\@s {
    width: 50%;
    float: left;
}
.proce-oil{
    color: #8c6239;
    font-size: 18px;
    margin: 0;
}
.name-price-top{
    color: #8c6239;
    font-size: 18px;
    margin: 0;
}
.num-price{
    color: #998675;
    font-size: 20px;
    margin: 0;
    background-color: #ffead9;
    width: 50%;
    float: right;
    
}
.num-day{
    color: #6c985a;
    font-size: 22px;
    margin: 0;
    font-weight: 600;
}
.day-table p{
    margin: 0px;
}
.title-text-form{
    color: #727144;
    font-size: 24px;
    margin: 0;
    font-weight: 600;
    margin-top: 30px;
}
#text-label{
    color: #999966;
    font-size: 18px;
    margin: 0;
    font-weight: 400;
}
.span-text-label{
    color: #d28758;
    font-size: 16px;
    margin: 0;
    font-weight: 400;
}
.detail-check{
 color: #fff;
 font-size: 18px;
 margin: 0px 20px 0 0;
    font-weight: 600;
    background-color: #4b7f36;
    padding: 10px;
}
.cancel{
    color: #fff;
    font-size: 18px;
    margin: 0;
    font-weight: 600;
    background-color: #c6c5a7;
    padding: 10px;
}
.uk-input, .uk-select:not([multiple]):not([size]) {
    height: 45px;
    background: #c6c5a7;

}
.uk-input:focus, .uk-select:focus, .uk-textarea:focus {
    outline: 0;
    background-color: #c6c5a7;
    color: #666;
    border-color: #1e87f000;
}
.uk-textarea {
    height: 300px;
    padding-top: 15px;
    resize: none;
    background-color: #eae0d6;
    border: 1px solid #ccc;
    border-radius: 0;
}
.uk-input:focus, .uk-select:focus, .uk-textarea:focus {
    outline: 0;
    background-color: #eae0d6;
    color: #666;
    border-color: #1e87f000;
}
.img-upload{
    width: 60%;
    margin-left: 15px;
    margin-bottom: 20px;
}



@media (max-width: 598px){
    .detail-check {
    color: #fff;
    font-size: 15px;
    margin: 0px 7px 0 0;
    padding: 12px;
}

}

</style>

<body class="page-home">
    <div class="page-wrapper">
        <header class="page-header _bgheader">
            <?php include('../view/header.php'); ?>
        </header>

        <main class="page-main">
            <!-- section-banner -->
            <?php include('../view/section-banner.php'); ?>
            <div class="section-popular">
                <div class="uk-container uk-container-expand">
                    <div class="uk-margin-large-bottom uk-grid-collapse" data-uk-grid>
                        <!-- <div class="uk-width-1-5@l uk-visible@l _sidebar">
                            <?php //include('../view/blog-cat.php'); ?>
                            <?php //include('../view/blog-sns.php'); ?>
                            <?php //include('../view/blog-partner.php'); ?>
                      
                        </div> -->
                        <!-- <div class="uk-width-4-5@l list-padding-large">
                            <div class="section-content">
                      
                                <?php //include('../view/auction-auctioning.php'); ?>
                            </div>
                        </div> -->
                        <div class="uk-width-5-5@l">
                        <form class="uk-form-horizontal uk-margin-large">
  <p class="title-text-form">ส่งรายการ</p>
    <div class="uk-margin">
      
        <label class="uk-form-label" for="form-horizontal-text" id="text-label">ชื่อ FACEBOOK *</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text" id="text-label">SUBJECT *</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text" id="text-label">DESCRIPTION * <br><span class="span-text-label">(รบกวนใส่เบอร์โทรให้แอดมินติดต่อกลับด้วยค่ะ)</span></label>
        <div class="uk-form-controls">
        <textarea class="uk-textarea" rows="5" placeholder=""></textarea>
        </div>
    </div>
    <div class="uk-margin">
    <label class="uk-form-label" for="form-horizontal-text"></label>
        <div uk-form-custom >
            <input type="file">
            <span class="uk-link"><img class="img-upload" src="../assets/img/home/butt-upload-img.png" alt=""></span>
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text"></label>
        <div class="uk-form-controls">
            <p><a href="#1" class="detail-check">ส่งรายละเอียดที่ต้องการให้ตรวจสอบ</a> <a href="#" class="cancel">ยกเลิก</a></p>
        </div>
    </div>

  

 

</form>
</div>

                    </div>
                </div>
                <!-- section-animation -->
                <?php /*include('../view/motionads.php'); */?>
            </div>
            <!-- //section-animation -->

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