<?php

namespace Stick\Service;

/**
 * Abstract class Entity
 */
abstract class Entity extends DataObject implements EntityInterface
{
    /**
     * @var DataObjectInterface
     */
    public $metadata;

    /**
     * @return DataObjectInterface
     */
    public function getMetadata() : DataObjectInterface
    {
        return $this->metadata;
    }

    /**
     * @param DataObjectInterface $metadata
     * @return Entity
     */
    public function setMetadata(DataObjectInterface $metadata) : Entity
    {
        $this->metadata = $metadata;
        return $this;
    }

    /**
     * BaseEntity constructor.
     */
    public function __construct()
    {
        $this->metadata = new DataObject();
    }
}
