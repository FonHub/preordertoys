<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Preordertoys - ประมูลในไทย </title>
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
            <!------------------------------
            start banner
            ------------------------------->
            <?php include('../view/section-banner.php'); ?>

            <!------------------------------
            End banner
            ------------------------------->
            <!------------------------------
            start Aucionproducts
            ------------------------------->
            <div class="section-aucion">
                <div class="uk-container uk-container-expand">
                    <div class="uk-margin-large-bottom uk-grid-collapse" data-uk-grid>
                        <div class="uk-width-1-5@l uk-visible@l _sidebar">
                            <?php include('../view/blog-cat.php'); ?>
                            <?php include('../view/blog-sns.php'); ?>
                            <?php include('../view/blog-partner.php'); ?>
                        </div>
                        <div class="uk-width-4-5@l list-padding-large">
                            <div class="section-main">
                                <?php include('../view/auction-list.php'); ?>
                            </div>
                            <div class="section-content">
                                <?php include('../view/auction-listall.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------
            start AdsMotion
            ------------------------------->
            <?php include('../view/motionads.php'); ?>
            <!------------------------------
            End AdsMotion
            ------------------------------->


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
    <script src="../assets/js/motion.js"></script>
    <!-- body -->
</body>

</html>