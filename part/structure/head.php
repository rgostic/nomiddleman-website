<?php
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <link rel="shortcut icon" href="<?php echo OM_DIR . '/img/favicon.png'; ?>" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-140769594-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-140769594-1');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://s3.amazonaws.com">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <?php
//        if($noindex) echo '<meta name="robots" content="noindex, nofollow">';
//        $af_templates->af_favicons();
//        $af_templates->af_scripts_head();

    wp_head();

    ?>
</head>
<body <?php body_class(); ?> >