<?php

namespace Stick\Service;

/**
 * Class ObjectMetadata
 * @package Stick\Service
 */
class ObjectMetadata extends DataObject implements MetadataInterface
{
    /**
     * @return ServiceInterface
     */
    public function getSupplicant() : ServiceInterface
    {
        return $this->data['supplicant'];
    }

    /**
     * @param ServiceInterface $supplicant
     * @return ObjectMetadata
     */
    public function setSupplicant(ServiceInterface $supplicant) : ObjectMetadata
    {
        $this->data['supplicant'] = $supplicant;
        return $this;
    }

    /**
     * @return ServiceInterface
     */
    public function getApplicant() : ServiceInterface
    {
        return $this->data['applicant'];
    }

    /**
     * @param ServiceInterface $applicant
     * @return ObjectMetadata
     */
    public function setApplicant(ServiceInterface $applicant) : ObjectMetadata
    {
        $this->data['applicant'] = $applicant;
        return $this;
    }
}
