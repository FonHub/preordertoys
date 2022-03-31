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
    background-color: #f6f3e5;
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
    background: #f1ebe3;
    border-bottom: 20px solid #bdc9ab;
    font-size: 20px;
    font-weight: 400;
    color: #8c6239
}
.uk-table td {
    padding: 16px 12px;
    vertical-align: inherit;
    text-align: center;
    border-left: 1px solid #bdc9ab;
}
.uk-table tbody tr {
    background: #e9ceab;
    border-bottom: 20px solid #bdc9ab;
}
.uk-width-1-2\@s {
    width: 100%;
}
.table-width{
    width: 15%;
}
.table-width2{
    width: 25%;
}
.name-pro{
    text-align: left;
    margin: 0 0 0 120px;
}
.title-cradit{
    color: #c28149;
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
                                <?php include('../view/auction-claims.php'); ?>
                                <?php include('../view/auction-claims-list.php'); ?>
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