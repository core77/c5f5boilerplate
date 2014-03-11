<?php  defined('C5_EXECUTE') or die("Access Denied.");

$navItems = $controller->getNavItems();

echo '<ul class="no-bullet">'; //opens the top-level menu

foreach ($navItems as $ni) {

    echo '<li>'; //opens a nav item

    echo '<a href="' . $ni->url . '" target="' . $ni->target . '" class="' . $ni->classes . '">' . $ni->name . '</a>';

    if ($ni->hasSubmenu) {
        echo '<ul>'; //opens a dropdown sub-menu
    } else {
        echo '</li>'; //closes a nav item
        echo str_repeat('</ul></li>', $ni->subDepth); //closes dropdown sub-menu(s) and their top-level nav item(s)
    }
}

echo '</ul>'; //closes the top-level menu
