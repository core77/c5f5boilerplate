<?php  defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems();
?>

<!-- foundation 5 top-bar -->
<?php 
    $u = new User();
    if (!$u->isLoggedIn()) { 
        echo "<div class='contain-to-grid fixed'>"; 
    } 
?>

<nav class="top-bar" data-topbar>
    <ul class="title-area">
        <li class="name">
            <h1><a href="<?php echo DIR_REL; ?>/"><?php echo SITE; ?></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">

            <?php  foreach ($navItems as $ni) {
            	
            	$classes = array();
            	if ($ni->isCurrent) {
            		$classes[] = 'active';
            	}
            	if ($ni->inPath) {
            		$classes[] = 'nav-path-selected';
            	}
            	if ($ni->isFirst) {
            		$classes[] = 'first';
            	}
            	$classes = implode(" ", $classes);
            	?>
            	
            	<li class="<?php echo $classes?>">
            		<a class="<?php echo $classes?>" href="<?php echo $ni->url?>" target="<?php echo $ni->target?>"><?php echo $ni->name?></a>
            	</li>
                <li class="divider"></li>

            <?php  } ?>

        </ul>
    </section>
</nav>

<?php 
    if (!$u->isLoggedIn()) { 
        echo "</div>"; 
    } 
?>
<!-- foundation 5 top-bar end-->
