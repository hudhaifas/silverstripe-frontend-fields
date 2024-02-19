<?php

namespace HudhaifaS\Forms;

use SilverStripe\Forms\FileField;
use SilverStripe\View\Requirements;

/**
 * Description of FrontendUploadField
 *
 * @author hudha
 */
class FrontendFileField
        extends FileField {

    public $fileUrl;

    /**
     * @param array $properties
     * @return string
     */
    public function Field($properties = []) {
        self::init_scripts();

        $properties = array_merge($properties, [
            'FileURL' => $this->fileUrl
        ]);

        return parent::Field($properties);
    }

    public function setValue($value, $data = null) {
        if ($value && !is_array($value)) {
            $this->fileUrl = $value->Link();
        }
        parent::setValue($value, $data);
    }

    public static function init_scripts() {
        // styles for this field
        Requirements::css('hudhaifas/silverstripe-frontend-fields: res/css/vendor/fileinput.css');
        Requirements::css('hudhaifas/silverstripe-frontend-fields: res/css/imagefield.css');

        // init script for this field
        Requirements::javascript('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/vendor/fileinput.js');
//        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/vendor/locales/ar.js');

        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/filefield.js');
    }

}
