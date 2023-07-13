<?php
/**
 *
 */
namespace FishPig\RadioSilence\Plugin;

class CheckUpdatePlugin extends \FishPig\RadioSilence\Plugin\AbstractPlugin
{
    /**
     *
     */
    public function aroundCheckUpdate($subject, \Closure $proceed)
    {
        if (!$this->getConfig()->isEnabled()) {
            $proceed();
        }
    }
}
