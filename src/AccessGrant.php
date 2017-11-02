<?php

namespace Stick\Service;

/**
 * Interface AccessGrant
 * @package Stick\Service
 */
interface AccessGrant
{
    /**
     * @param ServiceInterface $applicant
     */
    public function setApplicant(ServiceInterface $applicant): void;

    /**
     * @param ServiceInterface $supplicant
     */
    public function setSupplicant(ServiceInterface $supplicant): void;

    /**
     * @return ServiceInterface
     */
    public function getSupplicant(): ServiceInterface;

    /**
     * @return ServiceInterface
     */
    public function getApplicant(): ServiceInterface;
}
