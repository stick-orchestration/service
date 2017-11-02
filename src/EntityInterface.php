<?php

namespace Stick\Service;

/**
 * Interface EntityInterface
 * @package Stick\Service
 */
interface EntityInterface extends DataObjectInterface
{
    /**
     * @return MetadataObjectInterface
     */
    public function getMetadata(): MetadataObjectInterface;

    /**
     * @param MetadataObjectInterface $metadata
     * @return Entity
     */
    public function setMetadata(MetadataObjectInterface $metadata): Entity;
}
