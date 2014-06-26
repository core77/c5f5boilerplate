<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
    <?php Loader::packageElement('header_required', 'c5f5boilerplate'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/main.css">
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/fastclick/lib/fastclick.js"></script>
    <?php
        if ($c->isEditMode()) {  ?>
        <link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/typography.css">
        <style type="text/css">#ccm-highlighter, .ccm-menu {margin-top:-49px;}</style>
    <?php } ?>
</head>
<body>

<!-- nav area -->
<!-- off canvas sections wrapping the main content. these are closed in footer.php-->
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

        <?php 
            $a = new GlobalArea('Header Nav');
            $a->display();
        ?>

<!-- end nav area -->
<!-- end header.php -->
