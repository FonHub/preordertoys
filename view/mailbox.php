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
    display: block;
    position: relative;
    background-color: #d8e0cc;
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
    /* background-color: #dfd8b8;
    color: #0a0a0a;
    border: 1px solid #e5e5e5;
    font-weight: normal; */
    background-color: #eae0d6 !important;
    color: #0a0a0a !important;
    border: 1px solid #d8e0cc !important;
    font-weight: normal !important;
    width: 100%;
}
.uk-button {
    border-radius: 0 !important;
    height: 50px !important;
}
.uk-button-default {
    background-color: #dfd8b800 !important;
    color: #0a0a0a !important;
    border: 2px solid #c6c5a7 !important;
    font-weight: normal !important;
    text-align: right !important;
    justify-content: right !important;
}
#bot-date {
    border-radius: 0;
    height: 30px !important;
    border-radius: 15px !important;
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
    border-bottom: 20px solid #d8e0cc;
    font-size: 18px;
    font-weight: 400;
    color: #8c6239;
    vertical-align: top;
    border-left: 0px solid #fff;
}
.uk-table td {
    padding: 5px 12px !important;
    vertical-align: inherit !important;
    /* text-align: center; */
    border-left: 0px solid #c6c5a7;
}
.uk-table tbody tr {
    background: #c6c5a7;
    border-bottom: 20px solid #d8e0cc;
    border-top: 3px solid #c6c5a7;
    border-bottom: 3px solid #c6c5a7;
    margin-top: 15px;
    /* display: block; */
    /* display: inherit; */
}
.uk-width-1-2\@s {
    width: 100%;
}
.table-width{
    width: 15%;
}
.table-width2{
    width: 45%;
}
.name-pro{
    text-align: left;
    margin: 0 0 0 120px;
}
.title-cradit{
    color: #94703b;
    font-size: 22px;
    font-weight: 600;
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
background-color: #b4bc9b;
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
    background: #eae0d6;
    padding: 0px 10px;
}
.number2{
    color: #9d9d6c;
    font-size: 20px;
    margin: 10px 10px;
}
#con-top{
    margin-top: 0px;
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
.num-deposit{
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
}
#title-mailbox{
    width: 100%;
    text-align: left;
    font-size: 40px;
    color: #727144;
}
.de-mail{
font-size: 16px;
font-weight: 600;
color: #727144;
}
.title-mail{
    font-size: 16px;
    color: #999966;
}
.uk-table .title-admin{
    font-size: 16px;
    text-align: left;
}
.select-back{
    background-color: #eae0d6;
    border-right: 10px solid #c6c5a7;
}
.uk-button:not(:disabled) {
    cursor: pointer;
    width: 180px;
}
/* .uk-container {
    max-width: 1140px !important;
} */
.section-popular {
    background-color: #dddbc3 !important;
}


@media (max-width: 598px){
    .uk-table td {
    min-width: 150px;
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
                        <div class="uk-width-1-5@l uk-visible@l _sidebar">
                            
                        </div>
                        <div class="uk-width-5-5@l list-padding-large">
                            <div class="section-content">
                                
                                <?php include('../view/auction-mailbox.php'); ?>
                            </div>
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