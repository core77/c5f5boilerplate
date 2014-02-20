    <?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
    
    <hr>

    <div class="row">
        <div class="small-12 columns">
                <div id="footer">
                    <div id="footer-inner">
                        <p class="footer-sign-in">
                            <?php  
                            $u = new User();
                            if ($u->isRegistered()) { ?>
                                <?php   
                                if (Config::get("ENABLE_USER_PROFILES")) {
                                    $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
                                } else {
                                    $userName = $u->getUserName();
                                }
                                ?>
                                <span class="sign-in"><?php  echo t('Currently logged in as <b>%s</b>.', $userName)?> <a href="<?php  echo $this->url('/login', 'logout')?>"><?php  echo t('Sign Out')?></a></span>
                                <?php   } else { ?>
                                <span class="sign-in"><a href="<?php  echo $this->url('/login')?>"><?php  echo t('Sign In to Edit this Site')?></a></span>
                                <?php   } ?>
                        </p>
                        <p class="footer-copyright">&copy;<?php  echo date('Y')?> <?php  echo SITE?>.</p>
                        <p class="footer-tag-line"><?php echo t('Built with <a href="http://www.concrete5.org/" alt="Free Content Management System" target="_blank">concrete5 - an open source CMS</a>')?></p>
                    </div>
            </div>
        </div>
    </div>
    
    <?php  
        $u = new User();
        if (!$u->isLoggedIn()) {  ?>
            <script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/bower_components/jquery/jquery.min.js"></script>
    <?php  } ?>
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/bower_components/foundation/js/vendor/fastclick.js"></script>
    <script src="<?php echo $this->getThemePath(); ?>/js/app.js"></script>

    <?php  Loader::element('footer_required'); ?>

</body>
</html>
