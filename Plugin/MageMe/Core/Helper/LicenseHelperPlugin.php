<?php
/**
 *
 */
namespace FishPig\RadioSilence\Plugin\MageMe\Core\Helper;

use MageMe\Core\Helper\LicenseHelper;

class LicenseHelperPlugin extends \FishPig\RadioSilence\Plugin\AbstractPlugin
{
    /**
     *
     */
    public function aroundVerifyLicense(
        LicenseHelper $subject,
        \Closure $proceed
    ) {
        if (!$this->getConfig()->isEnabled()) {
            $proceed();
        }
    }
}
