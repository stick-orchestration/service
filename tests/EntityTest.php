<?php

namespace Tests;

use Stick\Service\Entity;
use Stick\Service\MetadataObject;

class EntityTest extends DataObjectTest
{
    protected function setUp()
    {
        $this->object = new Entity();
    }

    public function testMetadata()
    {
        $mo = new MetadataObject();
        /**
         * @var $o Entity
         */
        $o = $this->object;
        $this->assertInstanceOf(MetadataObject::class, $o->getMetadata());
        $mo->setData(['test' => '123']);
        $o->setMetadata($mo);
        $this->assertEquals($o->getMetadata(), $mo);
    }
}
