<?php

namespace HudhaifaS\Assets\Extension;

use SilverStripe\ORM\DataExtension;

/**
 *
 * @author Hudhaifa Shatnawi <hudhaifa.shatnawi@gmail.com>
 * @version 1.0, Dec 17, 2016 - 10:29:00 PM
 */
class FilePublishExtension
        extends DataExtension {

    public function onAfterUpload() {
        $this->owner->publishRecursive();
    }

}
