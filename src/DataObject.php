<?php

namespace Stick\Service;

/**
 * Abstract class DataObject
 * @package Stick\Service
 */
abstract class DataObject
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
}
