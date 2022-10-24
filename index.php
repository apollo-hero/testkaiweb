<!DOCTYPE html>
<html lang="en" data-theme='night'>

<!-- <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php include "php/config.php";
    include "./php/functions.php"; ?>
    <link href="<?php echo $site['assets']['fnt-aw-cdn']; ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo $site['assets']['css']; ?>/style.css" rel="stylesheet" />
    <link href="<?php echo $site['assets']['css']; ?>/custom.css" rel="stylesheet" />
    <link href="<?php echo $site['assets']['css']; ?>/toast.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="icon" type="<?php echo $site['favicon']['type']; ?>" href="<?php echo $site['favicon']['path']; ?>">
    <script src="<?php echo $site['assets']['jquery-cdn']; ?>"></script>
    <script src="<?php echo $site['assets']['jquery-msk']; ?>"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/toast.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Apolys Season 17, MMORPG, Season 17, Kundun Memphis, Lemuria Mage">
    <meta name="description" content="Fight to be the top1! All in your hands!">
    <meta name="google-site-verification" content="DJv89q-eHOQvXAcRQNV9iEfxo-5y_0pyIgQYijgg_SA">
    <meta name="yandex-verification" content="8f2d70814ae84d53">
    <meta property="og:title" content="testkaiweb">
    <meta property="og:image" content="<?php echo $site['favicon']['path']; ?>">
    <meta property="og:url" content="https://apolys.org/">
    <meta property="og:description" content="Fight to be the top1! All in your hands!">
    <meta property="og:type" content="website">
    <title>testkaiweb</title>
    <link rel="icon" type="<?php echo $site['favicon']['type']; ?>" href="<?php echo $site['favicon']['path']; ?>">
    <link href="<?php echo $site['assets']['css']; ?>/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site['assets']['css']; ?>/swiper.min.css" rel="stylesheet">
    <link href="<?php echo $site['assets']['css']; ?>/godsmu.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $site['assets']['css']; ?>/font.css" rel="stylesheet">
    <link href="<?php echo $site['assets']['css']; ?>/dmncms.css" rel="stylesheet">
    <link href="<?php echo $site['assets']['css']; ?>/toast.css" rel="stylesheet" />
    <link href="<?php echo $site['assets']['css']; ?>/notice.css" rel="stylesheet" />
    <link href="https://godsmu.org/assets/default_assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="<?php echo $site['assets']['javascript']; ?>/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/jquery-ui.min.js"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/toast.js"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/notice.js"></script>
</head>

