<?php

namespace Stick\Service;

/**
 * Interface EntityInterface
 * @package Stick\Service
 */
interface EntityInterface extends DataObjectInterface
{
    /**
     * @return DataObjectInterface
     */
    public function getMetadata() : DataObjectInterface;

    /**
     * @param DataObjectInterface $metadata
     * @return Entity
     */
    public function setMetadata(DataObjectInterface $metadata) : Entity;
}
