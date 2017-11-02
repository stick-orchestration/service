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
     * @return AccessObjectInterface
     */
    public function addObject(ServiceInterface $applicant): AccessObjectInterface;

    /**
     * @param AccessObjectInterface $object
     * @return mixed
     */
    public function removeObject(AccessObjectInterface $object);

    /**
     * @param ServiceInterface $applicant
     * @return AccessObjectInterface
     */
    public function getObject(ServiceInterface $applicant): AccessObjectInterface;
}
