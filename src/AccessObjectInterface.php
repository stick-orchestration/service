<?php

namespace Stick\Service;

/**
 * Interface AccessObject
 * @package Stick\Service
 */
interface AccessObjectInterface
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
