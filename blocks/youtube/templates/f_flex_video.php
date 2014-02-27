<?php 
defined('C5_EXECUTE') or die("Access Denied.");

$url       = parse_url($videoURL);
$pathParts = explode('/', rtrim($url['path'], '/'));
$videoID   = end($pathParts);

if (isset($url['query'])) {
    parse_str($url['query'], $query);
    $videoID = (isset($query['v'])) ? $query['v'] : $videoID;
}

$vWidth  = ($vWidth)  ? $vWidth  : 425;
$vHeight = ($vHeight) ? $vHeight : 344;

if (Page::getCurrentPage()->isEditMode()) { ?>

    <div class="ccm-edit-mode-disabled-item" style="width: <?php echo  $vWidth; ?>px; height: <?php echo  $vHeight; ?>px;">
        <div style="padding:8px 0px; padding-top: <?php echo  round($vHeight/2)-10; ?>px;"><?php echo  t('YouTube Video disabled in edit mode.'); ?></div>
    </div>
    
<?php  } else { ?>

    <div id="youtube<?php echo  $bID; ?>" class="flex-video">
        <iframe class="youtube-player" src="http://www.youtube.com/embed/<?php echo  $videoID . '?rel=0'; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    
<?php  } ?>
