<ul class="clearing-thumbs" data-clearing>  
  
  <?php 
  defined('C5_EXECUTE') or die('Access Denied.');
  
  foreach($images as $imgInfo) {
    $f = File::getByID($imgInfo['fID']);
    $fp = new Permissions($f);
    if ($fp->canRead()) {
  
      $fileName = $f->getFileName();
      $picturePath 	= $f->getRelativePath();
      $thumbnail = $f->getThumbnail(2, false);
      
      echo "<li>";
      echo "<a class=\"th\" href=\"{$picturePath}\">";
      echo "<img src=\"{$thumbnail}\"/>";
      echo "</a>";
      echo "</li>\n";
    }
  }
  ?>

</ul>
