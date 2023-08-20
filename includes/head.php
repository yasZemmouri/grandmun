<?php
    include "../includes/config.php";
?>
<head>
    <!-- Should I put the title in config?  -->
    <title>Grandmun - <?php echo $title; ?></title>
    <!--===== Meta =====-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Experience the diplomatic work of UN delegates and improve your communication skills at GRANDMUN - the first official Model United Nations conference hosted by Lycée Notre-Dame du Grandchamp. This student-led, non-profit conference takes place annually in Versailles, offering a memorable day of debating and a chance to broaden your horizons.">
    <!--===== Favicons =====-->
    <link rel="icon" type="image/x-icon" href= <?php echo $faviconUrl ?>>
    <link rel="apple-touch-icon" sizes="120x120" href= <?php echo $appleTouchIconUrl ?>>
    <!--===== Fonts =====-->
    <!-- bootstrap icons -->
    <link rel="stylesheet" href= <?php echo $bootstrapIconsUrl ?>>
    <!--===== Style =====-->
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href= <?php echo $bootstrapCSS ?> >
    <!-- Main CSS File -->
    <link rel="stylesheet" href=<?php echo $mainCSS ?> >
    <!-- countdown2 dependencies -->
    <script src= <?php echo $jqueryUrl ?>></script>
    <script src= <?php echo $tweenMaxUrl ?> ></script>
    <script src= <?php echo $timelineMaxUrl ?> ></script>
</head>