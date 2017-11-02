<?php

namespace Stick\Service;

/**
 * Interface GrantInterface
 * @package Stick\Service
 */
interface GrantInterface
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
