<?php
	preg_match("/(\w+)\.(\w+)$/", explode("?", $_SERVER["REQUEST_URI"])[0], $uri_parse);
	$page_title = $uri_parse[1];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Danal Design System</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="./images/favicon.ico">
        <script type="text/javascript" src="js/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="./css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="./css/slick-theme.css"/>
<?php if (preg_match("/main\.php/",$_SERVER["REQUEST_URI"])) {?>
        <link rel="stylesheet" href="./css/main.css">
<?php } else { ?>
        <link rel="stylesheet" href="./css/datatables.min.css"/>
        <link rel="stylesheet" href="./css/jquery-ui.css"/>
        <link rel="stylesheet" href="./css/sub.css">
        <link rel="stylesheet" href="./css/dn_style.css">
<?php } ?>
<?php if (preg_match("/mobile\.php/",$_SERVER["REQUEST_URI"])) {?>
        <link rel="stylesheet" href="./css/m_dn_style.css">
<?php } ?>
		<script type="text/javascript" src="./js/slick.min.js"></script>
        <script type="text/javascript" src="./js/datatables.min.js"></script>
        <script type="text/javascript" src="./js/jquery-ui.js"></script>
        <script type="text/javascript" src="./js/highcharts.js"></script>
        <script type="text/javascript" src="./js/series-label.js"></script>
        <script type="text/javascript" src="./js/exporting.js"></script>
    </head>
    <body>
        <!-- wrap-->
        <div class="wrap">
            <!-- HEADER-->
            <div id="header" class="header">
                <a href="index.html"  class="logo"><img src="./images/img_logo.png"></a>
                <ul>
                    <li data-title="about"><a href="./about.php">about</a></li>
                    <li data-title="foundation"><a href="./foundation.php">foundation</a></li>
                    <li data-title="web"><a href="./web.php">web</a></li>
                    <li data-title="mobile"><a href="./mobile.php">mobile</a></li>
                    <li data-title="download"><a href="./download.php">download</a></li>
                </ul>
            </div>
            <!-- HEADER-->