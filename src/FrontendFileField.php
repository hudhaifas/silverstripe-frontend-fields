<?php

namespace HudhaifaS\Fields;

use SilverStripe\Forms\FileField;

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
        $properties = array_merge($properties, [
            'FileURL' => $this->fileUrl
        ]);

        return parent::Field($properties);
    }

    public function setValue($value, $data = null) {
        if ($value && !is_[$value]) {
            $this->fileUrl = $value->Link();
        }
        parent::setValue($value, $data);
    }

}
