<?php

namespace HudhaifaS\Fields;

use SilverStripe\View\Requirements;

/**
 *
 * @author Hudhaifa Shatnawi <hudhaifa.shatnawi@gmail.com>
 * @version 1.0, Apr 20, 2018 - 5:38:24 PM
 */
class FrontendImageField
        extends FrontendFileField {

    /**
     * @var array Collection of extensions.
     * Extension-names are treated case-insensitive.
     *
     * Example:
     * <code>
     *    ["jpg","GIF"]
     * </code>
     */
    public $allowedExtensions = ["jpg", "GIF", "png"];

    public function Field($properties = []) {
        self::init_scripts();

        return parent::Field($properties);
    }

    protected function getAcceptFileTypes() {
        $this->getValidator()->setAllowedExtensions($this->allowedExtensions);

        parent::getAcceptFileTypes();
    }

    public static function init_scripts() {
        // styles for this field
        Requirements::css('hudhaifas/silverstripe-frontend-fields: res/css/vendor/fileinput.css');
        Requirements::css('hudhaifas/silverstripe-frontend-fields: res/css/imagefield.css');

        // init script for this field
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/vendor/fileinput.js');

        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/imagefield.js');
    }

}
