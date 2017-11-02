<?php

namespace Stick\Service;

/**
 * Interface DataObjectInterface
 * @package Stick\Service
 */
interface DataObjectInterface
{

    /**
     * @return array
     */
    public function getData(): array;

    /**
     * @param array
     * @return void
     */
    public function setData(array $data): void;
}
