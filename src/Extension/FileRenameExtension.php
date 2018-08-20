<?php

namespace HudhaifaS\Assets\Extension;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataExtension;

/**
 *
 * @author Hudhaifa Shatnawi <hudhaifa.shatnawi@gmail.com>
 * @version 1.0, Dec 17, 2016 - 10:29:00 PM
 */
class FileRenameExtension
        extends DataExtension {

    private static $prefix = 'uf-';

    public function onAfterUpload() {
        // Build next name
        $prefix = $this->owner->config()->prefix;
        $directory = ltrim(dirname($this->owner->File->Filename), '.');
        $name = uniqid($prefix) . uniqid();
        $ext = $this->owner->getExtension();
        $filename = "$name.$ext";
        if ($directory) {
            $filename = File::join_paths($directory, "$name.$ext");
        }

        $this->owner->File->renameFile($filename);
        $this->owner->renameFile($filename);
    }

}
