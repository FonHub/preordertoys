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
    background-color: #e5e5ca;
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
    background-color: #efdfce !important;
    color: #0a0a0a !important;
    border: 1px solid #efdfce !important;
    font-weight: normal !important;
}
.uk-button {
    border-radius: 0;
    height: 30px !important;
}
.bottom-claim{
    width: 20%;
    margin-top:  50px;
}
.img-claims-list{
    width: 100px;
    float: none;
}
.uk-table th {
    padding: 16px 12px;
    text-align: center;
    background: #d3d8bf !important;
    border-bottom: 20px solid #f7f0df;
    font-size: 18px;
    font-weight: 400;
    color: #8c6239 !important;
    vertical-align: top !important;
    border-left: 0px solid #fff;
}
.uk-table td {
    padding: 16px 12px;
    vertical-align: inherit !important;
    text-align: center;
    border-left: 1px solid #9cb585;
}
.uk-table tbody tr {
    background: #e9ceab;
    border-bottom: 20px solid #f7f0df;
}
.uk-width-1-2\@s {
    width: 100%;
}
.table-width{
    width: auto;
}
.table-width2{
    width: 20%;
}
.name-pro{
    text-align: left;
    margin: 0 0 0 120px;
}
.title-cradit{
    color: #bf7b41;
    font-size: 18px;
    font-weight: 600;
}
.title-cradit2{
    color: #807123;
    font-size: 18px;
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
.uk-form-custom {
    margin-bottom: 20px;
    margin-top: 80px;
}
.text-add{
    color: #7d871e;
    font-size: 17px;
}
.blog-cat {
    background: #edd8c0 !important;
}
.section-popular {
    background-color: #f7f0df !important;
}


@media (max-width: 598px){
    .uk-form-custom {
    margin-bottom: 20px;
    margin-top: 110px;
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
                            <?php include('../view/blog-cat.php'); ?>
                            <?php include('../view/blog-sns.php'); ?>
                            <?php include('../view/blog-partner.php'); ?>
                        </div>
                        <div class="uk-width-4-5@l list-padding-large">
                            <div class="section-content">
                                
                                <?php include('../view/auction-payment-for-shipping.php'); ?>
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