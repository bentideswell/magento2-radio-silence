<?php
/**
 *
 */
namespace FishPig\RadioSilence\Plugin\MageWorx\Info\Helper;

class DataPlugin extends \FishPig\RadioSilence\Plugin\AbstractPlugin
{
    /**
     *
     */
    public function aroundCheckExtensionListUpdate(
        \MageWorx\Info\Helper\Data $subject,
        \Closure $proceed,
        $forceUpdate = false
    ) {
        if (!$this->getConfig()->isEnabled()) {
            return $proceed($forceUpdate);
        }
    }
}
