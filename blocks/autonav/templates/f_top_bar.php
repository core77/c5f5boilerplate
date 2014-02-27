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

<nav class="top-bar" data-topbar data-options="mobile_show_parent_link: true;">
    <ul class="title-area">
        <li class="name">
            <h1><a href="<?php echo DIR_REL; ?>/"><?php echo SITE; ?></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
        <!-- Right Nav Section -->

        <ul class="right">
            <?php foreach ($navItems as $ni) {
                $classes = array();

                if ($ni->isCurrent) {
                    $classes[] = 'active';
                }
                if ($ni->hasSubmenu) {
                    $classes[] = 'has-dropdown';
                }

                $classes = implode(" ", $classes);

                if ($ni->hasSubmenu) {
                    echo '<li class="' . $classes . '">'; //opens a nav item
                    echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
                    echo '<ul class="dropdown">'; //opens a dropdown sub-menu
                } else {
                    echo '<li class="' . $classes . '">'; //opens a nav item
                    echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
                    echo '</li><li class="divider"></li>'; //closes a nav item
                    echo str_repeat('</ul></li><li class="divider"></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
               }
            }
            ?>
        </ul>

    </section>
</nav>

<?php
if (!$u->isLoggedIn()) {
    echo "</div>";
}
?>
<!-- foundation 5 top-bar end-->
