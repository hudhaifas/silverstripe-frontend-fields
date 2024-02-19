<?php

namespace HudhaifaS\Forms;

use SilverStripe\Forms\TextareaField;
use SilverStripe\View\Requirements;

/**
 *
 * @author Hudhaifa Shatnawi <hudhaifa.shatnawi@gmail.com>
 * @version 1.0, Jul 6, 2018 - 5:53:22 AM
 */
class FrontendRichTextField
        extends TextareaField {

    private static $casting = [
        'Value' => 'HTMLText',
    ];

    public function Field($properties = []) {
        self::init_scripts();

        return parent::Field($properties);
    }

    public static function init_scripts() {
        // styles for this field
        Requirements::css('hudhaifas/silverstripe-frontend-fields: res/css/vendor/richtext.min.css');

        // init script for this field
        Requirements::javascript('hudhaifas/silverstripe-frontend-fields: res/js/vendor/jquery.richtext.js');
    }

}
