<?php

namespace Stick\Service;

/**
 * Class DataObject
 * @package Stick\Service
 */
class DataObject implements DataObjectInterface
{
    /**
     * @var array
     */
    protected $data;

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array
     * @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * DataObject constructor.
     */
    public function __construct()
    {
        $this->data = [];
    }
}
