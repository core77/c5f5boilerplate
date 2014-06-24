<?php  defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems();
?>

<!-- OFF CANVAS SECTIONS WRAPPING THE MAIN CONTENT are set in the elements/header.php and elements/footer.php-->
    <!-- off canvas menu bar -->
    <nav class="tab-bar">

        <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
        </section>

        <section class="middle tab-bar-section">
            <h1 class="title"><?php echo SITE; ?></h1>
        </section>

    </nav> <!-- end nav.tab-bar -->

    <!-- off canvas menu -->
    <aside class="left-off-canvas-menu">
        <ul class="off-canvas-list">
            <?php 
                foreach ($navItems as $ni) {
                    if ($ni->hasSubmenu) {
                        echo '<li><label>';
                        echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
                        echo '</label></li>';
                    } else {
                        echo '<li>'; //opens a nav item
                        echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
                        echo '</li>'; //closes a nav item
                    }
                }
            ?>
        </ul>
    </aside>
