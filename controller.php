<?php

defined('C5_EXECUTE') or die(_("Access Denied."));

class C5f5BoilerplatePackage extends Package {  //name like your package folder
    protected $pkgHandle = 'c5f5boilerplate';   //name like your package folder
    protected $appVersionRequired = '5.6.2.1';
    protected $pkgVersion = '0.1';

    public function getPackageDescription() {
        return t("c5f5boilerplate package");
    }

    public function getPackageName() {
        return t("c5f5boilerplate");
    }
                   
    public function install() {
        
        //for better readability we split the install block in some functions
        $pkg = parent::install();
        $this->installThemes($pkg);
        $this->installFileAttributes($pkg);
    }

    private function installThemes($pkg) {
        PageTheme::add('c5f5boilerplate', $pkg); //name like theme folder name
    }

    private function installFileAttributes($pkg) {

        $fakc = AttributeKeyCategory::getByHandle('file');
        
        // Multiple means an attribute can be in more than one set, but you 
        // can't choose what set they show up in for the gui
        // $fakc->setAllowAttributeSets(AttributeKeyCategory::ASET_ALLOW_MULTIPLE);
        // $fakc->setAllowAttributeSets(AttributeKeyCategory::ASET_ALLOW_NONE);
        $fakc->setAllowAttributeSets(AttributeKeyCategory::ASET_ALLOW_SINGLE);
        $bfa = $fakc->addSet('c5f5boilerplate_file_attributes', 
                             t('c5f5Boilerplate File Attributes'), $pkg);
        
        //add boolean attributes
        $bp_boolean = FileAttributeKey::getByHandle('bp_boolean');
           if (!$bp_boolean instanceof FileAttributeKey) {
                   $bp_boolean = FileAttributeKey::add('boolean', array(
                                     'akHandle' => 'clearing_featured_img',
                                     'akName' => t('Clearing Featured Image'),
                                     'akIsSearchable' => true,
                                     'akIsSearchableIndexed' => true), $pkg)->setAttributeSet($bfa);
           }

        //add text attributes
        $bp_text = FileAttributeKey::getByHandle('bp_text');
           if (!$bp_text instanceof FileAttributeKey) {
                   $bp_text = FileAttributeKey::add('text', array(
                                     'akHandle' => 'orbit_link_url',
                                     'akName' => t('Orbit Link URL'),
                                     'akIsSearchable' => true,
                                     'akIsSearchableIndexed' => true), $pkg)->setAttributeSet($bfa);
           }
    }
}
