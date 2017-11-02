<?php

namespace Tests;

use Stick\Service\MetadataObject;

class MetadataObjectTest extends DataObjectTest
{
    protected function setUp()
    {
        $this->object = new MetadataObject();
    }

    public function testMetadataAccess()
    {
        /**
         * @var $o MetadataObject
         */
        $o = $this->object;
        $o->setData(['abc' => 'def']);
        $this->assertEquals($o['abc'], 'def');
        $o['12'] = 'cde';
        $this->assertEquals($o->getData(), ['abc' => 'def', '12' => 'cde']);
        unset($o['12']);
        $this->assertEquals($o['abc'], 'def');
        $this->assertEquals($o->getData(), ['abc' => 'def']);
        $this->assertTrue(isset($o['abc']));
        $this->assertFalse(isset($o['12']));
    }
}