<body class="text-white" id="body" style="font-family: Albertus-Medium-Regular;">
    <?php

    $link_url = $con->select('control', '*')[0];

    if (isset($_SESSION['USER_RANGE'])) $RANGE = $_SESSION['USER_RANGE'];
    else $RANGE = 0;
    // include "includes/navbar.php";
    include "includes/topbar.php";
    if ($site['status'] == 'WORKING' || $RANGE >= ROLE_OWNER) {
        $TO = '';
        if (!isset($_GET['to']))
            $TO = 'home';
        else
            $TO = $_GET['to'];


        define('FOLD', './pages');

        ?>
                <title><?php echo $site['name']; ?></title>
                <div class="wrapper">
                    <?Php //include "includes/error.php"; ?>
                    <?Php include "includes/header.php"; ?>
                    <?php 
                        if ($TO == 'ranking')
                            include "pages/ranking.php";
                        elseif ($TO == 'rules') include FOLD . "/rules.php";
                        elseif ($TO == 'guides') {
                            if(!isset($_GET['index'])){
                                include FOLD . "/guides.php";
                            } else {
                                include FOLD . "/guides/guide-" . $_GET['index'] . ".php";
                            }
                        }
                        elseif ($TO !== "" && ($TO === 'news')) {
                            $INDEX = $_GET['page'];
                            if ($INDEX < 1) {
                                include FOLD . "/news/news-all.php";
                            } else {
                                //include FOLD . "/news/news-$INDEX.php";
                                //$INDEX = $_GET['page'];
                                if (file_exists(FOLD . "/news/news-$INDEX.php")) {
                                    include FOLD . "/news/news-$INDEX.php";
                                } else
                                    include FOLD . "/news/news-all.php";
                            }
                        }
                        elseif ($TO == 'downloads') include FOLD . "/download.php";
                        elseif ($TO == "home") include FOLD . "/init.php";
                    ?>
                <!-- <div class="w-full" style='margin-top:-60px'>
                    <?php //include "includes/footer.php"; ?>
                </div> -->
            
                <?php
                if (isset($_SESSION['USER_RANGE']) && $_SESSION['USER_RANGE'] >= ROLE_OWNER) {
                    $temp = $con->query('SET search_path TO web;')->fetchAll();
                    $SQL_REQ_CHECK = $con->select("PaymentReqWeb", "*", ["Status" => 0]); //("SELECT COUNT(*) FROM paymentreqweb WHERE Status = 0");
                    $NOTIFY_PAY = count($SQL_REQ_CHECK);
                    if ($NOTIFY_PAY > 0)
                        $NTFY = '(' . $NOTIFY_PAY . ') ';
                    else
                        $NTFY = '';
                } else
                    $NTFY = '';

                if (!isset($_GET['to'])) $TO = 'home';
                else $TO = $_GET['to']; ?>
                <?php if(isset($_SESSION['USER_ID']) && $_SESSION['USER_ID']){ ?>
                    <div class="drawer-mobile  drawer ">
                        <!-- <input id='sidebar-drawer' type='checkbox' class='drawer-toggle ' /> -->
                        <div class='flex flex-col w-full drawer-content py-0'>
                            <?php //include "includes/dashboardNav.php" ?>
                            <?php

                            // if ($TO == 'home')
                            //     include FOLD . "/init.php";
                            if ($TO == 'account') 
                                    include FOLD . "/account.php";
                            elseif ($TO == 'settings') include FOLD . "/settings.php";
                            elseif ($TO == 'setting') include FOLD . "/setting.php";
                            elseif ($TO == 'donate') include FOLD . "/buy_coin.php";
                            elseif ($TO == 'log') include FOLD . "/log.php";
                            elseif ($TO == 'payreq') include FOLD . "/payreq.php";
                            elseif ($TO == 'store') include FOLD . "/store.php";
                            elseif ($TO == 'coins') include FOLD . "/coins.php";
                            elseif ($TO == 'cart') include FOLD . "/cart.php";
                            elseif ($TO == 'admin') include FOLD . "/admin.php";

                            elseif ($TO == 'support') include FOLD . "/support.php";
                            elseif ($TO == 'family') include FOLD . "/family.php";
                            elseif ($TO == 'roulette') include FOLD . "/home.php";
                            ?>
                        </div>
                        <div class="drawer-side flex md:w-64" onclick="$('#sidebar-drawer').click()">
                            <label for='sidebar-drawer' class='drawer-overlay'>
                            </label>
                            <div>
                                <?php //var_dump($TO);die 
                                ?>
                                <?php //include "includes/sidebar.php" ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php include 'includes/footer_new.php'; ?>
                </div>
        
        <?php 
    } elseif ($site['status'] == 'MAINTENANCE') { ?>
        <div class="row text-center text-light m-0 pt-5">
            <div class="col-md-12 mb-5 text-warning display-3">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div class="col-md-12 h1">
                WEBSITE CURRENTLY
            </div>
            <div class="col-md-12 h2 mb-4">
                <strong>UNDER MAINTENANCE</strong>
            </div>
            <div class="ml-auto mr-auto bg-warning rounded-2 p-2 text-dark">
                <b>COME BACK SOON</b>
            </div>
        </div>
        <div class="w-full bottom-0 absolute">
            <?php include "includes/footer_new.php"; ?>
        </div>
    <?php } ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/scripts.js?r=14"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
    <script src="assets/demo/modalx.js"></script>
    <script src="<?php echo $site['assets']['javascript']; ?>/forms.js?r=9"> </script>
    <script src="<?php echo $site['assets']['javascript']; ?>/validator.js?r=30"> </script>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <script type="text/javascript">
        function loading() {
            $('#load').removeClass('d-none');
        }
    </script>
    <script>
        $(document).ready(function() {
            var refreshId = setInterval(function() {
                $('#user-balance').load('includes/user_balance.php');
            }, 1000);
            var refreshId = setInterval(function() {
                $('#cart-amount').load('includes/cart_amount.php');
            }, 1000);
        });
    </script>
</body>

</html>