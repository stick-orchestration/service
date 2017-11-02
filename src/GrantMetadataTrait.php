<?php

namespace Stick\Service;

trait GrantMetadataTrait
{
    /**
     * @param ServiceInterface $applicant
     */
    public function setApplicant(ServiceInterface $applicant): void
    {
        $this->metadata['applicant'] = $applicant;
    }

    /**
     * @param ServiceInterface $supplicant
     */
    public function setSupplicant(ServiceInterface $supplicant): void
    {
        $this->metadata['supplicant'] = $supplicant;
    }

    /**
     * @return ServiceInterface
     */
    public function getSupplicant(): ServiceInterface
    {
        return $this->metadata['supplicant'];
    }

    /**
     * @return ServiceInterface
     */
    public function getApplicant(): ServiceInterface
    {
        return $this->metadata['applicant'];
    }
}
