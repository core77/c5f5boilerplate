<?php 
    defined('C5_EXECUTE') or die("Access Denied.");
    $content = $controller->getContent();

    $class = "class = 'button large radius'";
    $search = "<a title=";
    $replace = "<a " . $class . "title=";
    $content = str_replace($search, $replace, $content);

    print $content;
?>
