<?php

namespace Stick\Service\Entities\MySQL;

use Stick\Service\AccessGrant;
use Stick\Service\BaseEntity;
use Stick\Service\ServiceInterface;

/**
 * Class MySQLService
 * @package Stick\Service\Entities\MySQL
 */
class MySQLEntity extends BaseEntity implements ServiceInterface
{
    public function addObject(ServiceInterface $applicant) : AccessGrant
    {
        //cretae new Database, User and set PWD
        $grant = new MySQLGrant;
        $grant->setApplicant($applicant);
        $grant->setSupplicant($this);
        $grant->setData([]);
        return $grant;
    }

    /**
     * @param AccessGrant $object
     */
    public function removeObject(AccessGrant $object): void
    {
        // TODO: Implement removeObject() method.
    }

    /**
     * @param ServiceInterface $applicant
     * @return AccessGrant
     */
    public function getObject(ServiceInterface $applicant) : AccessGrant
    {
        // TODO: Implement getObject() method.
    }


    public function setPassword(string $user, string $password)
    {

    }
}
