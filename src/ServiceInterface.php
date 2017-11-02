<?php

namespace Stick\Service;

/**
 * Interface ServiceInterface
 * @package Stick\Service
 */
interface ServiceInterface
{
    /**
     * @param ServiceInterface $applicant
     * @return AccessGrant
     */
    public function addObject(ServiceInterface $applicant): AccessGrant;

    /**
     * @param AccessGrant $object
     * @return mixed
     */
    public function removeObject(AccessGrant $object);

    /**
     * @param ServiceInterface $applicant
     * @return AccessGrant
     */
    public function getObject(ServiceInterface $applicant): AccessGrant;
}
