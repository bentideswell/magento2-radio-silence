<?php
/**
 *
 */
namespace FishPig\RadioSilence\Plugin;


abstract class AbstractPlugin
{
    /**
     *
     */
    protected $config = null;

    /**
     *
     */
    public function __construct(
        \FishPig\RadioSilence\Model\Config $config
    ) {
        $this->config = $config;
    }

    protected function getConfig(): \FishPig\RadioSilence\Model\Config
    {
        return $this->config;
    }
}
