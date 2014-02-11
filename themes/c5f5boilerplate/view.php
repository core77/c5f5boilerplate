<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
  
  <!-- full width content area -->

  <div class="row">
    <div class="small-12 columns">
      
      <?php  print $innerContent; ?>

    </div>
  </div>
  
  <!-- end full width content area -->
  
<?php  $this->inc('elements/footer.php'); ?>
