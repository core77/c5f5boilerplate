<ul class="orbit-slider" data-orbit data-options="circular: true;
                                                  pause_on_hover:false;">
  
<?php 
defined('C5_EXECUTE') or die('Access Denied.');

    foreach($images as $imgInfo) {
        $f = File::getByID($imgInfo['fID']);
        $fp = new Permissions($f);
        if ($fp->canRead()) {

            $fileName = $f->getFileName();
            $picturePath = $f->getRelativePath();
            $fileDescription = $f->getDescription();
            $orbitLinkUrl = $f->getAttribute('orbit_link_url');

            echo "<li>";
            echo "<a href=\"{$orbitLinkUrl}\">";
            echo    "<img src=\"{$picturePath}\"/>";
            echo    "<div class=\"orbit-caption hide-for-small-only\">$fileDescription</div>";        
            echo "</a>";
            echo "</li>\n";
        }
}
?>

</ul>
