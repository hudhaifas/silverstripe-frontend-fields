<?php

namespace HudhaifaS\Fields;

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

    protected function getAcceptFileTypes() {
        $this->getValidator()->setAllowedExtensions($this->allowedExtensions);

        parent::getAcceptFileTypes();
    }

}
