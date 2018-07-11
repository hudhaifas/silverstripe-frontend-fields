<?php

namespace HudhaifaS\Forms;

/**
 *
 * @author Hudhaifa Shatnawi <hudhaifa.shatnawi@gmail.com>
 * @version 1.0, Jul 11, 2018 - 2:51:01 PM
 */
class FrontendAudioField
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
    public $allowedExtensions = ["mp3", "ogg", "wav"];
    public $allowedTypes = ["audio/mpeg", "audio/ogg", "audio/wav"];

    protected function getAcceptFileTypes() {
        $this->getValidator()->setAllowedExtensions($this->allowedExtensions);

        parent::getAcceptFileTypes();
    }

}
