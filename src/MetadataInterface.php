<?php

namespace Stick\Service;

/**
 * Interface MetadataInterface
 * @package Stick\Service
 */
interface MetadataInterface
{
    /**
     * @return ServiceInterface
     */
    public function getApplicant(): ServiceInterface;

    /**
     * @return ServiceInterface
     */
    public function getSupplicant(): ServiceInterface;
}
