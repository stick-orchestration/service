<?php

namespace Tests;

use Stick\Service\DataObject;
use PHPUnit\Framework\TestCase;
use Stick\Service\DataObjectInterface;

class DataObjectTest extends TestCase
{
    protected $object;

    protected function setUp()
    {
        $this->object = new DataObject();
    }

    public function testGetData()
    {
        /**
         * @var $o DataObject
         */
        $o = $this->object;
        $this->assertEquals($o->getData(), []);
        $o->setData(['test' => 'abc']);
        $this->assertEquals($o->getData(),['test' => 'abc']);
    }
}
