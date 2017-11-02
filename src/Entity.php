<?php

namespace Stick\Service;

/**
 * Class Entity
 */
class Entity extends DataObject implements EntityInterface
{
    /**
     * @var MetadataObjectInterface
     */
    public $metadata;

    /**
     * @return MetadataObjectInterface
     */
    public function getMetadata(): MetadataObjectInterface
    {
        return $this->metadata;
    }

    /**
     * @param MetadataObjectInterface $metadata
     * @return Entity
     */
    public function setMetadata(MetadataObjectInterface $metadata): Entity
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * BaseEntity constructor.
     */
    public function __construct()
    {
        $this->metadata = new MetadataObject();
    }
}
