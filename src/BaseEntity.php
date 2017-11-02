<?php

namespace Stick\Service;

/**
 * Abstract class BaseService
 */
abstract class BaseEntity extends DataObject
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
