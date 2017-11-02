<?php

namespace Stick\Service;

/**
 * Abstract class Entity
 */
abstract class Entity extends DataObject
{
    /**
     * @var DataObject
     */
    public $metadata;

    /**
     * BaseEntity constructor.
     */
    public function __construct()
    {
        $this->metadata = new DataObject();
    }
}
