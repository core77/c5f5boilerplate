<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
    <? Loader::element('header_required'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $this->getStyleSheet('main.css'); ?>">
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/modernizr/modernizr.js"></script>
    <?php
        if ($c->isEditMode()) {  ?>
        <style type="text/css">#ccm-highlighter {margin-top:-49px;}</style>
    <?php } ?>
</head>
<body>
    
    <?php 
        $a = new GlobalArea('Header Nav');
        $a->display();
    ?>
