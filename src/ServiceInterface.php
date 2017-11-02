<?php

namespace Stick\Service;

/**
 * Interface ServiceInterface
 * @package Stick\Service
 */
interface ServiceInterface extends EntityInterface
{
    /**
     * @param ServiceInterface $applicant
     * @return GrantInterface
     */
    public function addObject(ServiceInterface $applicant): GrantInterface;

    /**
     * @param GrantInterface $object
     */
    public function removeObject(GrantInterface $object): void;

    /**
     * @param string $action
     * @param array ...$args
     * @return mixed
     */
    public function executeAction(string $action, ...$args);
}
