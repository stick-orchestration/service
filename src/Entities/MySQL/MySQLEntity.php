<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\ActionCallMethodTrait;
use Stick\Service\Entities\ServiceEntity;
use Stick\Service\GrantInterface;
use Stick\Service\ServiceInterface;

/**
 * Class MySQLService
 * @package Stick\Service\Entities\MySQL
 */
class MySQLEntity extends ServiceEntity
{
    use ActionCallMethodTrait;

    public function addObject(ServiceInterface $applicant) : GrantInterface
    {
        //cretae new Database, User and set PWD
        $grant = new MySQLGrant;
        $grant->setApplicant($applicant);
        $grant->setSupplicant($this);
        $grant->setData([]);
        return $grant;
    }

    /**
     * @param GrantInterface $object
     */
    public function removeObject(GrantInterface $object): void
    {
        return;
    }

    public function setPassword(string $user, string $password)
    {

    }
}
